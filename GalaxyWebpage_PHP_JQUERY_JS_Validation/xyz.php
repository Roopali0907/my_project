<?php include('database.php');?>
<?php
    if(isset($_POST['submit'])) {

        $patient_name = $_POST['patient_name'];
        $contact = $_POST['contact'];
        $a_date = $_POST['a_date'];
        $a_time = $_POST['a_time'];
        $symptoms =$_POST['symptoms'];
        $doctors = $_POST['doctors'];
        $query= "INSERT INTO data (patient_name,contact,a_date,a_time,symptoms,doctors)
        VALUES ('$patient_name','$contact','$a_date','$a_time','$symptoms','$doctors')";
        // $conn->query($query);
        $result=mysqli_query($conn,$query);
    }

?>