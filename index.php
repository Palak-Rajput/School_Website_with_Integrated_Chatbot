<?php
// include "db.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <link rel="stylesheet" href="css/responsive.css">
    <title>MDA Inter College</title>
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
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
                    <li class="nav-item mx-2">
                        <a class="nav-link btn " data-bs-toggle="modal" data-bs-target="#loginModal" href="admin">Admin</a></button>

                    </li>
                    <!-- <li class="nav-item">
                <a class="nav-link disabled">Disabled</a>
              </li> -->
                </ul>
                <!-- <div class="mx-2"> -->
                <!-- <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#loginModal">Login</button> -->
                <!-- <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#signupModal">SignUp</button> -->
                <!-- </div> -->
                <!-- <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-light" type="submit">Search</button>
                </form> -->
            </div>
        </div>
    </nav>
    <!-- Navbar ends -->




    <!-- <div class="container"> -->
    <section class="background firstSection bg">
        <!-- <img src="../img/bg.jpeg" class="img-fluid" alt="..."> -->
        <!-- <img src="img/bg.jpeg" class="img-fluid" alt="Responsive image"> -->
        <div class="box-main">
            <div class="firstHalf">
                <p class="text-big">MAHARISHI DAYANAND AADARSH INTER COLLEGE, UMRARA</p>
            </div>
            <div class="secondHalf">
                <img style="
                    width: 150px;"
                class="image" src="img/logo.jpg" alt="image">
                <!-- <img src="img/logo.jpg" class="img-thumbnail" alt="..."> -->
            </div>
        </div>
    </section>

    <!-- <div class="bg-image responsive bg background " 
     style="background-image: url('img/bg.png');
         background-size: cover;
         opacity: 0.7;
         position: relative;text-align: center;
  color: white;
           height: 70vh">
</div>
    <div class="centered" 
     style="
         
         position: absolute;font-family:Verdana, Geneva, Tahoma, sans-serif ; top: 50%;left: 40%;transform: translate(-50%, -50%);font-size: 2rem;margin:
            auto; color:black; @media (max-width:900px){top: 70%;left: 20%;transform: translate(-50%, -50%);}
              "><i>MAHARISHI DAYANAND AADARSH INTER COLLEGE, UMRARA</i>
</div>
<img class="abc"
style="
         
         position: absolute; left: 80%;top: 45%;transform:translate(-50%, -50%);margin:
            auto;margin-left: 5px;border-radius: 50%;border: 3px solid white;"
              
