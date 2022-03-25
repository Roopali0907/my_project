$(document).ready(function() {
    $('#Email').hide();
    $('#pass').hide();

    var Email_error = true;
    var pass_error = true;


   
    //password
    $('#email').keyup(function() {
        email_check();
    });

    function email_check() {

        var email_val = $('#email').val();
        if (email_val.length == '') {
            $('#Email').show();
            $('#Email').html("*please fill the correct Email");
            $('#Email').focus();
            $('#Email').css("color", "red");
            Email_error = false;
            return false;
        } else {
            $('#Email').hide();
        }
        if (email_val.indexOf('@') <= 0) {
            $('#Email').show();
            $('#Email').html("*check @ possition");
            $('#Email').focus();
            $('#Email').css("color", "red");
            Email_error = false;
            return false;
        } else {
            $('#Email').hide();
        }
        if (email_val.indexOf('.') <= 0) {
            $('#Email').show();
            $('#Email').html("*please check dot possition");
            $('#Email').focus();
            $('#Email').css("color", "red");
            Email_error = false;
            return false;
        } else {
            $('#Email').hide();
        }
        if ((email_val.charAt(email_val.length - 4) != '.') && (email_val.charAt(email_val.length - 3) != '.')) {
            $('#Email').show();
            $('#Email').html("*Invalid Dot Posstion ");
            $('#Email').focus();
            $('#Email').css("color", "red");
            Email_error = false;
            return false;
        } else {
            $('#Email').hide();
        }

    }

    //check password 
    $('#password').keyup(function() {
        pass_check();
    });

    function pass_check() {
        var pass_val = $('#password').val();
        if (pass_val.length == "") {
            $('#pass').show();
            $('#pass').html("*please fill the correct password");
            $('#pass').focus();
            $('#pass').css("color", "red");
            pass_error = false;
            return false;
        } else {
            $('#pass').hide();
        }
        if ((pass_val.length < 8) || (pass_val.length > 20)) {
            $('#pass').show();
            $('#pass').html("*password length atleast 8 character");
            $('#pass').focus();
            $('#pass').css("color", "red");
            pass_error = false;
            return false;
        } else {
            $('#pass').hide();
        }
    }

    $('#submit_button').click(function() {
       
        Email_error = true;
        pass_error = true;

        email_check();
        pass_check();

        if ((Email_error == true) && (pass_error == true)) {
            return true;
        } else {
            return false;
        }

    });
});