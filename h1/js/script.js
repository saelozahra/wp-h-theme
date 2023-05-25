$(document).ready(function(){



$(".nav2").sticky({ topSpacing: 0, center:true, className:"hey" });

 
   
$(".sub-nav-gallery").sticky({ topSpacing: 62, center:true,  className:"sub-nav-pined" });
    
 
$(".sng").owlCarousel({
 	lazyLoad : true,
	items : 4,
	itemsDesktop : [1300,4],
	itemsDesktopSmall : [980,4],
	pagination:false,
	navigation: true,
	navigationText: [
	"<span class='al'></span>",
	"<span class='ar'></span>"
	],
});
 
  
$('#js-news').ticker({
	controls: false,
	displayType: 'reveal',
	pauseOnItems: 1000,
	titleText: ''
});







/*scroll bar custom*/
	
$("#boxscroll").mCustomScrollbar({
	axis:"x",
	theme:"light-3",
	advanced:{autoExpandHorizontalScroll:true}
	
});
 	
$("#boxscrol2").mCustomScrollbar({
	axis:"x",
	theme:"light-3",
	advanced:{autoExpandHorizontalScroll:true}
	
});
  
$(".tab-scroll").mCustomScrollbar({
	theme:"light-3"
});
  
  
  
  
/*beautifull place holder*/

Placeholdem( document.querySelectorAll( '[placeholder]' ) );





/*Custom Player*/

$('.audio,.video').mediaelementplayer({
	features: ['playpause','progress','volume','sourcechooser','fullscreen']
});






	
	 /*tab script*/
	 
$(".tab-caption li").click(function(){
	
	$('.tab-caption li').attr("data-active","off") ;	
	$('.tab-caption li[data-li="'+ $(this).attr("data-li") +'"]').attr("data-active","on") ;	
	
	$('.tab-body ol').attr("data-active","off") ;	
	$('.tab-body ol[data-li="'+ $(this).attr("data-li") +'"]').attr("data-active","on") ;	
	 
});

 
 
 
 
 
 
 
 
 
 
/*slider script*/
  
  
  $(".slider_item_div:first").fadeIn("fast");
  

$(".slider .view .container1 div").each(function(){
	$(this).find("img").attr("src",$(this).find("img").attr("data-address"));
});
  
  
  var hamin = parseInt("1");
  
  $(".slider .view .container2 img").click(function(){
		var mored = "#sld" + $(this).attr('data-number');
		var hamin = parseInt($(this).attr('data-number'));
		
		$(".slider .container1 div").attr("data-active","off");
		$(".slider .container1 div").fadeOut(0);


						
		$(mored).fadeIn(0, function() {
			$(mored).find("h1 a").fadeIn("slow");
		});
			


		$(mored).attr("data-active","on");
		
			if( hamin == '1'){
				$("#fllft").fadeOut();
				$("#flrgt").fadeIn();
			}else if(hamin == $('.slider .container2 img').length ){
			
				$("#fllft").fadeIn();
				$("#flrgt").fadeOut();
			}else if(hamin < $('.slider .container2 img').length && hamin > '1' ){
			
				$("#fllft").fadeIn();
				$("#flrgt").fadeIn();
			}
  });
  
  
  
  $(".slider #fllft").click(function(){
	  if(parseInt($('.slider .container1 div[data-active="on"]').attr('data-number')) > '1' ){
		
		$("#fllft").fadeIn(0);
		var show_id=parseInt($('.slider .container1 div[data-active="on"]').attr('data-number'))-1;
		$(".slider .container1 div").fadeOut(0);
		var mored = "#sld" + show_id;
		$(".slider .container1 div").attr("data-active","off");
		$(mored).attr("data-active","on");
		$(mored).fadeIn(0, function() {
			$(mored).find("h1 a").fadeIn("slow");
		});
			if( show_id <= '1'){
				$("#fllft").fadeOut();
				$("#flrgt").fadeIn();
			}else if(show_id > '1' ){
				$("#fllft").fadeIn();
				$("#flrgt").fadeIn();
			}
	  }
  });
  

  
  $(".slider #flrgt").click(function(){
	  if( parseInt($('.slider .container1 div[data-active="on"]').attr('data-number')) < $('.slider .container2 img').length ){
		
		$("#fllft").fadeIn(0);
		var show_id=parseInt($('.slider .container1 div[data-active="on"]').attr('data-number'))+1;
		$(".slider .container1 div").fadeOut(0);
		var mored = "#sld" + show_id;
		$(".slider .container1 div").attr("data-active","off");
		$(mored).attr("data-active","on");
		$(mored).fadeIn(0, function() {
			$(mored).find("h1 a").fadeIn("slow");
		});
			if( show_id < $('.slider .container2 img').length ){
				$("#fllft").fadeIn();
			}else if(show_id == $('.slider .container2 img').length  ){
			
				$("#fllft").fadeIn();
				$("#flrgt").fadeOut();
			}
	  }
  });
  





  
  
  
   
 
 
 
 
  
 
 
 
 
 
 
 
/*galeery-slider script*/
  
  
  var hamin = parseInt("1");
  
  $(".slider-gallery .view .container2 .tile").click(function(){
	var mored = "#gsld" + $(this).attr('data-number');
		var hamin = parseInt($(this).attr('data-number'));
		
		$(".slider-gallery .container1 .sld-gal-li").attr("data-active","off");
		$(".slider-gallery .container1 .sld-gal-li").fadeOut(0);


						
		$(mored).fadeIn(0, function() {
			
		});
			
  });
  
  
  
  
  
 
 
 
 
 
 
/*headline-slider script*/
  

$(".headline-slider .view .container1 div").each(function(){
	$(this).find("img").attr("src",$(this).find("img").attr("data-address"));
});
  
  
  var hamin = parseInt("1");
  
  $(".headline-slider .view .container2 img").click(function(){
		var mored = "#thlsld" + $(this).attr('data-number');
		var hamin = parseInt($(this).attr('data-number'));
		
		$(".headline-slider .container1 div").attr("data-active","off");
		$(".headline-slider .container1 div").fadeOut(0);


						
		$(mored).fadeIn(0, function() {
			
		});
			


		$(mored).attr("data-active","on");
		
			if( hamin == '1'){
				$("#thlfllft").fadeOut();
				$("#thlflrgt").fadeIn();
			}else if(hamin == $('.headline-slider .container2 img').length ){
			
				$("#thlfllft").fadeIn();
				$("#thlflrgt").fadeOut();
			}else if(hamin < $('.headline-slider .container2 img').length && hamin > '1' ){
			
				$("#thlfllft").fadeIn();
				$("#thlflrgt").fadeIn();
			}
  });
  
  
  
  $(".headline-slider #thlfllft").click(function(){
	  if(parseInt($('.headline-slider .container1 div[data-active="on"]').attr('data-number')) > '1' ){
		
		$("#thlfllft").fadeIn();
		var show_id=parseInt($('.headline-slider .container1 div[data-active="on"]').attr('data-number'))-1;
		$(".headline-slider .container1 div").fadeOut(0);
		var mored = "#thlsld" + show_id;
		$(".headline-slider .container1 div").attr("data-active","off");
		$(mored).attr("data-active","on");
		$(mored).fadeIn(0);
			if( show_id <= '1'){
				$("#thlfllft").fadeOut();
				$("#thlflrgt").fadeIn();
			}else if(show_id > '1' ){
				$("#thlfllft").fadeIn();
				$("#thlflrgt").fadeIn();
			}
	  }
  });
  

  
  $(".headline-slider #thlflrgt").click(function(){
	  if( parseInt($('.headline-slider .container1 div[data-active="on"]').attr('data-number')) < $('.headline-slider .container2 img').length ){
		
		$("#thlfllft").fadeIn(0);
		var show_id=parseInt($('.headline-slider .container1 div[data-active="on"]').attr('data-number'))+1;
		$(".headline-slider .container1 div").fadeOut(0);
		var mored = "#thlsld" + show_id;
		$(".headline-slider .container1 div").attr("data-active","off");
		$(mored).attr("data-active","on");
		$(mored).fadeIn(0);
			if( show_id < $('.headline-slider .container2 img').length ){
				$("#thlfllft").fadeIn(0);
			}else if(show_id == $('.headline-slider .container2 img').length  ){
			
				$("#thlfllft").fadeIn(0);
				$("#thlflrgt").fadeOut(0);
			}
	  }
  });
  





  
  

  
  $(".thl-sld-tab li").click(function(){
		$(".thl-sld-tab li").removeClass("active-thl");
		$(this).addClass("active-thl");
  });
  













  
   

/*load more main*/ 

	
	
	
	
var heightesh = parseInt($(".recent-news .rni").height() );


$(".recent-news .rncontainer").height( heightesh * 6 );



if ( (screen.width < 1444) ) { 
    $(".recent-news .rncontainer").height( heightesh * 3 );
} 
	
	
$(".rni-loadmore").click(function(){

if ( (screen.width < 1444) ) { 

if( $(".recent-news .rncontainer").height() < $(".recent-news .rni").length *  $(".recent-news .rni").height() ){

	$(".recent-news .rncontainer").animate({height : "+=" + parseInt( ($(".recent-news .rni").outerHeight() * 2)) });

	$(".recent-news .rncontainer").css({"max-height" : parseInt( $(".recent-news .rni").length *  $(".recent-news .rni").height()) });
	
}else {
	$(".rni-loadmore").text("No More Image");	
}  

}
 
 
 
 
 

if ( (screen.width > 1444) ) { 

	if( $(".recent-news .rncontainer").height() < $(".recent-news .rni").length *  $(".recent-news .rni").height() ){
		$(".recent-news .rncontainer").animate({height : "+=" + ( ( parseInt( $(".recent-news .rni").outerHeight() + 4 ) * 2) ) });
		$(".recent-news .rncontainer").css({"max-height" : parseInt( $(".recent-news .rni").length *  ( $(".recent-news .rni").outerHeight() + 5 ) ) });
	}else {
		$(".rni-loadmore").text("No More Image");	
	} 
} 



  });  
   
   
 
 
 
 
 
 
 
 
 
 
 

$(window).resize(function(){
	
var heightesh = parseInt($(".recent-news .rni").height() );


$(".recent-news .rncontainer").height( heightesh * 6 );



if ( (screen.width < 1444) ) { 
    $(".recent-news .rncontainer").height( heightesh * 3 );
} 
	
	
$(".rni-loadmore").click(function(){

if ( (screen.width < 1444) ) { 

if( $(".recent-news .rncontainer").height() < $(".recent-news .rni").length *  $(".recent-news .rni").height() ){

	$(".recent-news .rncontainer").animate({height : "+=" + parseInt( ($(".recent-news .rni").outerHeight() * 2)) });

	$(".recent-news .rncontainer").css({"max-height" : parseInt( $(".recent-news .rni").length *  $(".recent-news .rni").height()) });
	
}else {
	$(".rni-loadmore").text("No More Image");	
}  

}
 
 
 
 
 

if ( (screen.width > 1444) ) { 

	if( $(".recent-news .rncontainer").height() < $(".recent-news .rni").length *  $(".recent-news .rni").height() ){
		$(".recent-news .rncontainer").animate({height : "+=" + ( ( parseInt( $(".recent-news .rni").outerHeight() + 4 ) * 2) ) });
		$(".recent-news .rncontainer").css({"max-height" : parseInt( $(".recent-news .rni").length *  ( $(".recent-news .rni").outerHeight() + 5 ) ) });
	}else {
		$(".rni-loadmore").text("No More Image");	
	} 
} 



  });  
   
   
 
 
});
	

      
$("header .tr").click(function(){
	 $(".nav2").slideToggle();	
});   

  



      
$(".nav2 ul li a[title='Home']").click(function(){
	 $(".slider,.recent-news,.topheadline,.categories,.tab1,.weather,.advertise").slideDown();	
	 $("body").removeClass('active-page');
	 $(".cat-page,.gallery").slideUp();
});   





  


      
$(".nav2 ul li a[title='Gallery']").click(function(){
	 $(".gallery").slideDown();	
	 $(".slider,.topheadline,.recent-news,.categories,.tab1,.weather,.advertise").slideUp();
});   









$(".slider a").click(function(){
	 $(".article").slideDown();	
	 $("body").addClass('active-page');
	 $(".slider,.topheadline,.recent-news,.categories").slideUp();
});   





$(".video-page").click(function(){
	 $("#first-container").slideUp();	
	 $(".gallery-page").slideDown();
});   



     
$(".slider .view2").width($("#first-container").width() - 10 );


$(window).resize(function(){
		$(".slider .view2").width($("#first-container").width() - 10 );
});
	

	
$(".tl-li").hover(function(){
   	$(this).find(".sub-nav").fadeIn();
	$(".tl-li").removeClass("nav2lihover");
	$(this).addClass("nav2lihover");
  }, function(){
    $(this).find(".sub-nav").fadeOut();
}); 		
	
 
	
$(".sub-nav-gallery").width($("body").width() );

$(".sub-nav-gallery").fadeOut(0);

$(window).resize(function(){
		$(".sub-nav-gallery").width($("body").width() );
});

		
//$(".gallery_mnu_li,.sub-nav-gallery").hover(function(){
//	$(".sub-nav-gallery").fadeIn(150, function() {
//		$(".gml-hide").hover(function(){
//				$(".sub-nav-gallery").slideUp(200);
//		});
//	});
//}); 		
	
	
$(".gallery_mnu_li,.sub-nav-gallery").hover(function(){
   	$(".sub-nav-gallery").fadeIn(100);
  }, function(){
    $(".sub-nav-gallery").fadeOut(100);
}); 		
								

				



 $(".owl-hd").owlCarousel({
 
autoPlay: 3000, //Set AutoPlay to 3 seconds
responsive:true,
lazyLoad : true,
items : 2,
itemsTablet: [600,2],
itemsMobile : [1199,3] ,
navigation: true,
pagination:false,
navigationText: [
"<img src='./img/rgt-btn.jpg' alt='rast' >",
"<img src='./img/lft-btn.jpg' alt='rast' >"
]
});







$(".top-weather").click(function(){
	$(".slide-weather").slideToggle("slow");
	$(this).toggleClass("manfi-weather");
});












  
  $(".lb-show").click(function(){
	  
		if( $(this).attr("itemtype") == 'http://schema.org/VideoObject'){
			
			$(".light-box").find("video").attr("src",$(this).attr("data-film"));
			$(".light-box").find("video").attr("poster",$(this).attr("data-poster"));
			$(".light-box").find("h1",$(this).attr("data-caption"));
			$(".light-box,.light-box video").fadeIn();
			
		}else if( $(this).attr("itemtype") == 'http://schema.org/AudioObject' ){
			
			$(".light-box").find("source").attr("src",$(this).attr("data-audio"));
			$(".light-box").find("h1",$(this).attr("data-caption"));
			$(".light-box,.light-box audio").fadeIn();
			
		}else{
			alert("Not Found Validate Media")
		}
		
  });
  

  
  $(".close-lb").click(function(){
		$(".light-box,.light-box audio,.light-box video").fadeOut();
  });
  




















































/*start photo swip*/




    (function() {

		var initPhotoSwipeFromDOM = function(gallerySelector) {

			var parseThumbnailElements = function(el) {
			    var thumbElements = el.childNodes,
			        numNodes = thumbElements.length,
			        items = [],
			        el,
			        childElements,
			        thumbnailEl,
			        size,
			        item;

			    for(var i = 0; i < numNodes; i++) {
			        el = thumbElements[i];

			        // include only element nodes 
			        if(el.nodeType !== 1) {
			          continue;
			        }

			        childElements = el.children;

			        size = el.getAttribute('data-size').split('x');

			        // create slide object
			        item = {
						src: el.getAttribute('href'),
						w: parseInt(size[0], 10),
						h: parseInt(size[1], 10),
						author: el.getAttribute('data-author')
			        };

			        item.el = el; // save link to element for getThumbBoundsFn

			        if(childElements.length > 0) {
			          item.msrc = childElements[0].getAttribute('src'); // thumbnail url
			          if(childElements.length > 1) {
			              item.title = childElements[1].innerHTML; // caption (contents of figure)
			          }
			        }


					var mediumSrc = el.getAttribute('data-med');
		          	if(mediumSrc) {
		            	size = el.getAttribute('data-med-size').split('x');
		            	// "medium-sized" image
		            	item.m = {
		              		src: mediumSrc,
		              		w: parseInt(size[0], 10),
		              		h: parseInt(size[1], 10)
		            	};
		          	}
		          	// original image
		          	item.o = {
		          		src: item.src,
		          		w: item.w,
		          		h: item.h
		          	};

			        items.push(item);
			    }

			    return items;
			};

			// find nearest parent element
			var closest = function closest(el, fn) {
			    return el && ( fn(el) ? el : closest(el.parentNode, fn) );
			};

			var onThumbnailsClick = function(e) {
			    e = e || window.event;
			    e.preventDefault ? e.preventDefault() : e.returnValue = false;

			    var eTarget = e.target || e.srcElement;

			    var clickedListItem = closest(eTarget, function(el) {
			        return el.tagName === 'A';
			    });

			    if(!clickedListItem) {
			        return;
			    }

			    var clickedGallery = clickedListItem.parentNode;

			    var childNodes = clickedListItem.parentNode.childNodes,
			        numChildNodes = childNodes.length,
			        nodeIndex = 0,
			        index;

			    for (var i = 0; i < numChildNodes; i++) {
			        if(childNodes[i].nodeType !== 1) { 
			            continue; 
			        }

			        if(childNodes[i] === clickedListItem) {
			            index = nodeIndex;
			            break;
			        }
			        nodeIndex++;
			    }

			    if(index >= 0) {
			        openPhotoSwipe( index, clickedGallery );
			    }
			    return false;
			};

			var photoswipeParseHash = function() {
				var hash = window.location.hash.substring(1),
			    params = {};

			    if(hash.length < 5) { // pid=1
			        return params;
			    }

			    var vars = hash.split('&');
			    for (var i = 0; i < vars.length; i++) {
			        if(!vars[i]) {
			            continue;
			        }
			        var pair = vars[i].split('=');  
			        if(pair.length < 2) {
			            continue;
			        }           
			        params[pair[0]] = pair[1];
			    }

			    if(params.gid) {
			    	params.gid = parseInt(params.gid, 10);
			    }

			    if(!params.hasOwnProperty('pid')) {
			        return params;
			    }
			    params.pid = parseInt(params.pid, 10);
			    return params;
			};

			var openPhotoSwipe = function(index, galleryElement, disableAnimation) {
			    var pswpElement = document.querySelectorAll('.pswp')[0],
			        gallery,
			        options,
			        items;

				items = parseThumbnailElements(galleryElement);

			    // define options (if needed)
			    options = {
			        index: index,

			        galleryUID: galleryElement.getAttribute('data-pswp-uid'),

			        getThumbBoundsFn: function(index) {
			            // See Options->getThumbBoundsFn section of docs for more info
			            var thumbnail = items[index].el.children[0],
			                pageYScroll = window.pageYOffset || document.documentElement.scrollTop,
			                rect = thumbnail.getBoundingClientRect(); 

			            return {x:rect.left, y:rect.top + pageYScroll, w:rect.width};
			        },

			        addCaptionHTMLFn: function(item, captionEl, isFake) {
						if(!item.title) {
							captionEl.children[0].innerText = '';
							return false;
						}
						captionEl.children[0].innerHTML = item.title +  '<br/><small>Photo: ' + item.author + '</small>';
						return true;
			        }
					
			    };

				var radios = document.getElementsByName('gallery-style');
				for (var i = 0, length = radios.length; i < length; i++) {
				    if (radios[i].checked) {
				        if(radios[i].id == 'radio-all-controls') {

				        } else if(radios[i].id == 'radio-minimal-black') {
				        	options.mainClass = 'pswp--minimal--dark';
					        options.barsSize = {top:0,bottom:0};
							options.captionEl = false;
							options.fullscreenEl = false;
							options.shareEl = false;
							options.bgOpacity = 0.85;
							options.tapToClose = true;
							options.tapToToggleControls = false;
				        }
				        break;
				    }
				}

			    if(disableAnimation) {
			        options.showAnimationDuration = 0;
			    }

			    // Pass data to PhotoSwipe and initialize it
			    gallery = new PhotoSwipe( pswpElement, PhotoSwipeUI_Default, items, options);

			    // see: http://photoswipe.com/documentation/responsive-images.html
				var realViewportWidth,
				    useLargeImages = false,
				    firstResize = true,
				    imageSrcWillChange;

				gallery.listen('beforeResize', function() {

					var dpiRatio = window.devicePixelRatio ? window.devicePixelRatio : 1;
					dpiRatio = Math.min(dpiRatio, 2.5);
				    realViewportWidth = gallery.viewportSize.x * dpiRatio;


				    if(realViewportWidth >= 1200 || (!gallery.likelyTouchDevice && realViewportWidth > 800) || screen.width > 1200 ) {
				    	if(!useLargeImages) {
				    		useLargeImages = true;
				        	imageSrcWillChange = true;
				    	}
				        
				    } else {
				    	if(useLargeImages) {
				    		useLargeImages = false;
				        	imageSrcWillChange = true;
				    	}
				    }

				    if(imageSrcWillChange && !firstResize) {
				        gallery.invalidateCurrItems();
				    }

				    if(firstResize) {
				        firstResize = false;
				    }

				    imageSrcWillChange = false;

				});

				gallery.listen('gettingData', function(index, item) {
				    if( useLargeImages ) {
				        item.src = item.o.src;
				        item.w = item.o.w;
				        item.h = item.o.h;
				    } else {
				        item.src = item.m.src;
				        item.w = item.m.w;
				        item.h = item.m.h;
				    }
				});

			    gallery.init();
			};

			// select all gallery elements
			var galleryElements = document.querySelectorAll( gallerySelector );
			for(var i = 0, l = galleryElements.length; i < l; i++) {
				galleryElements[i].setAttribute('data-pswp-uid', i+1);
				galleryElements[i].onclick = onThumbnailsClick;
			}

			// Parse URL and open gallery if it contains #&pid=3&gid=1
			var hashData = photoswipeParseHash();
			if(hashData.pid > 0 && hashData.gid > 0) {
				openPhotoSwipe( hashData.pid - 1 ,  galleryElements[ hashData.gid - 1 ], true );
			}
		};

		initPhotoSwipeFromDOM('.demo-gallery');

	})();

/* end photo swip */















	
   
}); /*end of document readey*/