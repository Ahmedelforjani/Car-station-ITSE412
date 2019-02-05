$(document).ready(function() {

  //jquery-viewer plugin to zoom the small images
  // $('#images').viewer({
  //   fullscreen: false,
  //   rotatable: false,
  //   scalable: false,
  //   movable: false,
  //   zoomable: false
  // });

  $('.thumbnail').viewbox();

  //upload images object
  var uploadObj = $("#fileuploader").uploadFile({
    url:"slide-images-uploader.php",
    fileName:"images",
    autoSubmit: false,
    onSuccess:function(files,data,xhr,pd)
    {
        //files: list of files
        //data: response from server
        //xhr : jquer xhr object

        //here i want to append inserted images to my list
        var newLi =
          $("<li data-id='5'><a href='images/3552_48363674_780546318950713_7557789865564176384_n.png' class='thumbnail'><img src='images/3552_48363674_780546318950713_7557789865564176384_n.png' alt='' class='img-fluid'></a><span class='delete-image'>x</span></li>");
        var ul = $("#images").html();
        $("#images li").remove();
        $("#images").html(ul);
        console.log(ul);
        $("#images").append(newLi);
        $('.thumbnail').viewbox();

        console.log(data);
    }
  });

  //click on upload images btn.
  $("#upload").on('click', function() {
    uploadObj.startUpload();
  });



  $('ul').on('click', '.delete-image', function() {
    Swal({
    title: 'Are you sure you want to delete this image?',
    text: 'You will not be able to recover this image!',
    type: 'warning',
    showCancelButton: true,
    confirmButtonText: 'Yes, delete it!',
    cancelButtonText: 'No, keep it'
    }).then((result) => {
      if (result.value) {

        $.ajax({
            type:'POST',
            url: 'delete-image.php',
            data: {image_id: $(this).parent('li').data('id')}
        })
        .done(function(response){
          console.log(response);
          swal('Deleted Successfully');
        })
        .fail(function(response){
          console.log(response);
         swal('Oops...', 'Something went wrong with ajax !', 'error');
        });



        $(this).parent("li").fadeOut();

      }
    });

  });

  $("#welcome_message_form").submit(function(e) {
    e.preventDefault();
    $.ajax({
        type:'POST',
        url: 'home-page_data.php',
        data: $("#welcome_message_form").serialize()
    })
    .done(function(response){
      console.log(response);
      swal('Updated Successfully');
    })
    .fail(function(response){
      console.log(response);
     swal('Oops...', 'Something went wrong with ajax !', 'error');
    });
  });

  $("#about_us_message_form").submit(function(e) {
    e.preventDefault();
    $.ajax({
        type:'POST',
        url: 'home-page_data.php',
        data: $("#about_us_message_form").serialize()
    })
    .done(function(response){
      console.log(response);
      swal('Updated Successfully');
    })
    .fail(function(response){
      console.log(response);
     swal('Oops...', 'Something went wrong with ajax !', 'error');
    });
  });

  $("#statistics_form").submit(function(e) {
    e.preventDefault();
    $.ajax({
        type:'POST',
        url: 'home-page_data.php',
        data: $("#statistics_form").serialize()
    })
    .done(function(response){
      console.log(response);
      swal('Updated Successfully');
    })
    .fail(function(response){
      console.log(response);
     swal('Oops...', 'Something went wrong with ajax !', 'error');
    });
  });

  $("#info_form").submit(function(e) {
    e.preventDefault();
    $.ajax({
        type:'POST',
        url: 'home-page_data.php',
        data: $("#info_form").serialize()
    })
    .done(function(response){
      console.log(response);
      swal('Updated Successfully');
    })
    .fail(function(response){
      console.log(response);
     swal('Oops...', 'Something went wrong with ajax !', 'error');
    });
  });



});
