<?php
$conn=mysqli_connect("localhost","root","","doctorappointment");
if(isset($_POST['submit'])){
    $name=$_POST['patientname'];
    $email=$_POST['patientemail'];
    $password=$_POST['password'];
    $confirm=$_POST['confirmpassword'];
    $patient=mysqli_query($conn,"INSERT INTO patient(patientname,patientemail,password,confirmpassword) VALUES('$name','$email','$password','$confirm')");
   
    if($patient){
        include "patient_login.html";
    }else{
        echo "bbyanze";
    }
}
?>