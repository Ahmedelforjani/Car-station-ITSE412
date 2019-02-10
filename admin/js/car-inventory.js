$(document).ready(function(){

    // ----------- IMAGES HANDLING SCRIPT ----------- 
    var button = $('.images .addImg');
    var uploader = $('<input type="file" accept=".png, .jpg, .jpeg" multiple />');
    var images = $('#addImages');
    var loadImagesView = $('#loadImages');
    var insertImage = [];
    var deleteImage = [];

    button.on('click', function () {
      uploader.click();
    });

    uploader.on('change', function (e) {
        for(var i = 0; i < $(this).get(0).files.length; i++){
            var file = e.target.files[i];
            var imageData = URL.createObjectURL(file);
            images.prepend('<div class="col-lg-4"><div class="img" data-from="files" style="background-image: url(\'' + imageData + '\');" rel="'+ file.name +'"><span><i class="la la-close"></i></span></div></div>');
            insertImage.push(file);
        }
    });
    images.on('click', '.img span', function () {
        $(this).parent().parent().remove();
        var removeImg = $(this).parent().attr('rel');

        for(var i = 0; i < insertImage.length; i++)
            if(removeImg == insertImage[i].name)
                insertImage.splice(i,1);

    });

    loadImagesView.on('click', '.img span', function () {
        Swal({
            title: 'Are you sure you want to delete this image?',
            text: 'You will not be able to recover this image!',
            type: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'No, keep it'
            }).then((result) => {
              if (result.value) {
        
                $(this).parent().parent().fadeOut();
                var removeImg = $(this).parent().attr('rel');
                deleteImage.push(removeImg);
        
              }
            });
    });
    // ----------- END IMAGES SCRIPT ----------- 

    var car_id = -1;
    $(document).on('click',".viewer",function(){
        insertImage = [];
        deleteImage = [];
        $(".images .img").parent().remove();
        car_id = $(this).data("id");
        loadImages(car_id);
    });


    $("button[type=submit]").on("click", function(){
        console.log(car_id);
        var formData = new FormData();
        formData.append("car_id", car_id);
        insertImage.forEach(function(image, i){
            formData.append('insert_images[]', image);
        });
        deleteImage.forEach(function(image, i){
            formData.append('delete_images[]', image);
        });
        $.ajax({
            url: 'updateimagescar_data.php',
            type: 'POST',
            dataType: 'json',
            data: formData,
            contentType: false,
            processData: false
            
        }).done(function(response) {
            if (response.status == 'success') {
                swal({
                    title: 'Good job',
                    text: 'images updated successfully',
                    type: 'success',
                    showCancelButton: false,
                    confirmButtonClass: 'btn btn-success',
                    confirmButtonText: 'Ok'
                }).then(
                    function() {
                        $('#viewImages').modal('toggle');
                    }
                )
            } else {
                swal('Oops...', 'There\'s something worng, please try again !\n' + response.status, 'error');
            }
        }).fail(function(jqXHR, textStatus, errorThrown) {
            swal('Sorry :(', 'There\'s something worng with Ajax, please try again ! Error \n' + jqXHR.responseText, 'error');
        });
    });


    function loadImages(id) {
        $.ajax({
            dataType: 'JSON',
            type:'POST',
            url: 'loadcarimages_data.php',
            data: {car_id: id}
        })
        .done(function(response){
            if(response.status == "success")
                response.images.forEach(img => {
                    loadImagesView.prepend('<div class="col-lg-4"><div class="img" data-from="database" style="background-image: url(\'images/car-images/' + img + '\');" rel="'+ img +'"><span><i class="la la-trash"></i></span></div></div>');
                });
        })
        .fail(function(response){
            swal('Oops...', 'Something went wrong with ajax !', 'error');
        });
    }

});