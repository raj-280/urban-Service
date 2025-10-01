<?php

@include 'config.php';

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $sql = "INSERT INTO cantact (name, email, message) VALUES ('$name', '$email', '$message')";
    
    if ($conn->query($sql) === TRUE) {
		echo '<script>alert("YoUr response submitted..!");</script>';
    } else {
        
    }
    
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Contact</title>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="contact.css">
</head>

<body>
        <section class="contact">
            <header>
                <div class="logo">
                    <img src="l1.png" alt="error">
                </div> 
                <div class="bg">
                <nav class="navbar">
                    <ul>
                        <li><a href="service.php">Services</a></li>
                        <li><a href="contact.php">Contact us</a></li>
                        <li><a href="home.php">Logout</a></li>
                    </ul>
                </nav>
            </header>    

        <div class="content">

            <h2>Cᴏɴᴛᴀᴄᴛ Us</h2>

             <p> Here is a summery that you can contact us directly via PHONE or EMAIL also you can visit  our company <br>
          Address is given below  may we can use full for youu! <br>Thanks For Choosing Us. </p>

        </div>

        <div class="container">
            <div class="contactInfo">
                <div class="box">
                    <div class="icon">
                        <i class="fa fa-map-marker" aria-hidden="true"></i> 
                    </div>
                    <div class="text">
                        <h3>OUR ADDRESS  </h3>
                        <Br>
                        <p> E/3,<br> Rashmi Appartment, opposite Umasut flat, <br> Near Dharnidhar Derasar, Vasna,<br>
                          Ahmedabad~380007.</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                    </div>
                    <div class="text">
                        <h3>CONTACT NUMBER </h3><br>
                        <p>9265339663</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon">
                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                    </div>
                    <div class="text">
                        <h3>EMAIL ADDRESS </h3><br>
                        <p>hetangmadhu18@gmail.com</p>
                    </div>
                </div>
            </div>
            <div class="contactForm">
                <form action="#" method="POST">
                    <h2>Send Your Message Here </h2>
                    <div class="inputBox">
                        <input type="text" name="name" required="required">
                        <span>Full Name</span>
                    </div>
                    <div class="inputBox">
                        <input type="text" name="email" required="required">
                        <span>Email</span>
                    </div>
                    <div class="inputBox">
                        <textarea required="required"></textarea>
                        <span>Type your message here..</span>
                    </div>
                    <div class="inputBox">
                        <input type="submit" name="" value="Submit">

                    </div>
                </form>
            </div>
        </div>
    </section>
    <div class="footer">
        <div class="containerr">
            <div class="row1">
               
                <div class="footer-col-2">
                    <img src="logo-removebg-preview.png">
                    <p>Our purpose is to sustainably make the Pleasure and Benefits of Home Services Accessible to the
                        many.
                    </p>
                </div>
                <!-- <div class="footer-col-3">
                    <h3>Useful Links</h3>
                    <ul>
                        <li>Coupons</li>
                        <li>Blog Post</li>
                        <li>Return Policy</li>
                        <li>Join Affiliate</li>
                    </ul>
                </div> -->
                <!-- <div class="footer-col-4">
                    <h3>Follow Us</h3>
                    <ul>
                        <li>Facebook</li>
                        <li>Twitter</li>
                        <li>Instagram</li>
                        <li>Youtube</li>
                    </ul>
                </div> -->
            </div>
            <!-- <hr> -->
            <p class="copyright">Copyright 2021 - URBAN SERVICES</p>
        </div>
    </div>
</body>

</html>