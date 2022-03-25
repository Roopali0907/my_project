$(document).ready(function() {
    $('#FName').hide();
    $('#LName').hide();
    $('#phoneNumber').hide();
    $('#Email').hide();
    $('#pass').hide();
    $('#cpass').hide();

    var Fname_error = true;
    var Lname_error = true;
    var phone_error = true;
    var Email_error = true;
    var pass_error = true;
    var cpass_error = true;


    $('#Fname').keyup(function() {
        FName_check();
    });

    function FName_check() {
        var Fname_val = $('#Fname').val();
        console.log();

        if (Fname_val.length == '') {
            $('#FName').show();
            $('#FName').html("*please fill the First Name");
            $('#FName').focus();
            $('#FName').css("color", "red");
            Fname_error = false;
            return false;
        } else {
            $('#FName').hide();
        }
        if ((Fname_val.length < 3) || (Fname_val.length > 10)) {
            $('#FName').show();
            $('#FName').html("*First name must be 3 or 20");
            $('#FName').focus();
            $('#FName').css("color", "red");
            Fname_error = false;
            return false;
        } else {
            $('#FName').hide();
        }
        if (!isNaN(Fname_val)) {
            $('#FName').show();
            $('#FName').html("*only Albhabet");
            $('#FName').focus();
            $('#FName').css("color", "red");
            Fname_error = false;
            return false;
        } else {
            $('#FName').hide();
        }
        if (!isNaN(Fname_val)) {
            $('#FName').show();
            $('#FName').html("*only Albhabet");
            $('#FName').focus();
            $('#FName').css("color", "red");
            Fname_error = false;
            return false;
        } else {
            $('#FName').hide();
        }


    }
    //last name
    $('#Lname').keyup(function() {
        LName_check();
    });

    function LName_check() {
        var Lname_val = $('#Lname').val();
        console.log();

        if (Lname_val.length == '') {
            $('#LName').show();
            $('#LName').html("*please fill the Last Name");
            $('#LName').focus();
            $('#LName').css("color", "red");
            Lname_error = false;
            return false;
        } else {
            $('#LName').hide();
        }
        if ((Lname_val.length < 3) || (Lname_val.length > 10)) {
            $('#LName').show();
            $('#LName').html("*Last name must be 3 or 20");
            $('#LName').focus();
            $('#LName').css("color", "red");
            Lname_error = false;
            return false;
        } else {
            $('#LName').hide();
        }

        if (!isNaN(Lname_val)) {
            $('#LName').show();
            $('#LName').html("*only Albhabet");
            $('#LName').focus();
            $('#LName').css("color", "red");
            Lname_error = false;
            return false;
        } else {
            $('#LName').hide();
        }

    }
    //phone number 
    $('#phone_Number').keyup(function() {
        PhoneNumber_check();
    });

    function PhoneNumber_check() {
        var phone_val = $('#phone_Number').val();
        console.log();

        if (phone_val.length == '') {
            $('#phoneNumber').show();
            $('#phoneNumber').html("*please fill the Phone Number.");
            $('#phoneNumber').focus();
            $('#phoneNumber').css("color", "red");
            phone_error = false;
            return false;
        } else {
            $('#phoneNumber').hide();
        }
        if ((phone_val.length < 10) || (phone_val.length > 10)) {
            $('#phoneNumber').show();
            $('#phoneNumber').html("*Phone number must be 10 digit");
            $('#phoneNumber').focus();
            $('#phoneNumber').css("color", "red");
            phone_error = false;
            return false;
        } else {
            $('#phoneNumber').hide();
        }

    }

    //password
    $('#email').keyup(function() {
        email_check();
    });

    function email_check() {

        var email_val = $('#email').val();
        if (email_val.length == '') {
            $('#Email').show();
            $('#Email').html("*please fill the Email");
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
            $('#pass').html("*please fill the password.");
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
    //confirm password 
    $('#cpassword').keyup(function() {
        cpass_check();
    });

    function cpass_check() {
        var cpass_val = $('#cpassword').val();
        if (cpass_val.length == "") {
            $('#cpass').show();
            $('#cpass').html("*please fill the confirm password");
            $('#cpass').focus();
            $('#cpass').css("color", "red");
            cpass_error = false;
            return false;
        } else {
            $('#cpass').hide();
        }
        var cpass_val = $('#cpassword').val();
        var pass_val = $('#password').val();
        if (pass_val != cpass_val) {
            $('#cpass').show();
            $('#cpass').html("*Password are not match");
            $('#cpass').focus();
            $('#cpass').css("color", "red");
            cpass_error = false;
            return false;
        } else {
            $('#cpass').hide();
        }

    }
    //checkbox or submit button
    //check details is mandetory

    $('#submit_button').click(function() {
        Fname_error = true;
        Lname_error = true;
        phone_error = true;
        Email_error = true;
        pass_error = true;
        cpass_error = true;

        FName_check();
        LName_check();
        PhoneNumber_check();
        email_check();
        pass_check();
        cpass_check();
        if ((Fname_error == true) && (Lname_error == true) && (phone_error == true) && (Email_error == true) && (pass_error == true) && (cpass_error == true)) {
            return true;
        } else {
            return false;
        }

    });

    // all Validitation
});