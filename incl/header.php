<!doctype html>
<html lang="">
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
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    </head>
    <body<?php if(isset($pageId)) echo " id='$pageId' "; ?>>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        
      <!--Lägga till navbaren här och markera nuvarande menyval mha $pageId-->
      <header>
        <nav class="clear navigation">
          <ul>
            <li><a id="home-"  href="index.php">Home</a></li>
            <li><a id="contact-"  href="contact.php">Contact</a></li>
            <li><a id="works-"  href="work.php">Works</a></li>
            <li><a id="about-"  href="about.php">About</a></li>
          </ul>
        </nav>
        <h1 id="logo">Nifty<span>.</span></h1>
          <div class="menu">
          <i class="fa fa-bars bars"></i>
          <i class="fa fa-times times"></i>
          </div>
      </header>

