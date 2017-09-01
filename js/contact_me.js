// Contact Form Scripts

$(function() {

    $("#contactForm input,#contactForm textarea").jqBootstrapValidation({
        preventSubmit: true,
        submitError: function($form, event, errors) {
            // additional error messages or events
        },
        submitSuccess: function($form, event) {
            event.preventDefault(); // prevent default submit behaviour
            // get values from FORM
            var input_name = $("input#name").val();
            var input_email = $("input#email").val();
            var input_phone = $("input#phone").val();
            var input_message = $("textarea#message").val();
            var firstName = input_name; // For Success/Failure Message
            // Check for white space in name for Success/Fail message
            if (firstName.indexOf(' ') >= 0) {
                firstName = input_name.split(' ').slice(0, -1).join(' ');
            }

            var r_name = input_name.replace(" ","%20");
            var r_email = input_email.replace(" ","%20");
            var r_message = input_message.replace(" ","%20");

            var name = "entry.1694965721";
            var email = "entry.1699777172";
            var message = "entry.1663075413";

            var baseURL = 'https://docs.google.com/forms/d/e/1FAIpQLSfrtzJbAMWSLYtnrVI3iOctZkBpATFBFrjfaRqTjo-tRo0Uyg/formResponse?';
            var submitRef = '&submit=Submit';
            var submitURL = (baseURL + name + "=" + r_name + "&" + email + "=" + r_email + "&" + message + "=" + r_message + submitRef);
            console.log(submitURL);
            $(this)[0].action=submitURL;
            $('#success').html("<div class='alert alert-success'>");
            $('#success > .alert-success').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                .append("</button>");
            $('#success > .alert-success')
                .append("<strong>Your message has been sent. </strong>");
            $('#success > .alert-success')
                .append('</div>');

            //clear all fields
            $('#contactForm').trigger("reset");


        },
        filter: function() {
            return $(this).is(":visible");
        },
    });

    $("a[data-toggle=\"tab\"]").click(function(e) {
        e.preventDefault();
        $(this).tab("show");
    });
});


/*When clicking on Full hide fail/success boxes */
$('#name').focus(function() {
    $('#success').html('');
});
