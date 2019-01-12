$(document).ready(function(){
    
    // ----------- IMAGES HANDLING SCRIPT ----------- 
    var button = $('.images .addImg');
    var uploader = $('<input type="file" accept=".png, .jpg, .jpeg" multiple />');
    var images = $('.images');
    var imageFiles = [];

    button.on('click', function () {
      uploader.click();
    });

    uploader.on('change', function (e) {
        for(var i = 0; i < $(this).get(0).files.length; i++){
            var file = e.target.files[i];
            var imageData = URL.createObjectURL(file);
            images.prepend('<div class="col-lg-3"><div class="img" style="background-image: url(\'' + imageData + '\');" rel="'+ file.name +'"><span><i class="la la-close"></i></span></div></div>');
            imageFiles.push(file);
        }
    });
    images.on('click', '.img span', function () {
        $(this).parent().parent().remove();
        var removeImg = $(this).parent().attr('rel');

        for(var i = 0; i < imageFiles.length; i++)
            if(removeImg == imageFiles[i].name)
                imageFiles.splice(i,1);
    });
    // ----------- END IMAGES SCRIPT ----------- 


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

    $('#addnewcar_form').validate({
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
            var formData = new FormData($('#addnewcar_form')[0]);
            imageFiles.forEach(function(image, i){
                formData.append('image[]', image);
            });
            $('#options').summernote('destroy');
            var options = $('#options').html();
            formData.append('options', options);
            $.ajax({
                url: 'addnewcar_data.php',
                type: 'POST',
                dataType: 'json',
                data: formData,
                contentType: false,
                processData: false
                
            }).done(function(response) {
                if (response.status == 'success') {
                    swal({
                        title: 'Good job',
                        text: 'You have been added a new car successfully',
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
            }).fail(function(jqXHR, textStatus, errorThrown) {
                swal('Sorry :(', 'There\'s something worng with Ajax, please try again ! Error \n' + jqXHR.responseText, 'error');
            });
        }
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