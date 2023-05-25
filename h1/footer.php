
<?php

	if ($_GET["text"] > ""):
	   wp_mail( get_option('admin_email'), $_GET["email"] , $_GET["name"] . " <br>" .  $_GET["subject"] . " <br>" . $_GET["text"] );
	endif
	
?>





<footer itemtype="http://schema.org/WPFooter" itemscope="" style="background-image:url('<?php echo get_option('ts_dl_bg_default'); ?>')  ; ">
<div class="container">
	
	
	
	<?php require_once( get_stylesheet_directory() . '/popular.php' ); ?>
  
  
  
  <aside class="last-media">
    <h2>lates video , photo , music : </h2>
    
    
    
    
    
    
    
    
    
    
    
    
                





		    
        <?php
        $args=array	( 
			// 'cat' => 'id', 
			'post_status' => 'publish', 
			'posts_per_page' => 9 ,
			'category_name' => ''
        );
        $my_query = null;
        $my_query = new WP_Query($args);
        if( $my_query->have_posts() ) { 
			while ($my_query->have_posts()) : $my_query->the_post();  ?>
            
                  <figure itemscope itemtype="http://schema.org/ImageObject"  <?php post_class(); ?> >
                  <a itemprop="contentUrl" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                      <?php if ( has_post_thumbnail() ) { the_post_thumbnail(array(100, 100)); }?>
                      <span class="over-foot"></span>
                  </a>
                  </figure>
                  
							<?php
			endwhile;
        }
        wp_reset_query();  // Restore global post data stomped by the_post().
        ?>
        

            
    
  


  
  </aside>  
  
  
  
  
  
  
  
    <aside class="fside1" itemprop="address" itemscope itemtype="http://schema.org/PostalAddress" >
    	<h2>Contact info :</h2>
        <ul>
        	<li class="fphone" itemprop="telephone"><span class="glyphicon glyphicon-phone"></span><a href="tel:<?php echo get_option('ts_phone'); ?>" title=" <?php echo get_option('ts_phone'); ?>">  <?php echo get_option('ts_phone'); ?> </a> </li>
            <li class="fmail" itemprop="email" ><span class="glyphicon glyphicon-envelope"></span> <a href="mailto:<?php if( get_option('ts_mail') > "" ){ echo get_option('ts_mail'); } else { echo get_option('admin_email');} ?>" title="MAIL"><?php if( get_option('ts_mail') > "" ){ echo get_option('ts_mail'); } else { echo get_option('admin_email');} ?></a>  </li>
            <li class="fgps" itemprop="streetAddress" ><span class="glyphicon glyphicon-map-marker"></span> <?php echo get_option('ts_address'); ?></li>
        </ul>
       
        <div class="cline"></div><!--cline-->
        
        <h2>Follow Us :</h2>
        <nav>
        	<a href="<?php bloginfo('rss2_url'); ?>" title="b" id="sb" ></a>
            <a href="<?php echo get_option('ts_FB'); ?>" title="in" id="sin" ></a>
            <a href="<?php echo get_option('ts_Google_plus'); ?>" title="g" id="sg" ></a>
            <a href="<?php echo get_option('ts_twitter'); ?>" title="t" id="st" ></a>
            <a href="<?php echo get_option('ts_Dribble'); ?>" title="p" id="sp" ></a>
            <a href="<?php echo get_option('ts_Pintrest'); ?>" title="tw" id="stw" ></a>
            <a href="<?php echo get_option('ts_Linked'); ?>" title="li" id="slin" ></a>
            <a href="<?php echo get_option('ts_skype'); ?>" title="sk" id="ssk" ></a>
        </nav>        
  
  	<form >
    	<input type="text" placeholder="Enter Your Email  For Newsletter" >
        <input type="submit" value="Submit">
    </form>
    </aside><!--fside1-->
    
    
    
</div><!--container-->  


<nav class="bottom-footer">
    <div class="container">
        <span class="copyright"><?php echo get_option('ts_footer_text'); ?></span>
         <span class="foot-nav-mnu"> 

            <?php wp_nav_menu( array( 'after' => 'nav' , 'link_before' => ' || ' , 'theme_location' => 'footer_menu', 'menu_class' => 'footer_menu_nav' ) ); ?>

        </span>
    </div>
</nav><!--bottom-footer-->


<section class="light-box">
<i class="close-lb" >X</i>
	<h1> MULTI MEDIA </h1>
    
    <video style="width:100%; height:100%;display:none;" src="" type="video/mp4" id="player1" poster="" controls preload="none"></video>
    
    <audio controls style="display:none;">
      <source src="" type="audio/ogg">
      <source src="" type="audio/mpeg">
		Your browser does not support the audio element.
    </audio>
</section>


</footer>








<div id="gallery" class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="pswp__bg"></div>

        <div class="pswp__scroll-wrap">

          <div class="pswp__container">
			<div class="pswp__item"></div>
			<div class="pswp__item"></div>
			<div class="pswp__item"></div>
          </div>

          <div class="pswp__ui pswp__ui--hidden">

            <div class="pswp__top-bar">

				<div class="pswp__counter"></div>

				<button class="pswp__button pswp__button--close" title="Close (Esc)"></button>

				<button class="pswp__button pswp__button--share" title="Share"></button>

				<button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>

				<button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>

				<div class="pswp__preloader">
					<div class="pswp__preloader__icn">
					  <div class="pswp__preloader__cut">
					    <div class="pswp__preloader__donut"></div>
					  </div>
					</div>
				</div>
            </div>


			<!-- <div class="pswp__loading-indicator"><div class="pswp__loading-indicator__line"></div></div> -->

            <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
	            <div class="pswp__share-tooltip">

	            </div>
	        </div>

            <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>
            <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
            <div class="pswp__caption">
              <div class="pswp__caption__center">
              </div>
            </div>
          </div>

        </div>


    </div>
    

  
          
          
<script src="<?php bloginfo('template_url'); ?>/js/owl.carousel.js" type="text/javascript" ></script> 
<script src="<?php bloginfo('template_url'); ?>/js/mCS.concat.js" type="text/javascript" ></script> 
<script src="<?php bloginfo('template_url'); ?>/js/placeholdem.min.js" type="text/javascript" ></script> 
<script src="<?php bloginfo('template_url'); ?>/js/jquery.ticker.js" type="text/javascript" ></script>
<script src="<?php bloginfo('template_url'); ?>/js/mediaelement-and-player.min.js" type="text/javascript" ></script> 
<script src="<?php bloginfo('template_url'); ?>/js/jquery.sticky.js" type="text/javascript" ></script> 
<script src="<?php bloginfo('template_url'); ?>/js/photoswipe.min.js" type="text/javascript" ></script>
<script src="<?php bloginfo('template_url'); ?>/js/photoswipe-ui-default.min.js" type="text/javascript" ></script>
<script src="<?php bloginfo('template_url'); ?>/js/script.js" type="text/javascript" ></script>







<?php wp_footer(); ?>



</body>
</html>