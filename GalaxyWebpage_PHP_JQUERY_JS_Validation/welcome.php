<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="Css/bootstrap.min.css">
  <link rel="stylesheet" href="signup.php">
  <link rel="stylesheet" href="login.php">

  <title>Welcome</title>
</head>

<body>
  <nav class="navbar navbar-expand-sm navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand text-primary" href="#"><b>DASHBOARD</b></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
        <ul class="navbar-nav ">
          <li class="nav-item">
            <button type="button" class="btn btn-outline-success text-left
            "><a href="index.php" style="text-decoration: none;">LOGOUT</a></button>
          </li>

        </ul>
      </div>
  </nav>
  <div class="justify-content-center mt-5">
    <img src="welcome.jpg" class="rounded mx-auto d-block" alt="...">
  </div>
  <div class="container justify-content-right">
    <table class="table table-striped  table-dark">
      <thead class="thead-dark">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">First Name</th>
          <th scope="col">Last Name</th>
          <th scope="col">Phone Number</th>
          <th scope="col">Email</th>
          <th scope="col">Password</th>
          <th scope="col">Confirm Password</th>
        </tr>
      </thead>
      <?php
          include 'config.php';
          session_start();
          $sql = "SELECT * from signin";
          $result = mysqli_query($conn, $sql);
          $nums = mysqli_num_rows($result);
          // echo $nums;
          while($res = mysqli_fetch_array($result)){
          ?>
          <tr>
          <td><?php echo $res['id'];?></td>
          <td><?php echo $res['fname'];?></td>
          <td><?php echo $res['lname'];?></td>
          <td><?php echo $res['phone_number'];?></td>
          <td><?php echo $res['email'];?></td>
          <td><?php echo $res['password'];?></td>
          <td><?php echo $res['c_password'];?></td>
          
        </tr>
    <?php
      }
    ?>
    </table>
  </div>
</body>

</html>