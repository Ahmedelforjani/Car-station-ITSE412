$(document).ready(function() {

  function validEditForm() {
    var name = $("input[name='category_name']").val();
    var description = $("textarea[name='category_description']").val();
    if(name == "" || description == "") {
      return false;
    }
    return true;
  }

  function validAddForm() {
    var name = $("input[name='name']").val();
    var description = $("textarea[name='description']").val();
    var fileLength = $("#category_image").get(0).files.length;
    if(name == "" || description == "" || fileLength == 0) {
      return false;
    }
    return true;
  }

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


      if(!validAddForm()) {
        swal('Oops...', 'Somthing went wrong please try again and check you values', 'error');
        return;
      }

      $("#addBtn").addClass("running").attr("disabled", "disabled");

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
        $("#addBtn").removeClass("running").removeAttr("disabled");
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
        $("#addBtn").removeClass("running").removeAttr("disabled");
        console.log(response);
        swal('Oops...', 'Something went wrong with ajax !', 'error');
      });
    });


    //submit the update category form
    $("#update_cat_form").submit(function(e) {
      e.preventDefault();

      if(!validEditForm()) {
        swal('Oops...', 'Somthing went wrong please try again and check you values', 'error');
        return;
      }

      $("#saveBtn").addClass("running").attr("disabled", "disabled");
      $("#saveBtn").attr("disabled", "disabled");

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
        $("#saveBtn").removeClass("running").removeAttr("disabled");
        $("#deleteBtn").removeAttr("disabled");
        if(response.message == "success") {
          //show done message
          Swal(
            'Done!',
            'Updated Successflly!',
            'success'
          );
          $(".table tr.active td").html( $("input[name=category_name]").val() );
        } else {
          console.log(response);
          swal('Oops...', 'Somthing went wrong please try again and check you values', 'error');
        }

      })
      .fail(function(response){
        $("#saveBtn").removeClass("running").removeAttr("disabled");
        $("#deleteBtn").removeAttr("disabled");
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
          $("#deleteBtn").addClass("running").attr("disabled", "disabled");
          $("#saveBtn").attr("disabled", "disabled");
          $.ajax({
              dataType: 'JSON',
              type:'POST',
              url: 'delete-category_data.php',
              data: {cat_id: cat_id}
          })
          .done(function(response){

            //remove the spinner
            $("#deleteBtn").removeClass("running");

            if(response.message == "success") {

              //remove the selected row
              $(".table tr.active").remove();

              //make edit fields empty and set image to default
              $("input[name=category_name], textarea[name=category_description], #cat_id ").val("");
              $('#imagePreview').css("background-image", "url(images/default.png)");

              //disable fields and buttons
              $("input[name='category_name']").attr("disabled", "disabled");
              $("textarea[name='category_description']").attr("disabled", "disabled");
              $("#imageUpload").attr("disabled", "disabled");

              //show done message
              Swal(
                'Done!',
                'Deleted Successflly!',
                'success'
              );
            } else {
              $("#deleteBtn").removeAttr("disabled");
              $("#saveBtn").removeAttr("disabled");
              console.log(response);
              swal('Oops...', 'Somthing went wrong please try again and check you values', 'error');
            }

          })
          .fail(function(response){
            $("#deleteBtn").removeClass("running").removeAttr("disabled");
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
