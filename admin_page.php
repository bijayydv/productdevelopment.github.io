<?php

@include 'config.php';

session_start();

if (!isset($_SESSION['admin_name'])) {
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

   <title>Admin Page</title>
</head>

<body>
   <ul>
      <li><img style="height: 50px; width: 50px;" src="Image/logo.png" alt=""></img></li>
      <li><a class="active" href="#news">FunOlympics</a></li>
      <div class="style" style="font-size: 30px;" style="color: gold;" style="margin-right: 50px;">
         <li style="color: blue;"><?php echo $_SESSION['admin_name'] ?></li>
         <a href="index.php" class="btn" style="color: white;">Logout</a>
      </div>
   </ul>

   <div class="container-fluid">

      <div class="card shadow mb-4">
         <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Admin Profile</h6>
         </div>
         <div class="card-body">
            <div class="table-responsive">
               <?php
               $query = "SELECT * FROM user_form";
               $query_run = mysqli_query($conn, $query);
               ?>
               <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                     <tr>
                        <th> ID </th>
                        <th> Username </th>
                        <th>Email </th>
                        <th>Password</th>
                        <th>UserType</th>
                        <th>EDIT</th>
                        <th>DELETE</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php
                     if (mysqli_num_rows($query_run) > 0) {
                        while ($row = mysqli_fetch_assoc($query_run)) {
                     ?>
                           <tr>
                              <td><?php echo $row['Id']; ?></td>
                              <td><?php echo $row['name']; ?></td>
                              <td><?php echo $row['email']; ?></td>
                              <td><?php echo $row['password']; ?></td>
                              <td><?php echo $row['user_type']; ?></td>
                              <td>
                                 <form action="register.php" method="post">
                                    <input type="hidden" name="edit_id" value="<?php echo $row['Id']; ?>">
                                    <button type="submit" name="edit_btn" class="btn btn-success"> EDIT</button>
                                 </form>
                              </td>
                              <td>
                                 <form action="code.php" method="post">
                                    <input type="hidden" name="delete_id" value="<?php echo $row['Id']; ?>">
                                    <button type="submit" name="delete_btn" class="btn btn-danger"> DELETE</button>
                                 </form>
                              </td>
                           </tr>
                     <?php
                        }
                     } else {
                        echo "No Record Found";
                     }
                     ?>
                  </tbody>
               </table>

            </div>
         </div>
      </div>

   </div>


   <div class="container-fluid">

      <div class="card shadow mb-4">
         <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">User Message</h6>
         </div>
         <div class="card-body">
            <div class="table-responsive">
               <?php
               $query = "SELECT * FROM userinfodata";
               $query_run = mysqli_query($conn, $query);
               ?>
               <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                     <tr>
                        <th> ID </th>
                        <th> Username </th>
                        <th>Email </th>
                        <th>Number</th>
                        <th>Message</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php
                     if (mysqli_num_rows($query_run) > 0) {
                        while ($row = mysqli_fetch_assoc($query_run)) {
                     ?>
                           <tr>
                              <td><?php echo $row['Id']; ?></td>
                              <td><?php echo $row['user']; ?></td>
                              <td><?php echo $row['email']; ?></td>
                              <td><?php echo $row['number']; ?></td>
                              <td><?php echo $row['message']; ?></td>

                           </tr>
                     <?php
                        }
                     } else {
                        echo "No Record Found";
                     }
                     ?>
                  </tbody>
               </table>

            </div>
         </div>
      </div>

   </div>







   <body>

      <footer style="margin-top: 500px;">
         <p class="text-center p-4 bg-dark text-white">@FunOlympicCommunity</p>
      </footer>

</html>