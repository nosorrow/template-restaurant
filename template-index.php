<!DOCTYPE html>
<html lang="bg">
<head>
    <meta charset="utf-8">
    <title>Template-Restaurant</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://fonts.googleapis.com/css?family=Roboto&subset=latin,cyrillic-ext' rel='stylesheet'
          type='text/css'>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
    <script src="https://cdn.jsdelivr.net/scrollreveal.js/3.1.4/scrollreveal.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
<!-- ------------------------ Navbar ----------------------------->
<nav id="main-nav" class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#" style="">Your Restaurant & Bar Name</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#about">Ресторантът</a></li>
                <li><a href="#menu">Меню</a></li>
                <li><a href="#chef">Шефът</a></li>
                <li><a href="#contact">Контакти</a></li>
            </ul>
        </div>
    </div>
</nav>


<!-- ----------------------- ADD (Paralax-Slide) -------------------------------------- -->
<div id="paralax-slide" class="container-fluid paralax-slide text-center">
<!---->
<!--    <!-- ------------------  Start Booking-room Form ----------------------- -->-->
<!--    <div class="container-fluid">-->
<!--        <div class="row text-center">-->
<!--            <div class="col-md-12">-->
<!--                <h1 style="color:#0ffef9;">{ Your Hello message here! }</h1>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div><!-- ---------------End Booking-room Form -----------------------------  -->-->
<!---->
<!--    <div class="social-icon text-center">-->
<!--        <a href="#"><i class="fa fa-facebook-official fa-2x" aria-hidden="true"></i></a>-->
<!--        <a href="#"><i class="fa fa-twitter-square fa-2x" aria-hidden="true"></i></a>-->
<!--        <a href="#"><i class="fa fa-linkedin-square fa-2x" aria-hidden="true"></i></a>-->
<!--    </div>-->

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <img src="img/bar-image.png" alt="Los Angeles" style="width:100%;">
            </div>

            <div class="item">
                <img src="img/furna.jpg" alt="Chicago" style="width:100%;">
            </div>

            <div class="item">
                <img src="img/shots.jpg" alt="New york" style="width:100%;">
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

</div>
<!-- ------------------- Add (About container) --------------------------------- -->
<div id="about" class="container-fluid">
    <div class="row text-center">
        <h4 class="section-title">ресторантът</h4>
        <hr class="hr hr-double">
    </div>
    <div class="row">
        <div class="col-sm-6">
            <img id="img-about" class="img-responsive image-about" src="img/rest-dish.png">
        </div>
        <div class="col-xs-12 col-sm-6 text-about">
            <h2 class="post-title">Lorem ipsum..</h2>

            <p class="p-about">
                The Catering was founded in blabla by Mr. Smith in lorem ipsum dolor sit amet,
                consectetur adipiscing elit consectetur adipiscing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
            </p>
            <p>
                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                deserunt mollit anim id est laborum consectetur adipiscing elit,
                sed do eiusmod temporincididunt ut labore et dolore magna aliqua.
            </p>
        </div>
    </div><!-- End row -->
</div>
<!-- --------------- Container Add( Menu ) ----------------- -->
<div class="container-fluid" id="menu">
    <div class="row text-center">
        <h4 class="section-title">Our Menu</h4>
        <hr class="hr hr-double">
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-6">
            <div class="text-menu">
                <div class="row">
                    <div class="col-sm-9">
                        <h4>Телешки домашен бургер 'The Cef' </h4>
                        <p>Assortment of fresh baked fruit breads and muffins</p>
                    </div>
                    <div class="col-sm-3">
                        <h4>450
                            <small>гр</small>
                            5.50
                        </h4>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-9">
                        <h4>Панирани крилца с корнфлейкс</h4>
                        <p>Assortment of fresh baked fruit breads and muffins</p>
                    </div>
                    <div class="col-sm-3">
                        <h4>450
                            <small>гр</small>
                            5.50
                        </h4>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-9">
                        <h4>Домашно приготвена паста</h4>
                        <p>Assortment of fresh baked fruit breads and muffins</p>
                    </div>
                    <div class="col-sm-3">
                        <h4>450
                            <small>гр</small>
                            5.50
                        </h4>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-9">
                        <h4>Роле от свинско месо с печен сос</h4>
                        <p>Assortment of fresh baked fruit breads and muffins</p>
                    </div>
                    <div class="col-sm-3">
                        <h4>450
                            <small>гр</small>
                            5.50
                        </h4>
                    </div>
                </div>
                <hr>
            </div>
        </div>
        <div class="col-md-6">
            <img id="img-bar" src="img/rest-dish-1.jpg" class="img-responsive">
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 text-center">
            <a href="#" class="full-menu-link">цялото меню <span class="caret"></span></a>
        </div>
    </div>
