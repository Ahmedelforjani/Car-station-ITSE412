$(document).ready(function(){

  // function validEditForm() {
  //   var name = $("input[name='name']").val();
  //   var jobTitle = $("input[name='JobTitle']").val();
  //   var email = $("input[name='email']").val();
  //   var phone = $("input[name='phone']").val();
  //   var fileLength = $("#employee_image").get(0).files.length;
  //   if(name == "" || jobTitle == "" || email == "" || phone == "" || fileLength == 0) {
  //     return false;
  //   }
  //   return true;
  // }

  function validAddForm() {
    var name = $("input[name='name']").val();
    var jobTitle = $("input[name='JobTitle']").val();
    var email = $("input[name='email']").val();
    var phone = $("input[name='phone']").val();
    var fileLength = $("#employee_image").get(0).files.length;
    if(name == "" || jobTitle == "" || email == "" || phone == "" || fileLength == 0) {
      return false;
    }
    return true;
  }

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#employee_image").change(function() {
        readURL(this);
    });


    function readEmployeeImage(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#employee_image").change(function() {
        readEmployeeImage(this);
    });




    $("#add_new_employee").submit(function(e) {
        e.preventDefault();
  
        if(!validAddForm()) {
          swal('Oops...', 'Somthing went wrong please try again and check you values', 'error');
          return;
        }

        var form = $(this)[0];

        // Create an FormData object
        var data = new FormData(form);
  
        $.ajax({
            dataType: 'JSON',
            type:'POST',
            url: 'addemployee_data.php',
            enctype: 'multipart/form-data',
            processData: false,
            contentType: false,
            cache: false,
            data: data
        })
        .done(function(response){

            console.log(response);
            
         
          if(response.message == "success") {
        swal('Added Successfully');
         $(".table").append('<tr data-id="' + response['id'] + '"><td>' + $("input[name='name']").val() + '</td></tr>');
         $('#add_new_employee')[0].reset();
        }
        
        $("#addnewemployee").modal('toggle');
        
  
        })
        .fail(function(response,x,y){
            console.log(response);
            
        
        });
      });

      $('.editBtn').on('click', function(){
        $('#edit_employee')[0].reset();
        var id = $(this).data('id');
        loadEmployeeData(id);
      });
  
      function loadEmployeeData(id) {
        
        $.ajax({
            dataType: 'JSON',
            type:'POST',
            url: 'load-employee-data.php',
            data: {id: id}
        })
        .done(function(response){
          console.log(response.error);
          $("#editemployee input[name = 'name']").val(response.employee_name);
          $("#editemployee input[name = 'jobTitle']").val(response.jobTitle);
          $("#editemployee input[name = 'email']").val(response.email);
          $("#editemployee input[name = 'phone']").val(response.phone);
          $("#editemployee input[name = 'id']").val(id);

        })
        .fail(function(response){
          console.log(response);
          
          swal('Oops...', 'Something went wrong with ajax !', 'error');
        });
      }

      $(".deleteBtn").on('click', function() {
        var id = $(this).data('id');
        Swal({
        title: 'Are you sure you want to delete this employee?',
        text: 'This employee will be completely removed!',
        type: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Yes, delete it!',
        cancelButtonText: 'No, keep it'
        }).then((result) => {
          if (result.value) {
           
            $.ajax({
                dataType: 'JSON',
                type:'POST',
                url: 'delete-employee_data.php',
                data: {id: id}
            })
            .done(function(response){
  
              //remove the spinner
                
              if(response.message == "success") {
  
                
                Swal(
                  'Done!',
                  'Deleted Successflly!',
                  'success'
                  
                );
                
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


      $("#edit_employee").submit(function(e) {
        e.preventDefault();

        
        // Get form
        var form = $(this)[0];
  
        // Create an FormData object
        var data = new FormData(form);
  
        $.ajax({
            dataType: 'JSON',
            type:'POST',
            url: 'update_employee_data.php',
            enctype: 'multipart/form-data',
            processData: false,
            contentType: false,
            cache: false,
            data: data
        })
        .done(function(response){

          console.log(response);
          
          if(response.message == "success") {
            //show done message
            Swal(
              'Done!',
              'Updated Successflly!',
              'success',
            );
            $("#editemployee").modal('toggle');
            console.log(response);
            
          } else {
            swal('Oops...', 'Somthing went wrong please try again and check you values', 'error');
          }
  
        })
        .fail(function(response){
            swal('Oops...', 'Something went wrong with ajax !\n' + response.responseText, 'error');
        });
      });
  

      
      
});