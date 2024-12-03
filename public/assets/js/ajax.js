(function ($) {
    "use strict";
      
    $("#contactForm").validate({
        rules: {
            name: "required",
            email: {
                required: true,
                email: true
            },
            phone: {
                required: true,
                // phoneIN: true,
                // matches: "[0-9]+",  // <-- no such method called "matches"!
                minlength:10,
                maxlength:10
            },
            message: "required"
           
        },// end rules
        messages: {
            name: "Please enter your name",
            email: "Please enter a valid email address",
            phone: "Please enter Your Phone Number",
            message: "Please Complete",
           
        },// end messages
       
  
        submitHandler: function(form) {
            var msg = '';
            var errorClass = 'warning';
            var submitButton = $("#sendMessageButton");
            var alertMessage = $("#alertMessage");
            alertMessage.html("");
            $.ajax({
                url: "ajax.php",
                type: "POST",
                data: $(form).serialize(),
                dataType: 'json', // request type html/json/xml
                beforeSend: function() {
                    // setting a timeout
                    submitButton.text('sending...');
                },
                success: function(response) {
                    console.log(response)
                    // Success message
                    if (response.status === 1001) {
                        msg = response.msg;
                        errorClass= 'success';
                    }else{
                        msg = response.msg;
                        errorClass= 'error';
                    }
                    alertMessage.html('<div class="alert alert-'+errorClass+' alert-dismissible fade show" role="alert">'+
                                          '<strong>'+errorClass+'!&nbsp;</strong>'+msg+
                                          '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>'+
                                        '</div>');
                    setTimeout(function(){ 
                       alertMessage.html("");
                    }, 5000);
                    submitButton.text('SEND');
                    // Reset the form
                    $("#contactForm")[0].reset();
                },
                error: function(jqXHR, textStatus, exception) {
                    // message-error
                    if (jqXHR.status === 0) {
                        msg = 'Not connected.\nPlease verify your network connection.';
                    } else if (jqXHR.status == 404) {
                        msg = 'The requested page not found. [404]';
                    } else if (jqXHR.status == 500) {
                        msg = 'Internal Server Error [500].';
                    } else if (exception === 'parsererror') {
                        msg = 'Requested JSON parse failed.';
                    } else if (exception === 'timeout') {
                        msg = 'Time out error.';
                    } else if (exception === 'abort') {
                        msg = 'Ajax request aborted.';
                    } else {
                        msg = 'Uncaught Error.\n' + jqXHR.responseText;
                    }
                    alertMessage.html('<div class="alert alert-error alert-dismissible fade show" role="alert">'+
                                          '<strong>Error!&nbsp;</strong>'+msg+
                                          '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>'+
                                        '</div>');
                    setTimeout(function(){ 
                       alertMessage.html("");
                    }, 5000);
                }
            });
        }// end submit handler
    });  //end validate

    // popup form JS
    $("#contactFormPopup").validate({
        rules: {
            name: "required",
            service: "required",
            email: {
                required: true,
                email: true
            },
            phone: {
                required: true,
                // phoneIN: true,
                // matches: "[0-9]+",  // <-- no such method called "matches"!
                minlength:10,
                maxlength:10
            },
            message: "required"
           
        },// end rules
        messages: {
            name: "Please enter your name",
            service: "Please select service",
            email: "Please enter a valid email address",
            phone: "Please enter Your Phone Number",
            message: "Please Complete",
           
        },// end messages
       
  
        submitHandler: function(form) {
            var msg = '';
            var errorClass = 'warning';
            var submitButton = $("#sendMessageButtonPopup");
            var alertMessage = $("#alertMessagePopup");
            alertMessage.html("");
            $.ajax({
                url: "ajax.php",
                type: "POST",
                data: $(form).serialize(),
                dataType: 'json', // request type html/json/xml
                beforeSend: function() {
                    // setting a timeout
                    submitButton.text('sending...');
                },
                success: function(response) {
                    console.log(response)
                    // Success message
                    if (response.status === 1001) {
                        msg = response.msg;
                        errorClass= 'success';
                    }else{
                        msg = response.msg;
                        errorClass= 'error';
                    }
                    alertMessage.html('<div class="alert alert-'+errorClass+' alert-dismissible fade show" role="alert">'+
                                          '<strong>'+errorClass+'!&nbsp;</strong>'+msg+
                                          '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>'+
                                        '</div>');
                    setTimeout(function(){ 
                       alertMessage.html("");
                    }, 5000);
                    submitButton.text('SEND');
                    // Reset the form
                    $("#contactFormPopup")[0].reset();
                },
                error: function(jqXHR, textStatus, exception) {
                    // message-error
                    if (jqXHR.status === 0) {
                        msg = 'Not connected.\nPlease verify your network connection.';
                    } else if (jqXHR.status == 404) {
                        msg = 'The requested page not found. [404]';
                    } else if (jqXHR.status == 500) {
                        msg = 'Internal Server Error [500].';
                    } else if (exception === 'parsererror') {
                        msg = 'Requested JSON parse failed.';
                    } else if (exception === 'timeout') {
                        msg = 'Time out error.';
                    } else if (exception === 'abort') {
                        msg = 'Ajax request aborted.';
                    } else {
                        msg = 'Uncaught Error.\n' + jqXHR.responseText;
                    }
                    alertMessage.html('<div class="alert alert-error alert-dismissible fade show" role="alert">'+
                                          '<strong>Error!&nbsp;</strong>'+msg+
                                          '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>'+
                                        '</div>');
                    setTimeout(function(){ 
                       alertMessage.html("");
                    }, 5000);
                }
            });
        }// end submit handler
    });  //end validate
})(jQuery);


function closeForm() {
  $('.form-popup-bg').removeClass('is-visible');
}

$(document).ready(function($) {
  
  /* Contact Form Interactions */
  $('#btnOpenForm').on('click', function(event) {
    event.preventDefault();

    $('.form-popup-bg').addClass('is-visible');
  });
  
    //close popup when clicking x or off popup
  $('.form-popup-bg').on('click', function(event) {
    if ($(event.target).is('.form-popup-bg') || $(event.target).is('#btnCloseForm')) {
      event.preventDefault();
      $(this).removeClass('is-visible');
    }
  });
  
  });
