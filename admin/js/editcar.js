$(document).ready(function(){
    
    $(".m-form .m-form__group:first-child").css("padding-top","15px");
    
    $('.m_selectpicker').selectpicker();
    $('.m_selectpicker').on('changed.bs.select', function() {
        validator.element($(this));
    });

    $('#options').summernote({
        height: 200,
        toolbar: [
            ['style', ['bold', 'italic', 'underline']],
            ['color', ['color']],
            ['para', ['ul']],
            ['height', ['height']]
        ],
        fontsize: 16
    });

    $('#editcar_form').validate({
        rules: {
            name: {
                required: true
            },
            model: {
                required: true,
                rangelength: [1, 4],
                number: true
            },
            color: {
                required: true
            },
            milage: {
                required: true,
                number: true
            },
            engine: {
                required: true,
                number: true
            },
            category_id: {
                required: true
            },
            condition: {
                required: true
            },
            doors: {
                required: true,
                number: true
            },
            passengers: {
                required: true,
                number: true
            },
            price: {
                required: true,
                number: true
            },
            overview: {
                required: true
            }
        }, 
        messages: {
            name: {
                required: "This field can't be empty"
            },
            model: {
                required: "This field can't be empty",
                rangelength: "This field accepted 4 digit only",
                number: "This field can be numbers only"
            },
            color: {
                required: "This field can't be empty"
            },
            milage: {
                required: "This field can't be empty",
                number: "This field can be numbers only"
            },
            engine: {
                required: "This field can't be empty",
                number: "This field can be numbers only"
            },
            category_id: {
                required: "This field can't be empty"
            },
            condition: {
                required: "This field can't be empty"
            },
            doors: {
                required: "This field can't be empty",
                number: "This field can be numbers only"
            },
            passengers: {
                required: "This field can't be empty",
                number: "This field can be numbers only"
            },
            price: {
                required: "This field can't be empty",
                number: "This field can be numbers only"
            },
            overview: {
                required: "This field can't be empty"
            }
        },
        highlight: function(element) { // hightlight error inputs
            $(element)
                .closest('.form-group').removeClass('has-success').addClass('has-danger'); // set error class to the control group
        },

        unhighlight: function(element) { // revert the change done by hightlight
            $(element)
                .closest('.form-group').removeClass('has-danger'); // set error class to the control group
        },
        success: function(label) {
            if (label.attr("for") == "transmission") { // for checkboxes and radio buttons, no need to show OK icon
                label
                    .closest('.form-group').removeClass('has-danger').addClass('has-success');
                label.remove(); // remove error label here
            } else { // display success icon for other inputs
                label
                    .addClass('valid') // mark the current input as valid and display OK icon
                    .closest('.form-group').removeClass('has-danger').addClass('has-success'); // set success class to the control group
            }
        },

        invalidHandler: function(event, validator) {
            mUtil.scrollTo('m-portlet__body', -200);
            event.preventDefault();
        },
        submitHandler: function(form) {
            $('#options').summernote('destroy');
            var options = $('#options').html();
            $.ajax({
                url: 'updatecar_data.php',
                type: 'POST',
                dataType: 'json',
                data: $('#editcar_form').serialize() + "&options=" + options
            }).done(function(response) {
                if (response.status == 'success') {
                    swal({
                        title: 'Good job',
                        text: 'You have been updated a car successfully',
                        type: 'success',
                        showCancelButton: false,
                        confirmButtonClass: 'btn btn-success',
                        confirmButtonText: 'Ok'
                    }).then(
                        function() {
                            document.location.href = "car_inventory.php";
                        }
                    )
                } else {
                    swal('Oops...', 'There\'s something worng, please try again !\n'+ response.status, 'error');
                }
            }).fail(function() {
                swal('Sorry :(', 'There\'s something worng with server, please try again !', 'error');
            });
        }
    });


    $("#deleteBtn").on('click', function() {
        var id = $("input[name='id']").val();
        Swal({
        title: 'Are you sure you want to delete this car?',
        text: 'This car will be completely removed!',
        type: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Yes, delete it!',
        cancelButtonText: 'No, keep it'
        }).then((result) => {
            if (result.value) {
                $.ajax({
                    dataType: 'JSON',
                    type:'POST',
                    url: 'deletecar_data.php',
                    data: {id: id}
                })
                .done(function(response){  
                    if (response.status == 'success') {
                        swal({
                            title: 'Good job',
                            text: 'You have been deleted a car successfully',
                            type: 'success',
                            showCancelButton: false,
                            confirmButtonClass: 'btn btn-success',
                            confirmButtonText: 'Ok'
                        }).then(
                            function() {
                                document.location.href = "car_inventory.php";
                            }
                        )
                    } else {
                        swal('Oops...', 'There\'s something worng, please try again !\n'+ response.status, 'error');
                    }
    
                })
                .fail(function(jqXHR, textStatus, errorThrown){
                    swal('Oops...', 'Something went wrong with ajax !' + jqXHR.responseText, 'error');
                });
            }
        });
      });
})
.ajaxStart(function(){
    mApp.block('#blockui_portlet', {
        overlayColor: '#000000',
        type: 'loader',
        state: 'primary',
        message: 'Processing...'
    });
}) 
.ajaxStop(function() {
    mApp.unblock('#blockui_portlet');
});