<?php
include 'config.php';
session_start();

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql="SELECT * FROM signin WHERE email='$email' AND password='$password'";
    $result=mysqli_query($conn,$sql);
    if($result->num_rows > 0){
        $row = mysqli_fetch_assoc($result);
        $_SESSION['email'] = $row['email'];
        header("Location:welcome.php");
    }
    else{
        echo "<script>alert('OOPS!!Email or Password is Wrong..')</script>";
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
                                    <img src="signinimg.jpg"
                                        alt="Sample photo" class="img-fluid"
                                        style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
                                </div>
                                <div class="col-xl-6">
                                    <div class="card-body p-md-5 text-black">
                                        <h3 class="mb-5 text-center text-uppercase text-danger">Please login to your account
                                        </h3>

                                        <div class="row">
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
                                     
                                        <div>
                                            <input type="checkbox" id="terms_and_conditions" value="1" onclick="terms_changed(this)" />
                                            <a class="small text-primary" href="#!">Forgot password?</a>
                                        </div>
                                        <div class="text-center mt-5">
                                            <button name="submit" type="submit" id="submit_button" class="btn btn-danger" disabled>Log In</button>
                                            
                                            <p class="mb-5 pb-lg-2 mt-3" style="color: black;">Don't have an account? <a href="signin.php" style="color: rgb(80, 9, 80);">Register here</a>
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
    <script src="login.js"></script>
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