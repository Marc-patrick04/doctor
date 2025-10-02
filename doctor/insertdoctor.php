<?php
$conn=mysqli_connect("localhost","root","","doctorappointment");
if(!$conn){
    echo "connection failled";
}else{
    echo "connection successfull";
}
if(isset($_POST['submit'])){
    $name=$_POST['doctorname'];
    $email=$_POST['doctoremail'];
    $rmdc=$_POST['doctorRMDC'];
    $password=$_POST['password'];
    $confirm=$_POST['confirmpassword'];
    $query=mysqli_query($conn,"INSERT INTO doctor(doctorid,doctorname,doctoremail,doctorRMDC,password,confirmpassword) VALUES('','$name','$email','$rmdc','$password','$confirm')");
    if($query){
        include "Doctor_login.html";
    }else{
        echo "ndanze chn";
    }
}
?>