src='img/logo.jpg' alt='Avatar' width="200vw"> -->




    <!-- </div> -->

    <!-- Carousel starts -->
    <!-- <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="false">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="carousel-caption d-none d-md-block">
                    <h2>MAHARISHI DAYANAND AADARSH INTER COLLEGE, UMRARA</h5>
                         <p>Technology News, Development and Trends</p>
                        <button class="btn btn-danger">Technology</button>
                        <button class="btn btn-primary">Web Development</button>
                        <button class="btn btn-success">Tech Fun</button> -->
    <!-- </div>
                <img src="img/bg.jpeg" class="d-block w-100" alt="...">
                
            </div>
            <div class="carousel-item">
                <img src="img/bg.jpeg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h2>MAHARISHI DAYANAND AADARSH INTER COLLEGE, UMRARA</h5>  -->
    <!-- <p>Technology News, Development and Trends</p>
                        <button class="btn btn-danger">Technology</button>
                        <button class="btn btn-primary">Web Development</button>
                        <button class="btn btn-success">Tech Fun</button> -->
    <!-- </div>
            </div>
            <div class="carousel-item">
                <img src="img/bg.jpeg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h2>MAHARISHI DAYANAND AADARSH INTER COLLEGE, UMRARA</h5>
                         <p>Technology News, Development and Trends</p>
                        <button class="btn btn-danger">Technology</button>
                        <button class="btn btn-primary">Web Development</button>
                        <button class="btn btn-success">Tech Fun</button> -->
    <!-- </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>  -->
    <!-- Carousal ends -->



    <div class="container">
        <section class="section">
            <div class="paras container">
                <p class="sectionTag text-big">Mr. GHANENDRA SINGH ARYA</p>
                <h3>(Founder)</h3>
                <p class="sectionSubTag text-small">The philosophy of MDA Inter College has been to provide meaningful contribution in those areas that encompass the overall development of the country. For this reason, the group has given priority and attention to 'EDUCATION' at all levels, which is one of the most important factors for general prosperity and progress.</p><br>
                <p class="sectionSubTag text-small">It is in keeping with this mission, we have established 'MAHARISHI DAYANAND AADARSH INTER COLLEGE' to promote and develop professional education institutions.</p><br>
                <p class="sectionSubTag text-small">Mararishi Dayanand Aadarsh Inter College was established in the year 1970. </p>

            </div>
            <div class="thumbnail">
                <img style="
                        margin: auto;" src="img/founder.jpg" alt="Image" class="imgFluid">
            </div>
        </section>
        <section class="section section-left" id="about">
            <div class="paras container">
                <p class="sectionTag text-big">Mr. BHUPENDRA KUMAR ARYA</p>
                <h3>(Managing Director)</h3>
                <p class="sectionSubTag text-small">I Welcome you to the MDA INTER COLLEGE, an institution that we have conceived as a landmark centre of higher learning. Indeed, our intention has been to create a college that will truly set the standards in academic and technical education and become a benchmark institution in its category in the region.</p><br>
                <p class="sectionSubTag text-small">Towards this, we have taken every step necessary to develop the finest infrastructure, ranging from state-of-the art classrooms to laboratories. Top-of-the-line staff has been induced for every discipline.

                    The scenic 42 acres campus, set against the backdrop of the hills, is a self-sufficient world with every facility in place. It has room even for multiple sports fields. The focus is on environment friendliness, with the buildings’ design itself incorporating elements of nature-driven energy conservation and temperature control.</p>
            </div>
            <div class="thumbnail">
                <img style="
                        margin: auto;" src="img/md.jpg" alt="Image" class="imgFluid">
            </div>
        </section>
    </div>




    <!-- <section class="section" id="services">
        <div class="paras">
        <p class="sectionTag text-big">The end of your search is here</p>
        <p class="sectionSubTag text-small">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptas quaerat reprehenderit, dolorum non sit accusamus maxime excepturi consectetur illum cumque? Mollitia sequi voluptas ipsam veniam quaerat officiis ad, deserunt unde voluptatibus vero assumenda nihil, animi culpa, alias nostrum voluptatum. Aspernatur molestiae soluta eos eveniet asperiores molestias magnam, tenetur dolor vitae architecto minima laborum ducimus voluptatem perferendis dicta minus eum voluptates placeat! Similique consequuntur officiis quibusdam dolorum dignissimos ipsum nulla, hic quae aut perferendis molestiae maxime rem fugit reprehenderit praesentium, harum quos recusandae atque velit iste fuga laudantium. At deserunt, maiores nemo expedita tempora reiciendis, a iusto natus sint provident assumenda.Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, rem. Sapiente non similique illum culpa quaerat illo iusto quam exercitationem! Amet vero provident blanditiis. Aut asperiores tenetur necessitatibus enim tempore.</p>
    </div>
        <div class="thumbnail">
        <img src="img/logo.jpg" alt="Image" class="imgFluid">
    </div>
    </section> -->
    <!-- <section class="contact" id="contact">
         <h2 class="text-center">Contact Us</h2>
         <div class="form">
            <input class="form-input" type="text" name="name" id="name" placeholder="Enter Your Name">
            <input class="form-input" type="text" name="phone" id="phone" placeholder="Enter Your Phone">
            <input class="form-input" type="email" name="email" id="email" placeholder="Enter Your email">        
            <textarea class="form-input" name="text" id="text" cols="30" rows="10" placeholder="Ellaborate your concern"></textarea>
            <button class="btn btn-sm btn-dark">Submit</button>
        </div>
    </section> -->
    <!-- <div class="row"> -->


    <!-- Login Modal starts-->
    <div class="modal fade" id="loginModal" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Login to MDAIC</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="login.php" method="post">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Enter Username</label>
                            <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Enter Password</label>
                            <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <!-- <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
          </div> -->
                        <button type="submit" class="btn btn-primary" name="login">Login</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Login Modal ends -->



    <div class="main5">
        <div class="about">
            <p class="add1"><b>Address:</b></p>
            <p class="name"><b>Maharishi Dayanand Aadarsh Inter College</b></p>
            <p class="ftxtp">Umrara, Debai, Bulandshahr,<br>Uttar Pradesh 203393 </p>
        </div>
        <div class="contact">
            <h3 class="add">Contact Details:</h3>
            <p class="ftxtp"><i class="fa fa-phone"></i>&emsp;(+91)&nbsp;9720860456<br><i class="fa fa-fax"></i>&emsp;Fax:&nbsp;(+91)&nbsp;05734-222251<br><i class="fa fa-envelope"></i>&emsp;bhupendra1376@gmail.com</p>
        </div>
        <div class="designedby">
            <h3 class="add">Designed by:</h3>
            <p class="ftxtp"><i class="fa fa-user"></i>&emsp;Palak Rajput</p>
        </div>
    </div>
    <!-- </div> -->
    <footer class="background">
        <p class="text-footer">
            Copyright &copy; 2027 - MDA Inter College - All rights reserved
        </p>
    </footer>
    <script src="js/resp.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>