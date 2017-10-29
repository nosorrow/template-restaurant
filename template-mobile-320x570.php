<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Template-2</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300&subset=latin,cyrillic-ext'
          rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather&subset=latin,cyrillic-ext' rel='stylesheet'
          type='text/css'>
    <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/scrollreveal.js/3.1.4/scrollreveal.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <style>
        .mobile {
            position: absolute;
            top: 20px;
            left: 50%;
            -ms-transform: translateX(-50%);
            -webkit-transform: translate(-50%);
            transform: translate(-50%);
            width: 360px;
            height: 580px;
            background-color: #0a0a0a;
            border-radius: 30px;
        }
        .camera{
            position: relative;
            top: 2%;
            left: 20%;
            width: 15px;
            height: 15px;
            background-color: rgba(255,255,255,0.2);
            border-radius: 50%;
        }
    </style>
</head>
<body style="background-color: #ccc">
<div class="mobile">
    <div class="camera"></div>
    <iframe style="margin:0 auto; margin-top:25px ;display: block" src="template-index.php" width="320" height="510"
            frameborder="0"></iframe>
</div>
</body>
</html>