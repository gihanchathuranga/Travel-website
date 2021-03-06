<!DOCTYPE html>

<html>

<head>

    <!-- Required meta tags -->

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>




    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
        integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
        integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
        crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css">







    <title>Travel Agency with Bootstrap</title>

    <!-- Start WOWSlider.com HEAD section -->
    <!-- add to the <head> of your page -->
    <link rel="stylesheet" type="text/css" href="engine0/style.css" />
    <!--script type="text/javascript" src="engine0/jquery.js"></script-->
    <!-- End WOWSlider.com HEAD section -->
    <!-- Start WOWSlider.com HEAD section -->
    <!-- add to the <head> of your page -->
    <link rel="stylesheet" type="text/css" href="engine2/style.css" />
    <!--script type="text/javascript" src="engine2/jquery.js"></script-->
    <!-- End WOWSlider.com HEAD section -->
</head>

<body style="overflow-x: hidden;">


    <!-- navbar -->

    <nav class="navbar navbar-expand-lg navbar-light bg-primary fixed-top">

        <a class="navbar-brand navbar-link" href="index.html"><img src="images/logo.png" width="40"
                alt="logo">TRAVEL</a>


        <button class="navbar-toggler bg-white" data-toggle="collapse" data-target="#nav">
            <span class="navbar-toggler-icon"></span>

        </button>


        <div class="collapse navbar-collapse justify-content-center " id="nav">

            <ul class="navbar-nav mr-auto">

                <li class="nav-item active">

                    <a class="nav-link text-light font-weight-bold px-3  " href="#">HOME
                        <span class="sr-only">(current)</span>
                    </a>
                </li>

                <li class="nav-item ">

                    <a class="nav-link text-light font-weight-bold px-3 " href="#SERVICES">SERVICES</a>

                    <!-- <div class="dropdown-menu">

                        <a class="dropdown-item" href="#">Fast Food</a>

                        <a class="dropdown-item" href="#">Lunch</a>

                        <a class="dropdown-item" href="#">Dessert</a>

                    </div> -->

                </li>

                <li class="nav-item">

                    <a class="nav-link text-light font-weight-bold px-3" href="#ABOUT US">ABOUT US</a>

                </li>

                <li class="nav-item">

                    <a class="nav-link text-light font-weight-bold px-3" href="#CONTACT">CONTACT</a>

                </li>

            </ul>


            <!-- Search bar -->

            <form class="form-inline ml-3">

                <div class="input-group">

                    <input type="text" class="form-control " placeholder="Search">

                    <button class="btn btn-secondary" type="button"><i class="fa fa-search"></i>

                </div>

            </form>

        </div>

    </nav>
    <!-- Start WOWSlider.com BODY section -->
    <!-- add to the <body> of your page -->
    <div id="wowslider-container2">
        <div class="ws_images">
            <ul>
                <li><img src="data2/images/jakobowens9v_xyru_layunsplash.jpg" alt="jakob-owens-9v_xYRu_laY-unsplash"
                        title="jakob-owens-9v_xYRu_laY-unsplash" id="wows2_0" /></li>
                <li><a href="http://wowslider.net"><img src="data2/images/glaubersampaiolctfowsi27eunsplash.jpg"
                            alt="jquery carousel slider" title="glauber-sampaio-lCTfOwSi27E-unsplash"
                            id="wows2_1" /></a></li>
                <li><img src="data2/images/home.jpg" alt="home" title="home" id="wows2_2" /></li>
            </ul>
        </div>
        <div class="ws_bullets">
            <div>
                <a href="#" title="jakob-owens-9v_xYRu_laY-unsplash"><span><img
                            src="data2/tooltips/jakobowens9v_xyru_layunsplash.jpg"
                            alt="jakob-owens-9v_xYRu_laY-unsplash" />1</span></a>
                <a href="#" title="glauber-sampaio-lCTfOwSi27E-unsplash"><span><img
                            src="data2/tooltips/glaubersampaiolctfowsi27eunsplash.jpg"
                            alt="glauber-sampaio-lCTfOwSi27E-unsplash" />2</span></a>
                <a href="#" title="home"><span><img src="data2/tooltips/home.jpg" alt="home" />3</span></a>
            </div>
        </div>
        <div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.net">bootstrap carousel</a>
            by WOWSlider.com v9.0</div>
        <div class="ws_shadow"></div>
    </div>
    <script type="text/javascript" src="engine2/wowslider.js"></script>
    <script type="text/javascript" src="engine2/script.js"></script>
    <!-- End WOWSlider.com BODY section -->


    <!-- <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="images/news_1.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="images/news_2.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="images/news_3.jpg" alt="Second slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div> -->

    <!-- Services -->
    <div id="SERVICES">
        <div class="jumbotron jumbotron-fluid">


            <div class="row">
                <div class="container">
                    <h1 style="text-align:center">TAKING YOU ON GREAT JOURNEYS</h1>
                    <p style="text-align:center">Pick your destination and we'll handle the rest.</p>
                </div>


                <div class="col-md-3" style="margin: auto;">

                    <div class="card">


                        <div class="view view-cascade overlay">
                            <img class="card-img-top" src="images/nature.jpg " alt="Card image cap">
                            <a href="#!">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>


                        <div class="card-body text-center  ">

                            <h4 class="card-title"><strong>EXPERIENCE NATURE</strong></h4>



                        </div>

                    </div>

                </div>



                <div class="col-md-3" style="margin: auto;">

                    <div class="card" style="width: 200; height: 200;">


                        <div class="view view-cascade overlay">
                            <img class="card-img-top embed-responsive-item" src="images/image_4.jpg"
                                alt="Card image cap">
                            <a href="#!">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>


                        <div class="card-body text-center">

                            <h4 class="card-title"><strong>ADVENTURES</strong></h4>



                        </div>

                    </div>

                </div>



                <div class="col-md-3" style="margin: auto;">

                    <div class="card">


                        <div class="view view-cascade overlay">
                            <img class="card-img-top" src="images/citybreak.jfif " alt="Card image cap">
                            <a href="#!">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>


                        <div class="card-body text-center">


                            <h4 class="card-title"><strong>CITY BREAKS</strong></h4>

                        </div>

                    </div>


                </div>


            </div>

        </div>
    </div>
    <!-- Services -->

    <!-- About-->
    <div id="ABOUT US">
        <!-- <div style="background: transparent;" class="jumbotron fluid ">  -->
        <div class="row">
            <div class="container">
                <h1 style="text-align:center">DISCOVER THE WORLD WITH US</h1>
                <p style="text-align:center">For those who want vacations done the right way</p>
            </div>

            <div class="col-md-4 offset-md-1 mx-3 my-3">

                <!-- Featured image -->
                <div class="view overlay">
                    <img src="images/img1.jpg" class="img-fluid" alt="Sample image">
                    <a>
                        <div class="mask rgba-white-slight"></div>
                    </a>
                </div>

            </div>



            <div class="col-md-7 text-md-left ml-3 mt-3">


                <p class="font-weight-normal" style="text-align: justify;">On a constantly changing tourism
                    market, it can sometimes be difficult to find a trusted partner. And when you analyze the
                    services of an agency, you have to take into account several aspects – experience,
                    diversity, prices, opinions of other tourists.

                    With over 12 years of experience, we offer both “traditional” and some more special
                    destinations. Whether you want a vacation at the sea or skiing, a circuit in the country or
                    abroad, an escape from the daily or a team building, Neve Agency consultants are ready to
                    offer you irreproachable services at affordable prices.
                    Our goal is to provide the right business growth services at the appropriate time so
                    companies can benefit from the created momentum and thrive for a long period of time

                    Everything we recommend has direct positive impact
                    You will become an important partner of our company
                </p>

                <a class="btn btn-success">Read more</a>

            </div>


        </div>

        <!-- </div> -->

        <div style="background:#000080 !important" class="jumbotron-fluid text-white">

            <section class="stats py-lg-5">
                <div class="container py-5">
                    <div class="row text-center">
                        <div class="col-md-3 col-sm-6">

                            <span class="fa fa-briefcase"></span>
                            <h3 class="timer count-title count-number">12</h3>
                            <p class="count-text">Years Of Experience</p>

                        </div>
                        <div class="col-md-3 col-sm-6">

                            <span class="fa fa-user"></span>
                            <h3 class="timer count-title count-number">120</h3>
                            <p class="count-text">Our Agents</p>

                        </div>
                        <div class="col-md-3 col-sm-6">

                            <span class="fa fa-smile"></span>
                            <h3 class="timer count-title count-number">1280</h3>
                            <p class="count-text">Happy Customers</p>

                        </div>
                        <div class="col-md-3 col-sm-6">

                            <span class="fa fa-users"></span>
                            <h3 class="timer count-title count-number">10200</h3>
                            <p class="count-text">Clients</p>

                        </div>
                    </div>
            </section>

        </div>
    </div>



    <!-- About -->

    <!-- Team -->


    <div style="margin-top: 25px" class="jumbotron-fluid text-dark">
        <div class="container">
            <h1 style="text-align:center">MEET OUR TRAVEL EXPERTS</h1>
            <p style="text-align:center">They are the people working to provide you the best experiences</p>
        </div>

        <hr class="mt-2 mb-5">

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-4" style="margin: auto;">
                    <div class="testimonial" style="width: 18rem;">
                        <img class="card-img-top rounded-circle" src="images/team1.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <h4 class="card-title">Jason Donoghue</h4>
                            <h6 class="card-title" style="color: dodgerblue;">City Break Expert</h6>
                            <p class="card-text"><i>Hockey fan, foodie, audiophile, vintage furniture lover and
                                    passionate
                                    about urban photography. Working to provide the best city break offers so you don’t
                                    have
                                    to stress about it. “You should enjoy the city, not worry about the trip’s
                                    details.”</i>
                            </p>
                            <!-- Linkedin -->
                            <a href="#"><span class="icons-sm li-ic"><i class="fab fa-linkedin-in"></i></a>
                            <!-- Twitter -->
                            <a href="#"><span class="icons-sm tw-ic"><i class="fab fa-twitter"></i></a>
                            <!-- Dribbble -->
                            <a href="#"><span class="icons-sm fb-ic"></span><i class="fab fa-facebook-f"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" style="margin: auto;">
                    <div class="testimonial" style="width: 18rem;">
                        <img class="card-img-top rounded-circle" src="images/team2.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <h4 class="card-title">Mariana Noe</h4>
                            <h6 class="card-title" style="color: dodgerblue;">Nature Trips Expert</h6>
                            <p class="card-text"><i>Nature enthusiast, animal lover and passionate mountaineer. Your
                                    journey
                                    must be safe, efficient and convenient. “My mission is to create an unforgettable
                                    holiday because time has an essential role in everyone’s life.”</i></p>
                            <!-- Linkedin -->
                            <a href="#"><span class="icons-sm li-ic"><i class="fab fa-linkedin-in"></i></a>
                            <!-- Twitter -->
                            <a href="#"><span class="icons-sm tw-ic"><i class="fab fa-twitter"></i></a>
                            <!-- Dribbble -->
                            <a href="#"><span class="icons-sm fb-ic"></span><i class="fab fa-facebook-f"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" style="margin: auto;">
                    <div class="testimonial" style="width: 18rem;">
                        <img class="card-img-top rounded-circle" src="images/person_1.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <h4 class="card-title">Daniel Doe</h4>
                            <h6 class="card-title" style="color: dodgerblue;">Exotic Destinations Expert</h6>
                            <p class="card-text"><i>Skydiver, rock climber, surfer, kiter and lover of exotic fruits. “A
                                    “special” category of clients that I like is the newly married young people, whom I
                                    like
                                    to offer the journey of their lives in their honeymoon. A little something to help
                                    them
                                    get started.”</i></p>
                            <!-- Linkedin -->
                            <a href="#"><span class="icons-sm li-ic"><i class="fab fa-linkedin-in"></i></a>
                            <!-- Twitter -->
                            <a href="#"><span class="icons-sm tw-ic"><i class="fab fa-twitter"></i></a>
                            <!-- Dribbble -->
                            <a href="#"><span class="icons-sm fb-ic"></span><i class="fab fa-facebook-f"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Team -->


    <!--Gallery-->
    <section>
        <div class="jumbotron jumbotron-fluid">

            <div class="container">
                <h1 style="text-align:center">TOP DESTINATIONS</h1>
                <p style="text-align:center">All jouneys have secret destinations</p>
            </div>

            <hr class="mt-2 mb-5">

            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="row mb-4">
                        <a href="images/1.jpg" data-toggle="lightbox" style="width:200%" data-gallery="example-gallery"
                            class="col-sm-4">
                            <img src="images/1.jpg" class="img-fluid">
                        </a>
                        <a href="images/2.jpg" data-toggle="lightbox" style="width:100%" data-gallery="example-gallery"
                            class="col-sm-4">
                            <img src="images/2.jpg" class="img-fluid">
                        </a>
                        <a href="images/3.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
                            <img src="images/3.jpg" class="img-fluid">
                        </a>
                    </div>
                    <div class="row mb-4">
                        <a href="images/4.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
                            <img src="images/4.jpg" class="img-fluid">
                        </a>
                        <a href="images/5.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
                            <img src="images/5.jpg" class="img-fluid">
                        </a>
                        <a href="images/6.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
                            <img src="images/6.jpg" class="img-fluid">
                        </a>
                    </div>
                </div>
            </div>
        </div>



    </section>

    <!-- Gallery -->



    <!-- Contact -->
    <section class="section">
        <div id="CONTACT">
            <div class="container">

                <div class="row">
    
                    <div class="col-lg-8 col-lg-offset-2">
    
                        <h1>Contact Us</h1>
    
                        <p class="lead">You can stop by our office for a cup of coffee and just use the contact form below for any questions and inquiries</p>
    
    
                        <form id="contact-form" method="post" action="conect.php">
    
                            <div class="messages"></div>
    
                            <div class="controls">
    
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="form_name">Firstname *</label>
                                            <input id="form_name" type="text" name="name" class="form-control" placeholder="Please enter your firstname *" required="required" data-error="Firstname is required.">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="form_lastname">Lastname *</label>
                                            <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Please enter your lastname *" required="required" data-error="Lastname is required.">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="form_email">Email *</label>
                                            <input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required.">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="form_phone">Phone</label>
                                            <input id="form_phone" type="tel" name="phone" class="form-control" placeholder="Please enter your phone">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="form_message">Message *</label>
                                            <textarea id="form_message" name="message" class="form-control" placeholder="Message for me *" rows="4" required="required" data-error="Please,leave us a message."></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <input type="submit" name="ok" class="btn btn-success btn-send" value="Send message">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <p class="text-muted"><strong>*</strong> These fields are required. Contact form by <a href="" target="_blank">Travel Agency</a>.</p>
                                    </div>
                                </div>
                            </div>
    
                        </form>
                    
    
                    </div><!-- /.8 -->
    
                </div> <!-- /.row-->
    
            </div> <!-- /.container-->
        </div>
    </section>
    <!-- Contact -->



    <!-- Footer -->
    <div style="background-color:#78909c blue-grey lighten !important" class="jumbotron">
        <div class="container">
            <div class="row">

                <div class="col-md-5 col-sm-6">
                    <h2>Travel Agency</h2>
                    <p>321 Donec et justo id risus, Malesuada pharetra,<br> Tristique vestibulum,<br> Lorem
                        ipsum dolor
                    </p>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="footer-info">
                        <h2>Keep in touch</h2>
                        <p><a href="tel:010-090-0780">010-090-0780</a></p>
                        <p><a href="mailto:info@company.com">travel@agency.com</a></p>
                        <p><a href="#">Our Location</a></p>
                    </div>
                </div>

                <div class="col-md-3 col-sm-12">

                    <h2>About Us</h2>
                    <p>Sed vestibulum posuere ante, eget blandit metus. Morbi sodales feugiat erat, et placerat
                        sapien
                        suscipit ut.</p>
                    <ul class="social-icon">
                        <!-- Linkedin -->
                        <a href="#"><span class="icons-sm li-ic"><i class="fab fa-linkedin-in"></i></a>
                        <!-- Twitter -->
                        <a href="#"><span class="icons-sm tw-ic"><i class="fab fa-twitter"></i></a>
                        <!-- Dribbble -->
                        <a href="#"><span class="icons-sm fb-ic"></span><i class="fab fa-facebook-f"></i></a>
                    </ul>

                </div>

                <div class="clearfix"></div>

                <div class="col-md-12 col-sm-12">
                    <div class="copyright-text">
                        <p>Copyright © 2018 Travel Agency</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Footer -->




    <!--fontawesome-->

    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js"
        integrity="sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js"></script>
    <script>
        $(document).on('click', '[data-toggle="lightbox"]', function (event) {
            event.preventDefault();
            $(this).ekkoLightbox();
        });

    </script>

</body>

</html>