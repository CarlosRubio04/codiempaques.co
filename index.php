<?php require_once('includes/conn.php'); ?>
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
                <body>
                    <style>
                        body {
                        padding-top: 50px;
                        padding-bottom: 20px;
                        }
                        .loader{
                        background: rgba(0,0,0,0.7);
                        position: fixed;
                        width: 100%;
                        height: 100%;
                        z-index: 100000;
                        }
                        .loader img{
                        position: relative;
                        left: 50%;
                        top: 50%;
                        margin: -25px 0 0 -25px;
                        }
                        .loader .contentss {
                        position: relative;
                        text-align: center;
                        color: #fff;
                        margin-left: 10px;
                        top: 50%;
                        }
                    </style>
                    <body>
                        <div class="loader">
                            <img src="img/ajax-loader.gif" />
                        </div>
                        <?php require_once('bloques/header.php'); ?>
                        <div class="container">
                        <?php if(!isset($_REQUEST['content'])){
                            require_once('bloques/home.php');
                            }elseif($_REQUEST['content']=='servicios'){
                            require_once('bloques/servicios.php');
                            }elseif($_REQUEST['content']=='contactenos'){
                            require_once('bloques/contactenos.php');
                            }else{
                            require_once('bloques/home.php');
                            } ?>
                        <?php require_once('bloques/footer.php'); ?>
                        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
                        <script src="js/vendor/bootstrap.min.js"></script>
                        <script src="js/plugins.js"></script>
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
                        <script type="text/javascript">
                            $(document).ready(function(){
                            $(".loader").fadeOut("slow");
                            })
                        </script>
                </body>
            </html>
