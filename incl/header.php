<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title><?php echo $pageTitle; ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        
        <!--Ikonen som läggs till på smartphones startskärm vid bokmärkning-->
        <link rel="nifty-touch-icon" href="nifty-touch-icon.png">
        
    
        <link rel="stylesheet" href="css/style.css">
        <link href='https://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body<?php if(isset($pageId)) echo " id='$pageId' "; ?>>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        
      <!--Lägga till navbaren här och markera nuvarande menyval mha $pageId-->
      <header>
        <nav>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">Awards</a></li>
            <li><a href="#">Works</a></li>
            <li><a href="#">About</a></li>
          </ul>
        </nav>
      </header>

