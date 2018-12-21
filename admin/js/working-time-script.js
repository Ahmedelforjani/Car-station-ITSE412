$(document).ready(function() {

  $("#working_time_form").submit(function(e) {
    e.preventDefault();
    $.ajax({
        type:'POST',
        url: 'working-time-page_data.php',
        data: $("#working_time_form").serialize()
    })
    .done(function(response){
      console.log($("#working_time_form").serialize());
      console.log(response);
      swal('Updated Successfully');
    })
    .fail(function(response){
      console.log(response);
     swal('Oops...', 'Something went wrong with ajax !', 'error');
    });
  });

  $('[data-switch=true]').on('switchChange.bootstrapSwitch', function (event, state) {
    if(state == false) {
      $(this).parent().parent().parent().siblings(".timepicker").find("input").attr("disabled", "true");
    } else {
      $(this).parent().parent().parent().siblings(".timepicker").find("input").removeAttr("disabled");
    }
  });


});
