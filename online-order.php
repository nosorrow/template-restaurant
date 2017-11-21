<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">
    <link rel="stylesheet" type="text/css"
          href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.css"/>
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/js/holder.js"></script>
    <title>Template-Restaurant</title>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
<div class="social-icon-left">
    <a href="https://www.facebook.com/Chefs-Family-Bar-Kitchen-1991656841061317/" target="_blank">
        <i class="fa fa-facebook-official fa-2x" aria-hidden="true"></i>
    </a>
</div>
<!--  Navbar -->
<nav id="main-nav" class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand text-center" href="#myPage">Chefs Family Bar<br> & Kitchen</a>
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
<div id="jumbotron" class="jumbotron text-center">
    <h1>Company</h1>

    <p>We specialize in blablabla</p>

    <form class="form-inline">
        <input type="email" class="form-control" size="50" placeholder="Email Address">
        <button type="button" class="btn btn-danger">Subscribe</button>
    </form>
    <p id="height"></p>
</div>

<div id="online_order" class="container container-padding">

</div>
<!--  Add (About container) -->
<div id="about" class="container container-padding">

</div>

<!-- ADD Chef Container -->
<div id="chef" class="container container-padding">
    <div class="row text-center">
        <h4 class="section-title">Главния готвач</h4>
        <hr class="hr hr-double">
    </div>
    <div class="row">
        <div class="col-md-6">
            <img src="images/chef-2.jpg" alt="chef" class="img-responsive slideanim">
        </div>
        <div class="col-md-6">
            <h2 class="post-title">Среща с шеф Манчев</h2>
            <div class="section-text-left">
                <p>
                    A calm, pleasant, helpful and hardworking individual who has a passion for great
                    food and who enjoys cooking mouth watering dishes. Charles gets a real buzz out of
                    working in a busy kitchen, and great pleasure out of seeing happy faces enjoying a
                    good meal that he has cooked.
                </p>
            </div>
        </div>

    </div>
</div>

<!-- GO HOME Button -->
<div id="gohome" class="home">
    <a href="#myPage" title="To Top">
        <span class="glyphicon glyphicon-chevron-up"></span>
    </a>
</div>
<!-- Footer -->
<footer>
    <div class="container-fluid footer-style">

        <div class="row">
            <div class="col-md-4 col-xs-12">
                <p><span class="glyphicon glyphicon-phone"></span> +0359 88223314</p>
                <p><span class="glyphicon glyphicon-envelope"></span> e-mail@something.com</p>
                <p><span class="glyphicon glyphicon-hourglass"></span> работно време: 09 - 24:00ч.</p>
                <div class="social-icon-footer">
                    <a style="display: inline-block"
                       href="https://www.facebook.com/Chefs-Family-Bar-Kitchen-1991656841061317/" target="_blank">
                        <i class="fa fa-facebook-official fa-2x" aria-hidden="true"></i>
                    </a>
                    <p style="display: inline-block">follow us</p>
                </div>
            </div>
            <div class="col-md-4 col-xs-12">
                <ul>
                    <li><a href="#">Ресторантът</a></li>
                    <li><a href="#">Меню</a></li>
                    <li><a href="#">Поръчка</a></li>
                    <li><a href="#">Къде сме</a></li>
                </ul>
            </div>

        </div>
    </div>
    <div class="container-fluid footer-dark">
        <div class="row">
            <div class="col-md-12 col-xs-12">
                <p>Copyright &copy; 2017 Chefs Family Bar & Kitchen  | Designed by plamenorama@gmail.com</p>
            </div>
        </div>
    </div>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
<script src="https://cdn.jsdelivr.net/scrollreveal.js/3.1.4/scrollreveal.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/template-js.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.js"></script>
<script>
    window.addEventListener("load", function () {
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
        })
    });

   /* Holder.addTheme("custom", {foreground: "#fff", background: "#000", size: 15}).run({
        domain: "custom.holder",
        renderer: "canvas"
    });
*/
</script>
</body>
</html>