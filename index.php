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
  <?php
  $pageTitle = 'Nifty';
  $pageId = 'home';
  ?>

    <?php include 'incl/header.html'?>

      <section id="journey">
        <h2>Our journey</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sapien arcu, iaculis a sem sit amet, porta dignissim urna. Aliquam non felis mattis, finibus nisi vitae, lacinia erat. Cras vitae placerat ex. Aliquam erat volutpat. Curabitur quis
          convallis odio. Sed id erat tristique, imperdiet eros in, imperdiet massa. Aliquam ut imperdiet dolor. Fusce efficitur dui quis ullamcorper molestie. Nullam facilisis rhoncus lectus id varius. Nulla lacus ex, hendrerit ut nunc non, porta ullamcorper
          nisi. Quisque gravida mi eu neque blandit porta. Proin ut pulvinar purus, in rutrum arcu.</p>
      </section>

      <section id="team">
        <h2>Our team</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sapien arcu, iaculis a sem sit amet, porta dignissim urna. Aliquam non felis mattis, finibus nisi vitae, lacinia erat. Cras vitae placerat ex. Aliquam erat volutpat. Curabitur quis
          convallis odio. Sed id erat tristique, imperdiet eros in, imperdiet massa. Aliquam ut imperdiet dolor. Fusce efficitur dui quis ullamcorper molestie. Nullam facilisis rhoncus lectus id varius. Nulla lacus ex, hendrerit ut nunc non, porta ullamcorper
          nisi. Quisque gravida mi eu neque blandit porta. Proin ut pulvinar purus, in rutrum arcu.</p>
      </section>

      <section id="portfolio">
        <h2>Our works</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sapien arcu, iaculis a sem sit amet, porta dignissim urna. Aliquam non felis mattis, finibus nisi vitae, lacinia erat. Cras vitae placerat ex. Aliquam erat volutpat. Curabitur quis
          convallis odio. Sed id erat tristique, imperdiet eros in, imperdiet massa. Aliquam ut imperdiet dolor. Fusce efficitur dui quis ullamcorper molestie. Nullam facilisis rhoncus lectus id varius. Nulla lacus ex, hendrerit ut nunc non, porta ullamcorper
          nisi. Quisque gravida mi eu neque blandit porta. Proin ut pulvinar purus, in rutrum arcu.</p>
      </section>

      <section id="contact">
        <h2>Nifty Webproductions</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sapien arcu, iaculis a sem sit amet, porta dignissim urna. Aliquam non felis mattis, finibus nisi vitae, lacinia erat. Cras vitae placerat ex. Aliquam erat volutpat. Curabitur quis
          convallis odio. Sed id erat tristique, imperdiet eros in, imperdiet massa. Aliquam ut imperdiet dolor. Fusce efficitur dui quis ullamcorper molestie. Nullam facilisis rhoncus lectus id varius. Nulla lacus ex, hendrerit ut nunc non, porta ullamcorper
          nisi. Quisque gravida mi eu neque blandit porta. Proin ut pulvinar purus, in rutrum arcu.</p>
      </section>

      <?php include 'incl/footer.html'?>

        </body>
</html>
