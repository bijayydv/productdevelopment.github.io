<?php

@include 'config.php';

if (isset($_POST['submit'])) {

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $user_type = $_POST['user_type'];

   $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if (mysqli_num_rows($result) > 0) {

      $error[] = 'user already exist!';
   } else {

      if ($pass != $cpass) {
         $error[] = 'password not matched!';
      } else {
         $insert = "INSERT INTO user_form(name, email, password, user_type) VALUES('$name','$email','$pass','$user_type')";
         mysqli_query($conn, $insert);
         header('location:login_form.php');
      }
   }
};


?>

<!doctype html>
<html lang="en">

<head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <link rel="stylesheet" type="text/css" href="CSS/style.css" />
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <!-- Optional JavaScript -->
   <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

   <title>Register Page</title>
</head>

<body>
   <ul>
      <li><img style="height: 55px; width: 50px;" src="Image/logo.png" alt=""></img></li>
      <li><a class="active" href="#news">FunOlympics</a></li>
      <li><a href="index.php">Home</a></li>
   </ul>

   <div class="form-container">

    




      <form action="" method="post">
         <h2>Register now</h2>
         <h9 style="color: orange;" style="font-size: 10px;">One step left to watch live broadcast</h9>
         <?php
         if (isset($error)) {
            foreach ($error as $error) {
               echo '<span class="error-msg">' . $error . '</span>';
            };
         };
         ?>
         
         <label  style="margin-right: 200px;" for="name">Name</label>
         <input type="text" name="name" required placeholder="Enter your name">
         <label  style="margin-right: 200px;" for="email">Email</label>
         <input type="email" name="email" required placeholder="Enter your email">
         <label   style="margin-right: 170px;" for="password">Password</label>
         <input type="password" name="password" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*_=+-]).{8,16}$" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required placeholder="Enter your password">
         <label  style="margin-right: 110px;" for="cpassword">Confrim Password</label>
         <input type="password" name="cpassword" required placeholder="Confirm your password">
         <label  style="margin-right: 150px;" for="type">Select Type</label>
         <select name="user_type">
            <option value="user">user</option> 
             <!-- <option value="admin">admin</option>  -->
         </select>
         <input type="submit" name="submit" value="register now" class="form-btn">
         <p>Already have an account? <a href="login_form.php">Login now</a></p>
      </form> 

   </div>
   <footer>
      <p class="text-center p-4 bg-dark text-white">@FunOlympicCommunity</p>
   </footer>

</body>

</html>