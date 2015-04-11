<?php //require_once('includes/conn.php'); ?>
<!doctype html>
<!--[if lt IE 7]>      
<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="">
    <![endif]-->
    <!--[if IE 7]>         
    <html class="no-js lt-ie9 lt-ie8" lang="">
        <![endif]-->
        <!--[if IE 8]>         
        <html class="no-js lt-ie9" lang="">
            <![endif]-->
            <!--[if gt IE 8]><!--> 
            <html class="no-js" lang="es">
                <!--<![endif]-->
                <?php require_once('bloques/head.php'); ?>
                <body class="home">
                    <div class="loader">
                        <img src="img/ajax-loader.gif" />
                    </div>
                    <?php require_once('bloques/headerhome.php'); ?>
                    <?php if(!isset($_REQUEST['content'])){
                        require_once('bloques/home.php');
                        }elseif($_REQUEST['content']=='productos'){
                        require_once('bloques/productos.php');
                        }elseif($_REQUEST['content']=='contactenos'){
                        require_once('bloques/contactenos.php');
                        }else{
                        require_once('bloques/home.php');
                        } ?>
                    <?php require_once('bloques/footer.php'); ?>
                    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

                    <script src="js/plugins.js"></script>
                    <script src="js/vendor/owl.carousel.js"></script>
                    <script src="js/main.js"></script>
                    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
                    <script>
                        (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
                        function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
                        e=o.createElement(i);r=o.getElementsByTagName(i)[0];
                        e.src='//www.google-analytics.com/analytics.js';
                        r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
                        ga('create','UA-XXXXX-X','auto');ga('send','pageview');
                    </script>
                </body>
            </html>
