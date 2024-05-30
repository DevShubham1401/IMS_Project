<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact Us</title>
    <link rel="shortcut icon" href="images/favicon.png" />
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet'>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css" rel="stylesheet">
    <link href="css/icons.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <header>
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 address">
                        <i class="ti-location-pin"></i> Bagi Complex, Sankeshwar Road, Gadhinglaj-416502
                    </div>
                    <div class="col-sm-6 social">
                        <ul>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="index.php">Insurance</a>
                    <p>Call Us Now <b>+91 976 426 0034</b></p>
                </div>
                <div class="collapse navbar-collapse navbar-main-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="index.php">Home</a></li>
                        <!-- <li><a href="blog.jsp">Blog</a></li>
                        <li><a href="blog-details.jsp">Blog Details</a></li> -->
                        <li><a href="Contact_us.php">Contact</a></li>
                        <li><a href="index.php" class="btn-default">Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div id="page-content">
        <section class="breadcrumb">
            <div class="container">
                <h2>Contact Us</h2>
                <ul>
                    <li><a href="index.php">Home</a> ></li>
                    <li><a href="Contact_us.php">Contact Us</a></li>
                </ul>
            </div>
        </section>
        <section class="contact-us">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="form-box">
                            <h2>Get in Touch</h2>
                            <!-- <div class="form-content">
                                <input type="text" name="name" placeholder="Your Name">
                                <input type="text" name="email" placeholder="Email">
                                <input type="text" name="subject" placeholder="Subject">
                                <textarea rows="1" cols="1" name="message" placeholder="Message"></textarea>
                                <div class="text-center">
                                    <input type="submit" class="btn-default" value="Submit">
                                </div>
                            </div> -->


                            <div class="form-content">
                                <form action="Backend/contact.php" method="post">
                                    <input type="text" name="name" placeholder="Your Name" required>
                                    <input type="text" name="email" placeholder="Email" required>
                                    <input type="text" name="subject" placeholder="Subject" required>
                                    <textarea name="message" placeholder="Message" required></textarea>
                                    <div class="text-center">
                                        <input type="submit" class="btn-default" value="Submit">
                                    </div>
                                </form>
                            </div>



                        </div>
                        <div class="contact-info">
                            <div class="col-sm-6">
                                <div class="row">
                                    <div class="contact-address">
                                        <h3>Address</h3>
                                        <div>
                                            <i class="icon ti-home"></i>
                                            <p>Bagi Complex, Sankeshwar Road
                                                <br>Gadhinglaj
                                                <br>Zip - 416502</p>
                                            <p class="social">
                                                <a href="#"><i class="fa fa-facebook"></i></a>
                                                <a href="#"><i class="fa fa-twitter"></i></a>
                                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="row">
                                    <div class="contact-dtl">
                                        <h3>Contact Details</h3>
                                        <div>
                                            <i class="icon fa fa-phone"></i>
                                            <p>+91 976 426 0034</p>
                                        </div>
                                        <div>
                                            <i class="icon ti-email"></i>
                                            <p><a href="mailto:licinfo@gmail.com">licinfo@gmail.com</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="contact-map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d235013.52897217585!2d72.43965449510691!3d23.02060002135479!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e848aba5bd449%3A0x4fcedd11614f6516!2sAhmedabad%2C+Gujarat!5e0!3m2!1sen!2sin!4v1474053074398" width="100%" height="260" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <footer>
        <div class="container">
            <div class="row contact-sec">
                <div class="col-md-5">
                    <h2>Insurance</h2>
                    <div class="row">
                        <div class="col-sm-6">
                            <p>Bagi Complex, Sankeshwar Road, Gadhinglaj
                                <br>Zip - 416502</p>
                        </div>
                        <div class="col-sm-6">
                            <ul>
                                <li><a href="#"><i class="fa fa-phone"></i>+91 976 426 0034</a></li>
                                <li><a href="mailto:licinfo@gmail.com"><i class="ti-email"></i> licinfo@gmail.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <a href="#" class="btn-default">Contact Us</a>
                </div>
                <div class="col-md-5 col-md-offset-2">
                    <h2>Agent<span>Detail</span></h2>
                    <div class="row">
                        <div class="col-sm-6">
                            <p>Bagi Complex, Sankeshwar Road, Gadhinglaj-416502
                                <br>Zip - 416502</p>
                        </div>
                        <div class="col-sm-6">
                            <ul>
                                <li><i class="fa fa-phone"></i> +91 976 426 0034</li>
                                <li><a href="mailto:chavanrajaram99@gmail.com">chavanrajaram99@gmail.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <a href="contact.jsp" class="btn-default">Contact Agent</a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <ul class="footer-nav">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="">Blog</a></li>
                        <li><a href="#">Compnies represented</a></li>
                        <li><a href="contact.jsp">Contact us</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Products</a></li>
                    </ul>
                </div>
                <div class="col-md-2 col-md-offset-2">
                    <ul class="footer-social">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        Copyright &copy; 2024 distributed by Shubham.
                    </div>
                    <div class="col-sm-6 text-right">
                        <a href="#">Terms & Conditions</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-hover-dropdown/2.2.1/bootstrap-hover-dropdown.min.js"></script>
    <script src="insurance-press-master/js/custom.js"></script>
</body>

</html>
