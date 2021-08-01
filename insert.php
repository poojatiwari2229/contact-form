<?php
include('connection.php') ;

 $first=$_GET['first'];
 $last=$_GET['last'];
 $email=$_GET['email'];
 $msg=$_GET['msg'];


$query="insert into contact_details(first_name,last_name,l_email,l_msg) 
values('$first',' $last','$email','$msg')";
if(mysqli_query($conn,$query))
   {
         

    echo '<script language="javascript">';
    echo 'alert("Your Record Register successfully");';
    echo 'window.location.href="contact.php";';
    echo '</script>';

    }
 else
 {
   
      echo '<script language="javascript">';
    echo 'alert("Error");';
    echo 'window.location.href="contact.php";';
    echo '</script>';

 }
?>