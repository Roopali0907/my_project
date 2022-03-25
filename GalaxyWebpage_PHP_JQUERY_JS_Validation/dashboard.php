<!DOCTYPE html>
<html lang="en">
<head>
  <title>Dashboard</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  
   <!-- Option 1: Bootstrap Bundle with Popper -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <style>
      table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
        padding: 2.5%;
      }
</style>
</head>
<body>
<?php session_start(); if(isset($_SESSION['email'])){?>

    <nav class="navbar navbar-expand-sm navbar-light bg-light">
	  <div class="container">
		<a class="navbar-brand text-primary" href="#"><b>@ ZehnTech</b></a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		  <span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
		  <ul class="navbar-nav ">
			<li class="nav-item">
			  <a class="nav-link active" aria-current="page" href="index.php?page=logout">logout</a>
			</li>
			<li class="nav-item">
			  <a class="nav-link" href="#"><b class="text-primary">Welcome</b> @<?php echo $_SESSION['fname'] ." ". $_SESSION['lname'];?></a>
			</li>			
		  </ul>		  
		</div>
	  </div>
	</nav>
 


<div class="container my-5">

        <div class="row">
            <!-- <div class="col-sm-4 my-3">
                <center><img src="<?php echo $_SESSION['img'];?>" alt="<?php echo $_SESSION['img'];?>" class="img-thumbnail" style="height: 50%;"></center>
            </div> -->
            <div class="col-sm-2 my-3"></div>
            <div class="col-sm-6 my-3">
            <center>
              <div class="row">
                <table style="width:100%">
                    <tr>
                        <th>First Name:</th>
                        <td><?php echo $_SESSION['fname'];?></td>
                    </tr>
                    <tr>
                        <th>Last Name:</th>
                        <td><?php echo $_SESSION['lname']; ?></td>
                    </tr>
                    <tr>
                        <th>Email:</th>
                        <td><?php  echo $_SESSION['email'];?></td>
                    </tr>
                    <tr>
                        <th>Password:</th>
                        <td><?php echo $_SESSION['password'];?></td>
                    </tr>
                    <tr>
                        <th>Confirm Password:</th>
                        <td><?php echo$_SESSION['c_password']; ?></td>
                    </tr>
                </table>
                
              </div>
              </center>
              <div class="row">
              <center><h3 class="my-5"><a href="index.php?page=edit" class="btn btn-primary">edit profile</a> <a class="btn btn-primary" href="index.php?page=logout"> logout</a></h3></center>
              </div>
            </div>
        </div>
</div>

<br>

<?php } else header('location:index.php?page=home');?>