</div>
<hr>

<!-- ------------------- ADD Chef Container -------------->

<div id="contact" class="container-fluid">
    <div class="row text-center">
        <h4 class="section-title">Нашият Главен готвач</h4>
        <hr class="hr hr-double">
    </div>
    <div class="row">
        <div class="col-md-6">
            <img src="img/chef-2.jpg" alt="chef">
        </div>
        <div class="col-md-6">
            <h2 class="post-title">Среща с шеф Манчев</h2>
            <p class="text-about">
                A calm, pleasant, helpful and hardworking individual who has a passion for great
                food and who enjoys cooking mouth watering dishes. Charles gets a real buzz out of
                working in a busy kitchen, and great pleasure out of seeing happy faces enjoying a
                good meal that he has cooked.
            </p>
        </div>

    </div>
</div>

<!-- ------------------- ADD Image Container -------------->
<div class="container-fluid" style="margin: 0 !important; padding: 0 !important;">
    <!--<div class="row text-center">
        <h4 class="section-title"></h4>
        <hr class="hr hr-double">
    </div>-->
    <div class="row">
        <div>
            <img src="img/gal/salmon.jpg" alt="01" class="">
            <img src="img/gal/burger-1.jpg" alt="01" class="">
            <img src="img/gal/oktopod.jpg" alt="01" class="">
            <img src="img/gal/food-1.jpg" alt="01" class="">
            <img src="img/gal/palachinka.jpg" alt="01" class="">
            <img src="img/gal/desert-3.jpg" alt="01" class="">
        </div>
    </div>
</div>
<!-- ------------------- ADD Contact Container -- ------------>
<div id="contact" class="container-fluid bg-grey">
    <div class="row text-center">
        <h4 class="section-title">къде се намираме</h4>
        <hr class="hr hr-double">
    </div>

    <div class="row">
        <div class="col-sm-5">
            <div class="address">
                <p>Адрес</p>

                <p><span class="glyphicon glyphicon-map-marker"></span> Видин ул. "Гладстон" 25 </p>

                <p><span class="glyphicon glyphicon-phone"></span> +0359 88223314</p>

                <p><span class="glyphicon glyphicon-envelope"></span> e-mail@something.com</p>
            </div>
        </div>
        <div class="col-sm-7">
            <!-- Set height and width with CSS -->
            <div id="googleMap" style="height:400px;width:90%;"></div>
            <!-- Add Google Maps -->
            <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCPDJyNrJzVQwshGN8MPLrr0zR7LOAneCg"></script>
            <script>
                var myCenter = new google.maps.LatLng(43.991771, 22.879069);

                function initialize() {
                    var mapProp = {
                        center: myCenter,
                        zoom: 16,
                        scrollwheel: false,
                        draggable: false,
                        mapTypeId: google.maps.MapTypeId.ROADMAP
                    };

                    var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);

                    var marker = new google.maps.Marker({
                        position: myCenter
                    });

                    marker.setMap(map);
                }

                google.maps.event.addDomListener(window, 'load', initialize);
            </script>

        </div>
    </div>
</div>

<!-- --------------------- Google Maps ------------------------------- -->

<!-- ---------------- GO HOME ----------------------------------->
<div id="gohome" class="home">
    <a href="#myPage" title="To Top">
        <span class="glyphicon glyphicon-chevron-up"></span>
    </a>
</div>
<!-- ------------------- Footer ---------------------------------- -->
<div class="footer-style container-fluid">
    <div class="row">
        <div class="col-md-4 col-sm-12">
            <div class="social-icon-footer">
                <p>follow us</p>
                <a href="#"><i class="fa fa-facebook-official fa-2x" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-twitter-square fa-2x" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-linkedin-square fa-2x" aria-hidden="true"></i></a>
            </div>
        </div>
        <div class="col-md-4 col-sm-12">
            <p>2016 Bootstrap Theme Made By Plamen</p>
        </div>
        <div class="col-md-4 col-sm-12">
            <form class="form-inline">
                <div class="form-group">
                    <input type="email" class="form-control" placeholder="E-mail">
                </div>
                <button id="buton" type="button" class="btn btn-warning">абонамент</button>
            </form>
        </div>
    </div>
</div>
<!-- -------------- Template -  JavaScript ------------------------------------------- -->
<script src="js/template-js.js"></script>
<script src="js/js.js"></script>
</body>
</html>