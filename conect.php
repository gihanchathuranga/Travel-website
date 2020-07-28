<?php
include 'db_connecion.php';
$conn = OpenCon();
//echo "Connected Successfully";


$fname=$_REQUEST['name'];
$lname=$_REQUEST['surname'];
$email=$_REQUEST['email'];
$phone=$_REQUEST['phone'];
$message=$_REQUEST['message'];

$sql = "INSERT INTO contact_us (first_name, last_name, email,phone,message) VALUES ('$fname', '$lname', '$email','$phone','$message')";
if(mysqli_query($conn, $sql)){
echo '<script type="text/javascript">';
    echo 'alert("Records inserted successfully.")';
    echo '</script>';
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}


CloseCon($conn);
?>