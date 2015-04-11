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
                <?php require_once('bloques/redes.php'); ?>
                <body class="<?php if(!isset($_REQUEST['content'])){
                    echo "back-home";
                }elseif ($_REQUEST['content']== 'productos' or 'contactenos' or 'info') {
                    echo "back-content";
                }
                else{
                    echo "back-home";
                }?>">
                    <div class="loader">
                        <img src="img/ajax-loader.gif" />
                    </div>
                    <?php require_once('bloques/header.php'); ?>
                    <?php if(!isset($_REQUEST['content']))
                        require_once('bloques/home.php');
                        }elseif($_REQUEST['content']=='productos'){
                        require_once('bloques/productos.php');
                        }elseif($_REQUEST['content']=='info'){
                        require_once('bloques/info.php');
                        }elseif($_REQUEST['content']=='contactenos'){
                        require_once('bloques/contactenos.php');
                        }else{
                        require_once('bloques/home.php');
                        } ?>
                    <?php require_once('bloques/footer.php'); ?>
                    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
                    <script src="js/vendor/bootstrap.min.js"></script>
                    <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
                    <script src="js/vendor/gmaps.js"></script>
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
                    <script>
                        $(document).ready(function(){
                          var url = GMaps.staticMapURL({
                            size: [715, 200],
                            lat: 4.6302347012861516,
                            lng: -74.12072724999996,
                            markers: [
                              {lat: 4.6302347012861516, lng: -74.12072724999996},
                            ]
                          });
                          $('<img/>').attr('src', url).appendTo('#map');
                        });
                      </script>
                </body>
            </html>
