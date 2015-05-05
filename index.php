<?php require_once('includes/easily.php'); ?>
<!doctype html>
<!--[if lt IE 7]>      
<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="">
    <![endif]-->
    <!--[if IE 7]>         
    <html class="no-js lt-ie9 lt-ie8" lang="">
        <![endif]-->
        <!--[if IE 8]>         
        <html class="no-js lt-ie9" lang="">
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
            <![endif]-->
            <!--[if gt IE 8]><!--> 
            <html class="no-js" lang="es">
                <!--<![endif]-->
                <?php require_once('bloques/head.php'); ?>
                <body id="<?php if(isset($_REQUEST['content'])){echo "back-content";}else{echo "vegashome";}?>" class="back-home">
                    <div class="loader">
                        <img src="img/ajax-loader.gif" />
                    </div>
                    <?php 
	                    require_once('bloques/header.php');
						//require_once('bloques/redes.php'); 
	                ?>
	                <section class="wrap-content">
						<?php
		                    if(!isset($_REQUEST['content'])){
	                        require_once('bloques/home.php');
	                        }elseif($_REQUEST['content']=='productos'){
	                        require_once('bloques/productos.php');
	                        }elseif($_REQUEST['content']=='info'){
	                        require_once('bloques/info.php');
	                        }elseif($_REQUEST['content']=='contactenos'){
	                        require_once('bloques/contactenos.php');
	                        }else{
	                        require_once('bloques/home.php');
	                        } 
	                        ?>
                    </section>  
                    <?php require_once('bloques/footer.php'); ?>
					<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
					<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/jquery.validate.js"></script>  
					<script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
					<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
					<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
					<script src="js/vendor/gmaps.js"></script>
					<script src="js/vendor/owl.carousel.js"></script>
					<script src="js/custom.js"></script>
					<script src="js/bootbox.js"></script>
					<script src="js/ekko-lightbox.js"></script>
					<script src="js/main.js"></script>
					<script src="js/vegas/vegas.js"></script>
					
					<script >
						$('body#vegashome').vegas({
						    overlay: "js/vegas/overlays/01.png",
						    slides: [
						        { src: 'img/fondo.jpg' },
						        { src: 'img/fondo1.jpg' }
						    ]
						   
						});
					</script>
				</body>
			</html>
