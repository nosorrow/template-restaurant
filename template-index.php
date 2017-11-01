<!DOCTYPE html>
<html lang="bg">
<head>
    <meta charset="utf-8">
    <title>Template-Restaurant</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="favicon.ico">
    <link href='https://fonts.googleapis.com/css?family=Roboto&subset=latin,cyrillic-ext' rel='stylesheet'
          type='text/css'>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.css" />
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
    <script src="https://cdn.jsdelivr.net/scrollreveal.js/3.1.4/scrollreveal.min.js"></script>
    <script src="https://cdn.rawgit.com/imsky/holder/master/holder.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
<div class="facebook-left">
    <a href="https://www.facebook.com/Chefs-Family-Bar-Kitchen-1991656841061317/" target="_blank">
        <i class="fa fa-facebook-official fa-2x" aria-hidden="true"></i>
    </a>
</div>
<!-- ------------------------ Navbar ----------------------------->
<nav id="main-nav" class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#myPage">Chefs Family Bar Kitchen</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#about">Ресторантът</a></li>
                <li><a href="#menu">Меню</a></li>
                <li><a href="#chef">The Chef</a></li>
                <li><a href="#order">Онлайн поръчка</a></li>
                <li><a href="#contact">Контакти</a></li>
            </ul>
        </div>
    </div>
</nav>
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
            <img src="img/oktopod.jpg" alt="Restaurant" class="img-responsive">
            <div class="carousel-caption">
                <h1>Taste of the East</h1>
                <h3>I'm a paragraph. here add your own text and edit me.</h3>
                <p><a class="btn btn-lg btn-warning btn-resized" href="#" role="button">поръчай</a></p>
            </div>
        </div>

        <div class="item">
            <img src="img/furna.jpg" alt="Furna"  class="img-responsive">
            <div class="carousel-caption">
                <h1>Taste of the East</h1>
                <h3>I'm a paragraph. here add your own text and edit me.</h3>
                <p><a class="btn btn-lg btn-info btn-resized" href="#" role="button">поръчай</a></p>
            </div>
        </div>

        <div class="item">
            <img src="img/shots.jpg" alt="Shots"  class="img-responsive">
            <div class="carousel-caption">
                <h1>Taste of the East</h1>
                <h3>I'm a paragraph. here add your own text and edit me.</h3>
                <p><a class="btn btn-lg btn-success btn-resized" href="#" role="button">поръчай</a></p>
            </div>
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

<!-- ------------------- Add (About container) --------------------------------- -->
<div id="about" class="container container-padding">
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
<div class="container container-padding" id="menu">
    <div class="row text-center">
        <h4 class="section-title">специалното ни меню</h4>
        <hr class="hr hr-double">
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-6">
            <div class="text-menu">
                <div class="row slideanim">
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
                <div class="row slideanim">
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
                <div class="row slideanim">
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
                <div class="row slideanim">
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

<div id="chef" class="container container-padding">
    <div class="row text-center">
        <h4 class="section-title">Главния готвач</h4>
        <hr class="hr hr-double">
    </div>
    <div class="row">
        <div class="col-md-8">
            <img src="img/chef-2.jpg" alt="chef" class="img-responsive slideanim">
        </div>
        <div class="col-md-4">
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
<div class="container-fluid">
    <div class="row text-center">
        <h4 class="section-title">От нашата кухня</h4>
        <hr class="hr hr-double">
    </div>
    <div class="col-md-12">
        <div class="row">
            <hr>
            <div class="gal">
                <img src="img/gal/salmon.jpg" alt="01">
                <img src="img/gal/frape.jpg" alt="01">
                <img src="img/gal/burger-1.jpg" alt="01">
                <img src="img/gal/food-4.jpg" alt="01">
                <img src="img/gal/uzzo.jpg" alt="01">
                <img src="img/gal/oktopod.jpg" alt="01">
                <img src="img/gal/rest-2.jpg" alt="01">
                <img src="img/gal/food-1.jpg" alt="01">
                <img src="img/gal/palachinka.jpg" alt="01">
                <img src="img/gal/fresh.jpg" alt="01">
                <img src="img/gal/bar-image.jpg" alt="01">
                <img src="img/gal/food-2.jpg" alt="01">
                <img src="img/gal/desert.jpg" alt="01">
            </div>
        </div>
    </div>
</div>

<!-- ------------------- ADD Contact Container -- ------------>
<div id="contact" class="container-fluid bg-grey container-padding">
    <div class="row text-center">
        <h4 class="section-title">къде се намираме</h4>
        <hr class="hr hr-double">
    </div>
    <div class="row">
        <div class="col-sm-5 text-left">
            <div class="address">
                <p>Адрес</p>

                <p><span class="glyphicon glyphicon-map-marker"></span> Видин ул. "Гладстон" 25</p>

                <p><span class="glyphicon glyphicon-phone"></span> +0359 88223314</p>

                <p><span class="glyphicon glyphicon-envelope"></span> e-mail@something.com</p>
            </div>
        </div>
        <div class="col-sm-7">
            <!-- ------------ Google map ---------------------- -->
            <!-- Set height and width with CSS -->
            <div id="googleMap" style="height:400px;width:100%;"></div>
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
<!-- ---------------- GO HOME Button----------------------------------->
<div id="gohome" class="home">
    <a href="#myPage" title="To Top">
        <span class="glyphicon glyphicon-chevron-up"></span>
    </a>
</div>
<!-- ------------------- Footer ---------------------------------- -->
<div class="footer-style container-fluid container-padding">
    <div class="row">
        <div class="col-md-4 col-sm-12">
            <p>phone: +359 887123456</p>
            <div class="social-icon-footer">
                <p>follow us</p>
                <a href="#"><i class="fa fa-facebook-official fa-2x" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-twitter-square fa-2x" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-linkedin-square fa-2x" aria-hidden="true"></i></a>
            </div>
        </div>
        <div class="col-md-4 col-sm-12">
            <ul>
                <li><a href="#">Ресторантът</a></li>
                <li><a href="#">Меню</a></li>
                <li><a href="#">Поръчка</a></li>
                <li><a href="#">Къде сме</a></li>
            </ul>
        </div>
        <div class="col-md-4 col-sm-12">
            <p>2017 Bootstrap Theme created By</p>
            <p>{ plamenorama@gmail.com }</p>
        </div>
    </div>
</div>
<!-- -------------- Template -  JavaScript ------------------------------------------- -->
<script src="js/template-js.js"></script>
<script src="js/js.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.js"></script>
<script>
    window.addEventListener("load", function(){
        window.cookieconsent.initialise({
            "palette": {
                "popup": {
                    "background": "#252e39"
                },
                "button": {
                    "background": "#14a7d0"
                }
            },
            "theme": "edgeless",
            "content": {
                "message": "Този сайт използва бисквитки (cookies). ",
                "dismiss": "Съгласен съм!",
                "link": "Научи повече",
                "href": "https://www.google.com/intl/bg/policies/technologies/cookies/"
            }
        })});
</script>
</body>
</html>