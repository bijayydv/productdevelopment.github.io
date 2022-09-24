<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="CSS/style.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>

<body>

    <ul style="margin-bottom: 0.2rem;">
        <li><img style="height: 55px; width: 50px;" src="Image/logo.png" alt=""></img></li>
        <li><a class="active" href="index.php">FunOlympics</a></li>
        <div class="topnav-right">
           <li> <a class="login" href="login_form.php">Login</a></li>
        </div>

    </ul>

    <div class="scrollmenu">
        <a href="index.php" style="background-color: #2196F3;">Home</a>
        <a href="news.php" style="background-color: #2196F3;">News</a>
        <a href="highlight.php" style="background-color: #2196F3;">Highlights</a>
        <a href="login_form.php" style="background-color: #2196F3;">Livebroadcast</a>
        <a href="gallery.php" style="background-color: #2196F3;">Gallery</a>
    </div>


    <section class="Imageslider" style="margin-top: 0px!important;">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="Image/carosuel/resized0.jpg" alt="First slide">
                    <div class="carousel-caption">
                        <h2 class="title">City of Bayjing</h2>
                        <p>Welcome user! Enjoy ur Journey</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="Image/carosuel/resized.jpg" alt="First slide">
                    <div class="carousel-caption">
                        <h2 class="title">City of Bayjing</h2>
                        <p>Welcome user! Enjoy ur Journey</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="Image/carosuel/resized1.jpg" alt="Second slide">
                    <div class="carousel-caption">
                        <h2 class="title">City of Bayjing</h2>
                        <p>Welcome user! Enjoy ur Journey</p>
                    </div>
                </div>
                <div class="carousel-item ">
                    <img class="d-block w-100" src="Image/carosuel/resized2.jpg" alt="Third slide">
                    <div class="carousel-caption">
                        <h2 class="title">City of Bayjing</h2>
                        <p>Welcome user! Enjoy ur Journey</p>
                    </div>
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
        </div>
    </section>
    <section class="News-section" >

        <section class="my-1">
            <div class="py-1">
                <h2 class="text-center newsletter ">Today's News</h2>
            </div>
            <div class=" container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="card" style="width: 100%;">
                            <img src="Image/News/News.webp" class="img-fluid" />
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="card" style="width: 100%; height:auto">
                            <h2 class="display-5">Stephanie Gilmore exclusive after eighth title win: 'I'm not old at all. I feel incredible</h2>
                            <p class="py-1">The Australian history-maker started the season with doubt crowding her mind but, by season's end, had
                                claimed a record-breaking eighth world surfing title and feeling better than ever. What made the difference, asks Olympics.com.</p>
                        </div>
                        <a href="news.php" class="btn btn-success">Read More</a>
                    </div>
                </div>
            </div>

            <div class=" container-fluid1 ">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="card" style="width: 100%;">
                            <img src="Image/News/News0.webp" class="img-fluid" />
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="card" style="width: 100%; height:auto">
                            <h2 class="display-5">Iga Swiatek wins women's title at 2022 US Open tennis grand slam

                            </h2>
                            <p class="py-1">Find out how the trophy was won and all the other results from Saturday 10th September at the fourth and final grand slam of the year.</p>

                        </div>
                        <a href="news.php" class="btn btn-success">Read More</a>
                    </div>
                </div>
            </div>
        </section>
    </section>

    <section class="Highlights">
        <section class="my-5">
            <div class="py-3">
                <h2 class="text-center newsletter">Highlights</h2>
            </div>
            <div class=" container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="card" style="width:100%;">
                            <video width="100%" height="200" controls>
                                <source src="video/Swimming_Cinematic____4K_Swimming_Short_Video(480p).mp4" type="video/mp4">

                            </video>
                            <div class="card-body">
                                <h5 class="card-title">Swimming_Cinematic____4K_Swimming</h5>
                                <a href="highlight.php" class="btn btn-primary">Click for more</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="card" style="width:100%;">
                            <video width="100%" height="200" controls>
                                <source src="video/OLYMPIQUE LYONNAIS - PARIS SAINT-GERMAIN (0 - 1) - Highlights - (OL -  1080 x 1920.mp4" type="video/mp4">

                            </video>
                            <div class="card-body">
                                <h5 class="card-title">OLYMPIQUE LYONNAIS</h5>
                                <a href="highlight.php" class="btn btn-primary">Click For more</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="card" style="width:100%;">
                            <video width="100%" height="200" controls>
                                <source src="video/Long_Jump_Athletics_by_Olympic_Boy___Long_Jump_Status(360p).mp4" type="video/mp4">

                            </video>
                            <div class="card-body">
                                <h5 class="card-title">Olympics Games 2022</h5>
                                <a href="highlight.php" class="btn btn-primary">Click for more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>

    <section class="section-gallery">
        <section class="my-5">
            <div class="py-4">
                <h2 class="text-center newsletter">Gallery</h2>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <img src="Image/gallery/1.jpg" class="img-fluid pb-4">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <img src="Image/gallery/2.jpg" class="img-fluid pb-4">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <img src="Image/gallery/3.jpg" class="img-fluid pb-4">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <img src="Image/gallery/4.jpg" class="img-fluid pb-4">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <img src="Image/gallery/5.jpg" class="img-fluid pb-4">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <img src="Image/gallery/6.jpg" class="img-fluid pb-4">
                    </div>
                </div>
            </div>
        </section>
    </section>

    <section class="contact-section">

        <section class="my-5">
            <div class="py-4">
                <h2 class="text-center newsletter">Contact Us</h2>
            </div>

            <div class="w-50 m-auto">
                <form action="userinfo.php" method="post" enctype="multipart/">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="user" autocomplete="off" class="form-control" placeholder="Username" required>
                    </div>
                    <div class="form-group">
                        <label>Email <Address></Address></label>
                        <input type="Email" name="email" autocomplete="off" class="form-control" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <label>Contact Number</label>
                        <input type="number" name="number" autocomplete="off" class="form-control" placeholder="Mobile Number" required>
                    </div>
                    <div class="form-group">
                        <label>Message Us</label>
                        <textarea class="form-control" placeholder="Message Us" autocomplete="off" class="form-control" name="message" style="height: 150px;" required>
                    </textarea>
                    </div>
                    <button type="submit" class="btn btn-success">Submit</button>
                </form>
            </div>
        </section>
    </section>
    <footer>
        <p class="text-center p-4 bg-dark text-white">@FunOlympicCommunity</p>
    </footer>






    </section>











</body>

</html>