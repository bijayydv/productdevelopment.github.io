<?php 
$con = mysqli_connect('localhost','root');

if($con){
    echo "Connection sucessfully established.";
}else{
    echo "Connection failed:";
}

mysqli_select_db($con,'user_db');

 $user = $_POST['user'];
 $email = $_POST['email'];
 $number = $_POST['number'];
 $message = $_POST['message'];

 $query = " insert into userinfodata (user,email,number,message) values('$user','$email','$number','$message')";

 mysqli_query($con, $query);

 header('location:index.php');

?> 