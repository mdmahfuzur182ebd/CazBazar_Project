<?php
include('includes/config.php');
session_start();


if (isset($_POST["LogIn"])) {

  //getting the data
  $AUser_Name = mysqli_real_escape_string($conn, $_POST["User_Name"]);
  $Apassword = mysqli_real_escape_string($conn, $_POST["Password"]);


  //check the email
  $check_email = mysqli_query($conn, "SELECT A_id FROM admin WHERE USERNAME='$AUser_Name' &&  PASSWORD='$Apassword'");

  if (mysqli_num_rows($check_email) > 0) {
    $row = mysqli_fetch_assoc($check_email);
    $_SESSION["user_id"] = $row["A_ID"];
    header("Location: index.php");
  } else {
    echo "<script>alert('Login details is Incorrect. Please try again');</script>";
  }
}
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

  <link rel="stylesheet" href="Admin.css">

  <title>Admin LogIn!</title>
</head>

<body>

  <hr>
  <div class="beadonor">
    <h3 class="some">CarBazar ADMIN LOGIN</h3>
  </div>

  <hr>

  <div class="container" style="padding: 60px 0;">
    <div class="row ">
      <!-- jumbotron -->
      <div class=" card col-md-6 offset-md-3">
        <div class="panel panel-default" style="padding: 20px;">

          <form action="" method="post" class="form-group form-container">

            <div class="form-group">
              <label for="District" class="form-label">User Name :</label>
              <input type="text" class="form-control" placeholder="User Name" name="User_Name" id="" require>
            </div>

            <div class="form-group">
              <label for="Area" class="form-label">Password * :</label>
              <input type="password" class="form-control" placeholder="Password" name="Password" id="" require>
            </div>

            <div class="form-group form">
              <button class="btn  btn-danger center-aligned" style="margin-top:5px ;" type="submit" name="LogIn">Log In</button>
            </div>

          </form>

        </div>
      </div>
    </div>
  </div>



  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
</body>

</html>