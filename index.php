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
                
                <body id="<?php if(isset($_REQUEST['content'])){echo "back-content";}?>" class="back-home">
                    <div class="loader">
                        <img src="img/ajax-loader.gif" />
                    </div>
                    
                    <?php 
	                    if(!isset($_REQUEST['content'])){
                        require_once('bloques/headerhome.php');
                        }else{
                        require_once('bloques/header.php');
                        } 
	                    require_once('bloques/redes.php'); 
	                    ?>
	                <section class="wrap-content" style="padding-bottom: 30px; padding-top: 30px;">
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
                    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
                    <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
                    <script src="js/vendor/gmaps.js"></script>
                    <script src="js/plugins.js"></script>
                    <script src="js/vendor/owl.carousel.js"></script>
                    <script src="js/main.js"></script>
                    <script src="js/ekko-lightbox.js"></script>
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
                      


		
		<script type="text/javascript">
			$(document).ready(function ($) {

				// delegate calls to data-toggle="lightbox"
				$(document).delegate('*[data-toggle="lightbox"]:not([data-gallery="navigateTo"])', 'click', function(event) {
					event.preventDefault();
					return $(this).ekkoLightbox({
						onShown: function() {
							if (window.console) {
								return console.log('Checking our the events huh?');
							}
						},
						onNavigate: function(direction, itemIndex) {
							if (window.console) {
								return console.log('Navigating '+direction+'. Current item: '+itemIndex);
							}
						}
					});
				});

				//Programatically call
				$('#open-image').click(function (e) {
					e.preventDefault();
					$(this).ekkoLightbox();
				});
				$('#open-youtube').click(function (e) {
					e.preventDefault();
					$(this).ekkoLightbox();
				});

				$(document).delegate('*[data-gallery="navigateTo"]', 'click', function(event) {
					event.preventDefault();
					return $(this).ekkoLightbox({
						onShown: function() {
							var a = this.modal_content.find('.modal-footer a');
							if(a.length > 0) {
								a.click(function(e) {
									e.preventDefault();
									this.navigateTo(2);
								}.bind(this));
							}
						}
					});
				});

			});
		</script>
                </body>
            </html>
