<!doctype html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>
        <?php echo $pageTitle; ?>
    </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- Favicons-->
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="apple-touch-icon" href="touch-icon-iphone.png">
    <link rel="apple-touch-icon" sizes="76x76" href="touch-icon-ipad.png">
    <link rel="apple-touch-icon" sizes="120x120" href="touch-icon-iphone-retina.png">
    <link rel="apple-touch-icon" sizes="152x152" href="touch-icon-ipad-retina.png">


    <link rel="stylesheet" href="css/style.css">

    <!-- Externtal stylesheets for fonts & icons-->
    <link href='https://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <!--Google maps API-->
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script>
        function initialize() {
            var markerPos = {lat: 59.341135, lng: 18.064717}; 
            
            var mapCanvas = document.getElementById('map');
            var mapOptions = {
                center: new google.maps.LatLng(59.341135, 18.064717),
                zoom: 15,
                scrollwheel: false,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            }

            var marker = new google.maps.Marker({
                position: markerPos,
                map: map,
                title: 'Hello World!'
            });

            var map = new google.maps.Map(mapCanvas, mapOptions)
        }
        google.maps.event.addDomListener(window, 'load', initialize);
    </script>



</head>
<body<?php if(isset($pageId)) echo " id='$pageId' "; ?>>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <div class="wrapper">

        <div class="menuWrapper">
            <div class="menu">
                <i id="bars" class="fa fa-bars"></i>
                <i id="times" class="fa fa-times"></i>
            </div>
        </div>


        <header <?php if(isset($pageId)) echo " id='$pageId' "; ?>>
            <nav id="navigation" class="noJsNavigation">
                <ul>
                    <li><a id="home-" href="index.php">Home</a></li>
                    <li><a id="contact-" href="contact.php">Contact</a></li>
                    <li><a id="works-" href="work.php">Works</a></li>
                    <li><a id="about-" href="about.php">About</a></li>
                </ul>
            </nav>
            <h1 id="logo">Nifty<span>.</span></h1>

        </header>

        <main>