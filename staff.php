<?php 
include "db.php"; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/staff.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <!-- <nav class="navbar background h-nav">
        <ul class="nav-list v-class">
            <div class="logo"><img src="img/logo.jpg" alt="logo"></div>
           <li><i class="fa-solid fa-house"></i><a href="index.html">Home</a></li>
           <li><i class="fa-solid fa-camera"></i><a href="#">Gallery</a>
        <div class="sub-menu-1">
            <ul>
                <li><a href="images.html">Images</a></li>
                <li><a href="vdo.html">Videos</a></li>
                <li><a href="#">Sports</a></li>
                <li><a href="cca.html">CCA</a></li>
                <li><a href="scout.html">Scout & Guide</a></li>
                <li><a href="other.html">Other</a></li>

            </ul>
        </div>
        </li> -->

           <!-- <li><i class="fa-solid fa-user"></i><a href="about.html">About</a>
            <div class="sub-menu-1">
                <ul>
                    <li><a href="#">Founder</a></li>
                    <li><a href="#">Managing Director</a></li>
                    <li><a href="#">Staff</a></li>
                </ul>
            </div>
        </li> -->
           
           <!-- <li><i class="fa-solid fa-user-tie"></i><a href="staff.php">Staff</a></li>
           <li><i class="fa-solid fa-phone"></i><a href="contact.html">Contact Us</a></li>
        </ul>
        <div class="rightNav v-class">
            <input type="text" name="search" id="search">
            <button class="btn btn-sm">Search</button>
        </div>
        <div class="burger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
    </nav> -->
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
                                <!-- <li class="tab"><a href="vdo.html">Videos</a></li> -->
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
                    <!-- <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="contact.html">Contact Us</a>
                    </li> -->
                    
                    <!-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Topics
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Technology</a></li>
                            <li><a class="dropdown-item" href="#">Web Development</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Support</a></li>
                            <li><a class="dropdown-item" href="#">Write for us</a></li>
                        </ul>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="admin">Admin</a>
                    </li>
                    <!-- <li class="nav-item">
                <a class="nav-link disabled">Disabled</a>
              </li> -->
                </ul>
                <!-- <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-light" type="submit">Search</button>
                </form> -->
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


    
    <p class="stf"><u><b>Staff List</b></u></p>
    <!-- <div class="staff">
        <ul>
            <li >
                <img src="img/te1.jpg" alt="logo" class="image">
                <p class="desig">Principal</p>
            </li>
            <li>
                <img src="img/te1.jpg" alt="logo" class="image">
                <p class="desig">Principal</p>
            </li>
            <li>
                <img src="img/te1.jpg" alt="logo" class="image">
                <p class="desig">Principal</p>
            </li>
            <li>
                <img src="img/te1.jpg" alt="logo" class="image">
                <p class="desig">Principal</p>
            </li>
            <li>
                <img src="img/te1.jpg" alt="logo" class="image">
                <p class="desig">Principal</p>
            </li>
            <li>
                <img src="img/te1.jpg" alt="logo" class="image">
                <p class="desig">Principal</p>
            </li>
            <li>
                <img src="img/te1.jpg" alt="logo" class="image">
                <p class="desig">Principal</p>
            </li>
            <li>
                <img src="img/te1.jpg" alt="logo" class="image">
                <p class="desig">Principal</p>
            </li>
            <li>
                <img src="img/te1.jpg" alt="logo" class="image">
                <p class="desig">Principal</p>
            </li>
            <li>
                <img src="img/te1.jpg" alt="logo" class="image">
                <p class="desig">Principal</p>
            </li>
            <li>
                <img src="img/te1.jpg" alt="logo" class="image">
                <p class="desig">Principal</p>
            </li>
        </ul>
        
    </div> -->


<div class="container">
    <table class="table table-bordered table-hover table-secondary">
        <thead class="thead-dark">
            <tr>
                <th>S.No</th>
                <th>Name</th>
                <th>Designation</th>
                
            </tr>
        </thead>
        <tbody>
            <?php
    
            $query = "SELECT * FROM staff";
            $select_users = mysqli_query($connection, $query);
    
            while ($row = mysqli_fetch_assoc($select_users)) {
                $sno = $row['staff_sno'];
                $name = $row['staff_name'];
                $designation = $row['designation'];
               
                echo "<tr>";
                echo "<td>$sno</td>";
                echo "<td>$name</td>";
                echo "<td>$designation</td>";
    
                
    
                    echo "</tr>";
            }
            ?>
    
        </tbody>
    </table>
</div>

    
    <div class="main5" >
        <div class="about">
            <p class="add add1"><b>Address:</b></p>
            <p class="name"><b>Maharishi Dayanand Aadarsh Inter College</b></p>
            <p class="ftxtp">Umrara, Debai, Bulandshahr,<br>Uttar Pradesh 203393 </p>
        </div>
        <div class="contact" >
            <h3 class="add">Contact Details:</h3>
            <p class="ftxtp"><i class="fa fa-phone"></i>&emsp;(+91)&nbsp;9720860456<br><i class="fa fa-fax"></i>&emsp;Fax:&nbsp;(+91)&nbsp;05734-222251<br><i class="fa fa-envelope"></i>&emsp;bhupendra1376@gmail.com</p>
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