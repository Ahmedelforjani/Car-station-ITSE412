$(document).ready(function(){

    $('#loginForm').submit(function(e){
        
        e.preventDefault();

        $.ajax({
            dataType: 'JSON',
            type:'POST',
            url: 'login_data.php',
            data: $(this).serialize()
        })
        .done(function(response){
          if(response.message == "success") {

            document.location.href = "index.php";

          } else {
            swal('Login failed', 'Incorrect username or password. Please try again.', 'error');
          }
  
        })
        .fail(function(jqXHR){
          swal('Oops...', 'Something went wrong with ajax ! \n' + jqXHR.responseText, 'error');
        });

    });

});