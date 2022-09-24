<?php

@include 'config.php';

session_start();

if (!isset($_SESSION['user_name'])) {
   header('location:login_form.php');
}

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

   <title>Live Broadcast Page</title>
</head>

<body>

   <ul>
      <li><img style="height: 55px; width: 50px;" src="Image/logo.png" alt=""></img></li>
      <li><a class="active" href="#">FunOlympics</a></li>
      <li><a href="index.php">Home</a></li>
      <div class="style" style="font-size: 30px;" style="margin-right: 50px;">
         <li style="color: blue;"><span><?php echo $_SESSION['user_name'] ?></li>
         <a style="color: white;" href="logout.php" class="btn">Logout</a>
      </div>
   </ul>



   <section class="whole-section">

      <section class="my-1">
         <div class="py-3">
            <div class="container-fluidbj">
               <h2 class="text-center">Enjoy your Streaming</h2>
            </div>
         </div>
         <div class=" container-fluid">

            <video width="100%" height="550" controls>
               <source src="video/Watch_the_Opening_Ceremony___Beijing_2022_Highlights(720p).mp4" type="video/mp4">
            </video>
            <p style="color: Red; font-size: larger;font-size: 50px;">Live</p>
            
         </div>



      </section>
   </section>

</body>

</html>