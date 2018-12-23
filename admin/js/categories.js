$(document).ready(function() {

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#imagePreview').css('background-image', 'url('+e.target.result +')');
                $('#imagePreview').hide();
                $('#imagePreview').fadeIn(650);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#imageUpload").change(function() {
        readURL(this);
    });


    function readCategoryImage(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#category_image_preview').css('background-image', 'url('+e.target.result +')');
                $('#category_image_preview').hide();
                $('#category_image_preview').fadeIn(650);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#category_image").change(function() {
        readCategoryImage(this);
    });

    // make the row active when click
    $(".table").on('click', 'tr',  function() {
      $(this).addClass("active").siblings("tr").removeClass("active");
      var id = $(this).data("id");
      loadCategoryData(id);
    });

    //submit the new category data
    $("#add_new_cat_form").submit(function(e) {
      e.preventDefault();

      // Get form
      var form = $(this)[0];

	    // Create an FormData object
      var data = new FormData(form);

      $.ajax({
          dataType: 'JSON',
          type:'POST',
          url: 'add-new-category_data.php',
          enctype: 'multipart/form-data',
          processData: false,
          contentType: false,
          cache: false,
          data: data
      })
      .done(function(response){
        if(response.message == "success") {
          swal('Added Successfully');
          $(".table").append('<tr data-id="' + response['id'] + '"><td>' + $("input[name='name']").val() + '</td></tr>');
          $('#add_new_cat_form')[0].reset();
          $('#category_image_preview').css("background-image", "url(images/default.png)");
          $("#addnewcategory").modal('toggle');
        } else {
          swal('Oops...', 'Somthing went wrong please try again and check you values', 'error');
        }

      })
      .fail(function(response){
        console.log(response);
        swal('Oops...', 'Something went wrong with ajax !', 'error');
      });
    });


    //submit the update category form
    $("#update_cat_form").submit(function(e) {
      e.preventDefault();

      // Get form
      var form = $(this)[0];

	    // Create an FormData object
      var data = new FormData(form);

      $.ajax({
          dataType: 'JSON',
          type:'POST',
          url: 'update-category_data.php',
          enctype: 'multipart/form-data',
          processData: false,
          contentType: false,
          cache: false,
          data: data
      })
      .done(function(response){
        if(response.message == "success") {
          swal('Updated Successfully');
          $(".table tr.active td").html( $("input[name=category_name]").val() );
        } else {
          console.log(response);
          swal('Oops...', 'Somthing went wrong please try again and check you values', 'error');
        }

      })
      .fail(function(response){
        console.log(response);
        swal('Oops...', 'Something went wrong with ajax !', 'error');
      });
    });

    $("#deleteBtn").on('click', function() {
      var cat_id = $("#cat_id").val();
      Swal({
      title: 'Are you sure you want to delete this category?',
      text: 'This category will be completely removed!',
      type: 'warning',
      showCancelButton: true,
      confirmButtonText: 'Yes, delete it!',
      cancelButtonText: 'No, keep it'
      }).then((result) => {
        if (result.value) {
          $.ajax({
              dataType: 'JSON',
              type:'POST',
              url: 'delete-category_data.php',
              data: {cat_id: cat_id}
          })
          .done(function(response){
            if(response.message == "success") {
              $(".table tr.active").remove();
              $("input[name=category_name], input[name=category_description], #cat_id ").val("");
              $('#imagePreview').css("background-image", "url(images/default.png)");

              $("input[name='category_name']").attr("disabled", "disabled");
              $("textarea[name='category_description']").attr("disabled", "disabled");
              $("#imageUpload").attr("disabled", "disabled");
              $("#deleteBtn").attr("disabled", "disabled");
              $("#saveBtn").attr("disabled", "disabled");
              swal('Deleted Successfully');
            } else {
              console.log(response);
              swal('Oops...', 'Somthing went wrong please try again and check you values', 'error');
            }

          })
          .fail(function(response){
            console.log(response);
            swal('Oops...', 'Something went wrong with ajax !', 'error');
          });
        }
      });
    });


    function loadCategoryData(id) {

      $.ajax({
          dataType: 'JSON',
          type:'POST',
          url: 'load-category-data.php',
          data: {id: id}
      })
      .done(function(response){
        $("input[name='category_name']").removeAttr("disabled").val(response.cat_name);
        $("textarea[name='category_description']").removeAttr("disabled").val(response.cat_desc);
        $("#imagePreview").css("background-image", "url(images/" + response.cat_image + ")");
        $("#imageUpload").removeAttr("disabled");
        $("#cat_id").val(id);
        $("#deleteBtn").removeAttr("disabled");
        $("#saveBtn").removeAttr("disabled");
      })
      .fail(function(response){
        console.log(response);
        swal('Oops...', 'Something went wrong with ajax !', 'error');
      });
    }


});
