$(document).ready(function(){
	$('.demo1').craftmap({
		cookies: false, // (bool) remember position 
		fullscreen: true, // (bool) fullscreen
		container: {
			name: 'imgContent' // (string) class name for an image container
		},
		image: {
			width: 2285, // (int) image width
			height: 1536, // (int) image height
			name: 'imgMap' // (string) class name for an image
		},
		map: {
			position: 'center'  // (string) map position after loading - 'X Y', 'center', 'top_left', 'top_right', 'bottom_left', 'bottom_right'
		},
		marker: {
			name: 'marker', // (string) class name for a marker
			center: true, // (bool) set true to pan the map to the center 
			popup: true, // (bool) set true to show a popup
			popup_name: 'popup', // (string) class name for popup
			onClick: function(marker, popup){},
			onClose: function(marker, popup){}
		},
		controls: {
			init: true, // (bool) set true to control a map from any place on the page
			name: 'controls', // (string) class name for controls container
			onClick: function(marker){}
		},
		preloader: {
			init: true, // (bool) set true to preload an image
			name: 'preloader', // (string) class name for a preload container
			onLoad: function(img, dimensions){}
		}
	});
	$(".controls span").toggle(function(){
	    $(".controls").animate({height:16},200);
	  },function(){
	    $(".controls").animate({height:300},200);
	 });

	$(".key thead td").toggle(function(){
	    $(".key").animate({height:26},200);
	  },function(){
	    $(".key").animate({height:160},200);
	 });

	$('.imageview').live("click",function(){
		$('.lightbox').html("<img src='images/locations/"+$(this).attr('data-image')+"'>");
		$('.modal').show();
		$('.lightbox').show();
	});

	$('.lightbox').live("click",function(){
		$('.lightbox').hide();
		$('.modal').hide();
	});

	$('.imgMap').click(function(e) {
	    var offset = $(this).offset();
	    var coordX = Math.floor(e.clientX - offset.left) - 16;
	    var coordY = Math.floor(e.clientY - offset.top) - 16;
	    $('.coords').html(coordX+", "+coordY);
	  });
});