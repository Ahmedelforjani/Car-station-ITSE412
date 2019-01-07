$(document).ready(function(){

    $("#add_new_employee").submit(function(e) {
        e.preventDefault();
  
  
        $.ajax({
            dataType: 'JSON',
            type:'POST',
            url: 'addemployee_data.php',
            // enctype: 'multipart/form-data',
            // processData: false,
            // contentType: false,
            // cache: false,
            data: $(this).serialize() 
        })
        .done(function(response){

            console.log(response);
            
        //   $("#addBtn").removeClass("running").removeAttr("disabled");
        //   if(response.message == "success") {
        //     swal('Added Successfully');
        //     $(".table").append('<tr data-id="' + response['id'] + '"><td>' + $("input[name='name']").val() + '</td></tr>');
        //     $('#add_new_cat_form')[0].reset();
        //     $('#category_image_preview').css("background-image", "url(images/default.png)");
        //     $("#addnewcategory").modal('toggle');
        //   } else {
        //     swal('Oops...', 'Somthing went wrong please try again and check you values', 'error');
        //   }
  
        })
        .fail(function(response,x,y){
            console.log(response);
            
        //   $("#addBtn").removeClass("running").removeAttr("disabled");
        //   console.log(response);
        //   swal('Oops...', 'Something went wrong with ajax !', 'error');
        });
      });
  
});