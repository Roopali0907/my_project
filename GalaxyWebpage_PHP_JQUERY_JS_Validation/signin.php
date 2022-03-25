<?php
include 'config.php';
session_start();
if (isset($_SESSION['email'])) {
    header("Location:login.php");
}


if (isset($_POST['submit'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $phone_number = $_POST['phone_number'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $c_password = $_POST['c_password'];

    if ($password == $c_password) {
        $sql = "SELECT * FROM signin WHERE email ='$email'";
        $result = mysqli_query($conn, $sql);
        if (!$result->num_rows > 0) {
            $sql = "INSERT INTO signin(fname,lname,phone_number,email,password,c_password)
        VALUES('$fname','$lname','$phone_number','$email','$password','$c_password')";
            $result = mysqli_query($conn, $sql);
            if ($result) {

                $fname = "";
                $lname = "";
                $phone_number = "";
                $email = "";
                $_POST['password'] = "";
                $_POST['c_password'] = "";
                echo "<script>alert('Wow!!Registration Successfully Done..')</script>";
            } else {
                echo "<script>alert('OOPS!! something went wrong..')</script>";
            }
        } else {
            echo "<script>alert('OOPS!!Email already Exists..')</script>";
        }
    } else {
        echo "<script>alert('Password not match!!')</script>";
    }
}
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Form Validation</title>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="index.css">
</head>

<body>
<section class="h-70 bg-light">
        <form method="post"  id="myfrom" class="registartion-form" >
            <div class="container py-5 h-70">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col">
                        <div class="card card-registration my-4">
                            <div class="row g-0">
                                <div class="col-xl-6 d-none d-xl-block mt-5">
                                    <img src="image1.jpg"
                                        alt="Sample photo" class="img-fluid"
                                        style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
                                </div>
                                <div class="col-xl-6">
                                    <div class="card-body p-md-5 text-black">
                                        <h3 class="mb-5 text-uppercase">🅵🅾🆁🅼 🆅🅰🅻🅸🅳🅰🆃🅸🅾🅽
                                        </h3>

                                        <div class="row">
                                            <div class="form-outline mt-3">
                                                <label class="form-label" >First Name</label><span class="text-danger"style="font-weight-bold">*<small></small></span>
                                                <input type="text" id="Fname"name="fname"
                                                    class="form-control form-control-lg required" style="font-size:14px"placeholder="Enter Your First Name"/>

                                                <!--<i class="fas fa-check-circle "></i>
                                                    <i class="fas fa-exclamation-circle "></i>-->
                                                <span id="FName" class="text-danger font-weight-bold"></span>

                                            </div>
                                            <div class="form-outline mt-3">
                                                <label class="form-label" >Last Name</label><span class="text-danger"style="font-weight-bold">*<small></small></span>
                                                <input type="text" id="Lname"name="lname"
                                                    class="form-control form-control-lg required" style="font-size:14px"placeholder="Enter Your Last Name"/>
                                                <span id="LName" class="text-danger font-weight-bold"></span>
                                            </div>
                                            <div class="form-outline mt-3">
                                                <label class="form-label" >Phone Number</label><span class="text-danger"style="font-weight-bold">*<small></small></span>
                                                <input type="text" id="phone_Number"name="phone_number"
                                                    class="form-control form-control-lg required" style="font-size:14px"placeholder="Enter Your Phone Number"/>
                                                <span id="phoneNumber" class="text-danger font-weight-bold"></span>
                                            </div>
                                            <div class="form-outline">
                                                <label class="form-label" >Email</label><span class="text-danger"style="font-weight-bold">*<small></small></span>
                                                <input type="text" id="email"name="email"
                                                    class="form-control form-control-lg required "style="font-size:14px" placeholder="email@example.com"/>
                                                <span id="Email" class="text-danger font-weight-bold"></span>
                                            </div>
                                        </div>
                                        <div class="col mt-3">
                                            <div class="form-outline">
                                                <label class="form-label" name="name">Password</label><span class="text-danger"style="font-weight-bold">*<small></small></span>
                                                <input type="password" id="password"name="password"
                                                    class="form-control form-control-lg required" style="font-size:14px"placeholder="Enter Password" />
                                                <span id="pass" class="text-danger font-weight-bold "></span>
                                            </div>
                                        </div>
                                        <div class="col mt-3">
                                            <div class="form-outline">
                                                <label class="form-label" name="name">Confirm Password</label><span class="text-danger"style="font-weight-bold">*<small></small>
                                                <input type="password" id="cpassword"name="c_password"
                                                    class="form-control form-control-lg required" style="font-size:14px"placeholder="Enter Confirm Password."/>
                                                <span id="cpass" class="text-danger font-weight-bold"></span>

                                            </div>
                                        </div>
                                        <div>
                                            <input type="checkbox" id="terms_and_conditions" value="1" onclick="terms_changed(this)" />
                                            <label for="terms_and_conditions">I agree to the Terms of Service:</label>
                                        </div>
                                        <div class="text-center mt-5">
                                            <button name="submit" type="submit" id="submit_button" class="btn btn-danger" disabled>SignIn</button>
                                            <p class="mb-5 pb-lg-2 mt-3" style="color: black;">Already an account? <a
                                                href="login.php" style="color: rgb(80, 9, 80);">Log In</a>
                                            </p>
                                        </div>
                                        <div id="responce">
                                            <span id="mesgError" class="text-center text-danger font-weight-bold"></span> 
                                            <span id="submit" class="text-center text-success font-weight-bold "></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>
    <script src="js/jquery-3.6.0.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="index.js"></script>
    <script type="text/javascript">
         function terms_changed(termsCheckBox) {
                //If the checkbox has been checked
                if (termsCheckBox.checked) {
                    //Set the disabled property to FALSE and enable the button.
                    document.getElementById("submit_button").disabled = false;
                } else {
                    //Otherwise, disable the submit button.
                    document.getElementById("submit_button").disabled = true;
                }
            }
    </script>
</body>

</html>
<!-- <a class="small text-muted" href="#!">Forgot password?</a>
                                        <p class="mb-5 pb-lg-2 mt-3" style="color: black;">Don't have an account? <a
                                                href="signin.php" style="color: rgb(80, 9, 80);">Register here</a>
                                        </p> -->