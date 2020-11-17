<?php header('Content-type: text/html; charset=utf-8'); ?>
<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Kam-webagentur</title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />

    <!-- Google fonts-->
    <link href="./css/Montserrat.css" rel="stylesheet" type="text/css" />
    <link href="./css/DroidSerif.css" rel="stylesheet"
        type="text/css" />
    <link href="./css/Roboto.css" rel="stylesheet" type="text/css" />
    <link href="./css/animate.min.css" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />

    <script src="https://unpkg.com/web-vitals@0.2.4/dist/web-vitals.es5.umd.min.js"></script>

 
    <style>
        .masthead{
            background-image:url("../assets/img/2-min.png") !important;
        }
    </style>
<script>
addEventListener('DOMContentLoaded', function() {
  webVitals.getCLS(console.log);
  webVitals.getFID(console.log);
  webVitals.getLCP(console.log);
});
</script>
</head>

<body id="page-top" onload="load('de')" class="w-100 h-100">
   
    <!-- Navigation-->
    <?php include("./menu.php"); ?>
    <section id="mypage" class="w-100">

        <!-- Masthead-->
        <header class="masthead w-100">
            <div class="container">

                <div class="masthead-heading text-uppercase shadowtext" data-tag="wissen"></div>
                <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services"
                    data-tag="Willkommen"></a>
            </div>
        </header>
        <!-- uber unse -->
        <?php include("./uberUns.php"); ?>
        <!-- Services-->
        <?php include("./services.php"); ?>
        <!-- homePage Grid-->
        <?php include("./homePage.php"); ?>


        <!-- Apps-->
        <?php include("./apps.php"); ?>
        <!-- Online Shop-->
        <?php include("./onlineShop.php"); ?>
        <!-- platforme-->
        <?php include("./platforme.php"); ?>
        <!-- Contact-->
        <?php include("./contact.php"); ?>
    </section>


    <!-- datenschutz-->
    <?php include("./datenschutz.php"); ?>

    <!-- agb-->
    <?php include("./agb.php"); ?>
       <!-- impressum-->
       <?php include("./impressum.php"); ?>
    <!-- Footer-->
    <?php include("./footer.php"); ?>


    <!-- Bootstrap core JS-->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <!-- Third party plugin JS-->
    <script src="js/jquery.easing.min.js"></script>
    <!-- Contact form JS-->
    <script src="assets/mail/jqBootstrapValidation.js"></script>
    <script src="assets/mail/contact_me.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>

        <!-- Font Awesome icons (free version)-->
        <script src="js/all.js" crossorigin="anonymous"></script>
        <script src="./js/translate.js"></script>
        <script src="./js/personaliser.js"></script>
    
<style>
    .slide1{
background-image:url("../assets/img/1-min.png") !important;
    }
    .slide2{
background-image:url("../assets/img/2-min.png") !important;
    }
    .slide3{
background-image:url("../assets/img/3-min.png") !important;
    }
</style>
    <script>
      /**
       * @param  {number} interval (in milliseconds)
       */
      function cycleBackgrounds(interval) {
       var classImg=["slide1", "slide2", "slide3"];

        const $imageEls = document.querySelectorAll('header') // Get the images to be cycled.
        
        setInterval(() => {
            $('header').removeClass();
            $('header').addClass("masthead w-100");
            $('header').toggleClass(classImg[Math.floor(Math.random() * 3)]);
        }, interval)
      }

      document.addEventListener("DOMContentLoaded", function() {
        cycleBackgrounds(4000);
      });
    </script>

</body>


</html>