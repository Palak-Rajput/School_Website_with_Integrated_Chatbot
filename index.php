
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
                    <li class="nav-item mx-2">
                        <a class="nav-link btn " data-bs-toggle="modal" data-bs-target="#loginModal" href="admin">Admin</a></button>

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
                <img style="
                    width: 150px;"
                class="image" src="img/logo.jpg" alt="image">
            </div>
        </div>
    </section>


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
    <footer class="background">
        <p class="text-footer">
            Copyright &copy; 2027 - MDA Inter College - All rights reserved
        </p>
    </footer>
    <script src="js/resp.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<script>
window.embeddedChatbotConfig = {
chatbotId: "9EEqzB0upb7rxSZjwca69",
domain: "www.chatbase.co"
}
</script>
<script
src="https://www.chatbase.co/embed.min.js"
chatbotId="9EEqzB0upb7rxSZjwca69"
domain="www.chatbase.co"
defer>
</script>
</body>
</html>
