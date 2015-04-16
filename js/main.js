    $(document).ready(function(){
    $(".loader").fadeOut("slow");
    })
/* ==============================================
OWL CAROUSEL
=============================================== */
jQuery(document).ready(function (e) {
    var owl = e(".ca-list-items");
    owl.owlCarousel({
        itemsCustom: [
            [0, 1],
            [450, 2],
            [600, 2],
            [700, 3]
        ],
        navigation: false
    });
    e("#top-pro").owlCarousel({
        navigation: true
    });
});




$(document).ready(function () {
    $(".list-pro").owlCarousel({
        navigation: false,
		pagination: true,
		autoPlay: true,
        afterInit: function (elem) {
            var that = this
            that.owlControls.prependTo(elem)
        }
    });

});




$(document).ready(function () {

    var owl = $("#related-post");

    owl.owlCarousel({
        items: 3, //10 items above 1000px browser width
        itemsDesktop: [1000, 3], //5 items between 1000px and 901px
        itemsDesktopSmall: [900, 2], // betweem 900px and 400px
		itemsTablet: [400, 1], //2 items between 400 and 0
        pagination: false,
        itemsMobile: false // itemsMobile disabled - inherit from itemsTablet option
    });

    // Custom Navigation Events
    $(".next").click(function () {
        owl.trigger('owl.next');
    })
    $(".prev").click(function () {
        owl.trigger('owl.prev');
    })
    $(".play").click(function () {
        owl.trigger('owl.play', 1000); //owl.play event accept autoPlay speed as second parameter
    })
    $(".stop").click(function () {
        owl.trigger('owl.stop');
    })

});



/* Gallery carousel  */
$(document).ready(function () {

    $(".g-carousel").owlCarousel({
        pagination: false,
        navigation: true,
        navigationText: [
            "<i class='fa fa-angle-left'></i>",
            "<i class='fa fa-angle-right'></i>"
        ],
        afterInit: function (elem) {
            var that = this
            that.owlControls.prependTo(elem)
        }

    });

});

/*Google MAPS*/

$(document).ready(function(){
	  var url = GMaps.staticMapURL({
	    size: [580, 200],
	    lat: 4.6302347012861516,
	    lng: -74.12072724999996,
	    markers: [
	      {lat: 4.6302347012861516, lng: -74.12072724999996},
	    ]
	  });
	  $('<img/>').attr('src', url).appendTo('#map');
	});
	
/*Pop Up Modal Galería*/

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

