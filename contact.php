<?php 
$connection = mysqli_connect('localhost', 'root', '', 'school');
if (!$connection)
    die("Connection Failed");

    if (isset($_POST['submit'])) {
        global $connection, $name, $email, $message;
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];}

        $query = "INSERT INTO touch(name, email, message)";
        global  $name, $email, $message;

        $query .= "VALUES('$name', '$email', '$message')";
        $result = mysqli_query($connection, $query);
        if (!$result) {
            die('Query Failed');
        } else {
            if (isset($_POST['submit'])) {
                echo "<div class='alert alert-success' role='alert'>
  Your message is recorded successfully!
</div>";
            }
        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
   
    <!-- Navbar starts-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">MDAIC</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Gallery</a>
                        <div class="sub-menu-1">
                            <ul class="tab">
                                <li class="tab"><a href="images.html">Events</a></li>
                                <li class="tab"><a href="news.html">Newspaper</a></li>
                                <li class="tab"><a href="cca.html">CCA</a></li>
                                <li class="tab"><a href="scout.html">Scout & Guide</a></li>
                                <li class="tab"><a href="other.html">Other</a></li>
                
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="staff.php">Staff</a>
                    </li>
                 
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="admin">Admin</a>
                    </li>
                   
                </ul>
               
            </div>
        </div>
    </nav>
    <!-- Navbar ends -->


    <section class="background firstSection bg">
        <div class="box-main">
            <div class="firstHalf">
                <p class="text-big">MAHARISHI DAYANAND AADARSH INTER COLLEGE, UMRARA</p>

            </div>
            <div class="secondHalf">
                <img src="img/logo.jpg" alt="image" >
            </div>
</div>
    </section>

   

    <div class="main">
        <h2><u>Contact Us</u></h5>
        <div class="main-inner">
            <div class="address">
                <h2 >MDA Inter College</h2>
                <p class="name">Umrara, Debai, Bulandshahr,<br>Uttar Pradesh 203393 </p>
                <p class="detail"><i class="fa-solid fa-phone"></i><b>Mobile: </b>(+91)&nbsp;9720860456<br><i class="fa fa-fax"></i><b>Fax: </b>(+91)&nbsp;05734-222251<br><i class="fa fa-envelope"></i><b>Email: </b>bhupendra1376@gmail.com</p>
    
                <!--Google map-->
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d112537.39971847415!2d78.17938915820311!3d28.18318760000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390b4adf30b128f1%3A0x6c5781534b0caec6!2sM.D.A%20Inter%20College%20Umrara!5e0!3m2!1sen!2sin!4v1655891199994!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <!--Google Maps-->
            </div>
    
            <div class="form">
                <h2 class="get">Get In Touch</h2>
                <!-- Wrapper container -->
                <div class="container py-4">
                    <!-- Bootstrap 5 starter form -->
                    <form action="contact.php" id="contactForm" method="POST">
                        <!-- Name input -->
                        <div class="mb-3">
                            <input class="form-input" type="text" name="name" id="name" placeholder="Enter Your Name">
                        </div>
                
                        <!-- Email address input -->
                        <div class="mb-3">
                            <input class="form-input" type="email" name="email" id="email" placeholder="Enter Your email">        

                        </div>
      
                        <!-- Message input -->
                        <div class="mb-3">
                            <textarea class="form-input" name="message" id="text" cols="30" rows="10" placeholder="Message"></textarea>

                        </div>
      
                        <!-- Form submit button -->
                        <div class="d-grid">
                            <button name="submit" class="btn btn-primary btn-lg"  type="submit">Submit</button>
                        </div>
      
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="main5" >
        <div class="about">
            <p class="add add1"><b>Address:</b></p>
            <p class="name"><b>Maharishi Dayanand Aadarsh Inter College</b></p>
            <p class="ftxtp">Umrara, Debai, Bulandshahr,<br>Uttar Pradesh 203393 </p>
        </div>
        <div class="contact" >
            <h3 class="add">Contact Details:</h3>
            <p class="ftxtp "><i class="fa fa-phone"></i>&emsp;(+91)&nbsp;9720860456<br><i class="fa fa-fax"></i>&emsp;Fax:&nbsp;(+91)&nbsp;05734-222251<br><i class="fa fa-envelope"></i>&emsp;bhupendra1376@gmail.com</p>
        </div>
        <div class="designedby">
            <h3 class="add">Designed by:</h3>
            <p class="ftxtp"><i class="fa fa-user"></i>&emsp;Palak Rajput</p>
        </div>
    </div>
   <footer class="background">
    <p class="text-footer">
    Copyright &copy; 2027 - MDA Inter College - All rights reserved
</p>
</footer>
<script src="js/resp.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </body>
</html>
