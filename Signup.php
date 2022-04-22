<?php

include('includes/config.php');

session_start();

error_reporting(0);


//sigup section

if (isset($_POST["signup"])) {
  //getting the data
  $full_name = mysqli_real_escape_string($conn, $_POST["signup_Full_Name"]);
  $email = mysqli_real_escape_string($conn, $_POST["signup_Email"]);
  $password = mysqli_real_escape_string($conn, $_POST["signup_Password"]);
  $cpassword = mysqli_real_escape_string($conn, $_POST["signup_cPassword"]);

  //check the email 
  $check_email = mysqli_num_rows(mysqli_query($conn, "SELECT email FROM  register WHERE email='$email'"));


  if ($password  !== $cpassword) {
    echo "<script>alert('Password did not Match');</script>";
  } elseif ($check_email > 0) {
    echo "<script>alert('Email already Exists in out Database.');</script>";
  } else {
    $sql = "INSERT INTO register(FULLNAME, EMAIL, PASSWORD) VALUES ('$full_name','$email','$password')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
      $_POST["signup_Full_Name"] = "";
      $_POST["signup_Email"] = "";
      $_POST["signup_Password"] = "";
      $_POST["signup_cPassword"] = "";
      echo "<script>alert('User SignUp Successfully ');</script>";
    } else {
      echo "<script>alert('User SignUp Failed');</script>";
    }
  }
}



// login section
if (isset($_POST["login"])) {

  //getting the data
  $email = mysqli_real_escape_string($conn, $_POST["email"]);
  $password = mysqli_real_escape_string($conn, $_POST["password"]);


  //check the email
  $check_email = mysqli_query($conn, "SELECT R_ID FROM register WHERE email='$email' &&  password='$password'");
  if (mysqli_num_rows($check_email) > 0) {
    $row = mysqli_fetch_assoc($check_email);
    $_SESSION["user_id"] = $row["R_ID"];
    header("Location: addProduct.php");
  } else {
    echo "<script>alert('Login details is Incorrect. Please try again');</script>";
  }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CarBazar</title>

  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

  <!-- font awesome cdn link  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

  <!-- custom css file link  -->
  <link rel="stylesheet" href="css/style.css">

</head>

<body>

  <header class="header">

    <div id="menu-btn" class="fas fa-bars"></div>

    <a href="#" class="logo"> <span>CAR</span>BAZAR</a>

    <nav class="navbar">
      <a href="index.html" class="active">Home</a>
      <a href="#buycar">Buy Car</a>
      <a href="AddProduct.php">Sell Car post</a>
      <a href="#blog">Blog</a>
      <a href="#used car">Used Car</a>
      <a href="#review">Review</a>
    </nav>

    <div id="login-btn">
      <button class="btn">login</button>
      <i class="far fa-user"></i>
    </div>

  </header>

  <div class="login-form-container">

    <span id="close-login-form" class="fas fa-times"></span>

    <form action="#" method="post" class="sign-in-form">

      <h3 class="title">Sign in</h3>
      <input type="email" placeholder="Email Address" name="email" class="box" required />
      <input type="password" placeholder="Password" name="password" class="box" required />

      <p> forget your password <a href="#">click here</a> </p>
      <input type="submit" value="Login" name="login" class="btn">
      <p>or login with</p>
      <div class="buttons">
        <a href="#" class="btn"> google </a>
        <a href="#" class="btn"> facebook </a>
      </div>
      <p> don't have an account <a href="Signup.php">create one</a> </p>
    </form>

  </div>

  <section class="home" id="home">

    <h3 data-speed="-2" class="home-parallax">find your car</h3>

    <img data-speed="5" class="home-parallax" src="image/home-img.png" alt="">

    <a data-speed="7" href="#" class="btn home-parallax">explore cars</a>

  </section>


  <hr>
  <hr>

  <section class="contact" id="contact">
    <div class="row">
      <form action="#" class="sign-up-form" method="post">
        <h3 class="title">User Sign up</h3>

        <input type="text" placeholder="Full Name" name="signup_Full_Name" class="box value=" <?php echo $_POST["signup_Full_Name"]; ?>" required />


        <input type="email" placeholder="Email Address" name="signup_Email" class="box value=" <?php echo $_POST["signup_Email"]; ?>" required />


        <input type="password" placeholder="Password" name="signup_Password" class="box value=" <?php echo $_POST["signup_Password"]; ?>" required />

        <input type="password" placeholder="Confirm Password" name="signup_cPassword" class="box value=" <?php echo $_POST["signup_cPassword"]; ?>" required />


        <input type="submit" class="btn" value="Signup" name="signup" />
      </form>

    </div>

  </section>





  <section class="footer" id="footer">

    <div class="box-container">

      <div class="box">
        <h3>quick links</h3>
        <a href="#"> <i class="fas fa-arrow-right"></i> Home </a>
        <a href="#"> <i class="fas fa-arrow-right"></i> Buy Car </a>
        <a href="#"> <i class="fas fa-arrow-right"></i> Sell Car post </a>
        <a href="#"> <i class="fas fa-arrow-right"></i> Blog </a>
        <a href="#"> <i class="fas fa-arrow-right"></i> Reviews </a>
        <a href="#"> <i class="fas fa-arrow-right"></i> Used Car </a>
      </div>


      <div class="box">
        <h3>contact info</h3>
        <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
        <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
        <a href="#"> <i class="fab fa-instagram"></i> instagram </a>

      </div>

    </div>

    <div class="credit"> created by CarBazar web designer | all rights reserved </div>

  </section>




  <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

  <script src="js/script.js"></script>

</body>

</html>