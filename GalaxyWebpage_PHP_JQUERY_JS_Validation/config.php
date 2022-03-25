<?php

$server ="localhost";
$username ="root";
$password = "";
$database ="registration";

$conn = mysqli_connect($server,$username,$password,$database);
if(!$conn){
    echo "<script>alert('connection Failed.')</script>";
}
?>


<?php

// session_start();
// if(isset($_SESSION['email'])){
//    header("Location:index.php");
// }
?>