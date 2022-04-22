<?php

include('includes/config.php');

session_start();

error_reporting(0);

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
        header("Location: Addpost.php");
    } else {
        echo "<script>alert('Login details is Incorrect. Please try again');</script>";
    }
}


$email_newslater =  $_REQUEST['email_newslater'];
$sql = "INSERT INTO email VALUES ('email_newslater')";

if (mysqli_query($conn, $sql)) {
    echo "Data inserted";
} else {
    echo "ERROR: Hush! Sorry $sql. "
        . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);



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
            <a href="#home" class="active">Home</a>
            <a href="#buycar">Buy Car</a>
            <a href="addProduct.php">Sell Car post</a>
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

        <form action="" method="post" class="sign-in-form">

            <h3 class="title">Sign in</h3>
            <input type="email" placeholder="Email Address" name="email" class="box" />
            <input type="password" placeholder="Password" name="password" class="box" />

            <p> forget your password <a href="#">click here</a> </p>
            <input type="submit" value="login" name="login" class="btn">
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

    <section class="icons-container">

        <div class="icons">
            <i class="fas fa-car"></i>
            <div class="content">
                <h3>10+</h3>
                <p>Uses cars</p>
            </div>
        </div>

        <div class="icons">
            <i class="fas fa-car"></i>
            <div class="content">
                <h3>40+</h3>
                <p>cars sold</p>
            </div>
        </div>

        <div class="icons">
            <i class="fas fa-users"></i>
            <div class="content">
                <h3>20+</h3>
                <p>Happy clients</p>
            </div>
        </div>

    </section>


    <section class="services" id="services">

        <h1 class="heading"> our <span>services</span> </h1>

        <div class="box-container">

            <div class="box">
                <i class="fas fa-car"></i>
                <h3>car selling</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corporis, nisi.</p>
                <a href="#" class="btn"> read more</a>
            </div>

            <div class="box">
                <i class="fas fa-car-crash"></i>
                <h3>car insurance</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corporis, nisi.</p>
                <a href="#" class="btn"> read more</a>
            </div>



            <div class="box">
                <i class="fas fa-headset"></i>
                <h3>24/7 support</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corporis, nisi.</p>
                <a href="#" class="btn"> read more</a>
            </div>

        </div>

    </section>

    <section class="featured" id="featured">

        <h1 class="heading"> <span>featured</span> cars </h1>

        <div class="swiper featured-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide box">
                    <img src="image/car-1.png" alt="">
                    <div class="content">
                        <h3>new model</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <div class="price">$55,000/-</div>
                        <a href="#" class="btn">check out</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="image/car-2.png" alt="">
                    <div class="content">
                        <h3>new model</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <div class="price">$55,000/-</div>
                        <a href="#" class="btn">check out</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="image/car-3.png" alt="">
                    <div class="content">
                        <h3>new model</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <div class="price">$55,000/-</div>
                        <a href="#" class="btn">check out</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="image/car-4.png" alt="">
                    <div class="content">
                        <h3>new model</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <div class="price">$55,000/-</div>
                        <a href="#" class="btn">check out</a>
                    </div>
                </div>

            </div>

            <div class="swiper-pagination"></div>

        </div>



        <section class="newsletter">

            <h3>subscribe for latest updates</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum, suscipit.</p>

            <form action="" method="post">
                <input name="email_newslater" id="email" type="email" placeholder="enter your email">
                <input type="submit" value="subscribe">
            </form>

        </section>

        <section class="contact" id="contact">

            <h1 class="heading"><span>contact</span> us</h1>

            <div class="row">
                <form action="">
                    <h3>get in touch</h3>
                    <input type="text" placeholder="your name" class="box">
                    <input type="email" placeholder="your email" class="box">
                    <input type="tel" placeholder="subject" class="box">
                    <textarea placeholder="your message" class="box" cols="30" rows="10"></textarea>
                    <input type="submit" value="send message" class="btn">
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