$(document).ready(function(){
    if ($('body.home')
        .length) {
        // Validate the contact form
        $('#contact-form').validate({
            // Add requirements to each of the fields
            rules: {
                name: {
                    required: true,
                    minlength: 2
                },
                email: {
                    required: true,
                    email: true
                },
                message: {
                    required: true,
                    minlength: 10
                }
            },
            // Specify what error messages to display
            // when the user does something horrid
            messages: {
                name: {
                    required: "Please enter your name.",
                    minlength: jQuery.format("At least {0} characters required.")
                },
                email: {
                    required: "Please enter your email.",
                    email: "Please enter a valid email."
                },
                message: {
                    required: "Please enter a message.",
                    minlength: jQuery.format("At least {0} characters required.")
                }
            },
            // Use Ajax to send everything to /php/form.php
            submitHandler: function (form) {
                $("#submit").attr("value", "Sending...");
                $(form).ajaxSubmit({
                    target: "#response",
                    success: function (responseText, statusText, xhr, $form) {
                        $(form).slideUp("fast");
                        $("#response").html(responseText).hide().slideDown("fast");
                    }
                });
                return false;
            }
        });
    };
});