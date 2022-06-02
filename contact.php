<?php include "contact.html"?>

<?php
if(isset($_POST['name']))
    $server="localhost";
    $username="root";
    $password="";
    $con=mysqli_connect($server,$username,$password);
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $subject=$_POST['subject'];
    $message=$_POST['message'];

    $sql="INSERT INTO 'TRIP'('name','email','phone','subject','message') VALUES('$name','$email','$phone','$subject','$message');";
    echo $sql;

    if($con->query($sql)==TRUE){
        echo "Successfully inserted";
    }
    else{
        echo "ERROR : $sql <br> $conn->error";
    }
    $con->close();

?>

