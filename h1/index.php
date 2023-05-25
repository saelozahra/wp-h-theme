
	<?php get_header();?>

    
  

  
  
  
  <article class="art1" itemtype="http://schema.org/AboutPage" itemscope="">
    <div class="container">
        <ul id="js-news" class="js-hidden">
            
        <?php
        $args=array	( 
			// 'cat' => 'id', 
			'post_status' => 'publish', 
			'posts_per_page' => get_option('mag_n_v_n') ,
			'category_name' => get_option('mag_n_v_c')
        );
        $my_query = null;
        $my_query = new WP_Query($args);
        if( $my_query->have_posts() ) { 
			while ($my_query->have_posts()) : $my_query->the_post();  ?>
            	<li class="news-item">
                	<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                    	<?php the_title(); ?>
                    </a>
                </li>


		<?php
			endwhile;
        }
        wp_reset_query();  // Restore global post data stomped by the_post().
        ?>
        
        </ul>
    </div>    <!--container--> 
  </article>  <!--art1-->
  
  <img src="<?php bloginfo('template_url'); ?>/img/nav-btn.png" class="tr" alt="toggle responsive" >
</header>


<main >





<div class="container" id="first-container" >













 
  
  
  <section class="gallery">
  

     
     <nav class="gall-navbar">
     	<a href="#" title="title">All</a>
        <a href="#" title="Video" class="video-page">Video</a>
        <a href="#" title="title">Music</a>
        <a href="#" title="title">Image</a>
     </nav><!--gall-navbar-->
     
     <div class="gallery-continer">

        <div class="gal-li"  itemtype="http://schema.org/VideoObject" itemscope="" >
        <a itemprop="contentUrl" title="title" href="#">
            <div class="gal-img">
                <img itemprop="image" alt="rni-img" src="img/content/111 (1).jpg">
                                <div class="over-gal-li">
                	<span class="gal-com">3</span>
                    <span class="gal-like">22</span>
                    <span class="gal-see">313</span>
                 </div><!--over-gal-li-->
            </div><!--gal-img-->
                
            <h4>Walk wit me in the ...</h4>
        </a>
            <h6 class="name-time">By Stephan corls  :  Sep 14/2014</h6>
        </div><!--gal-li-->
        
        
        <div class="gal-li" itemtype="http://schema.org/AudioObject" itemscope="" >
        <a itemprop="contentUrl" title="title" href="#">
            <div class="gal-img">
                <img itemprop="image" alt="rni-img" src="img/content/111 (2).jpg">
                                <div class="over-gal-li">
                	<span class="gal-com">3</span>
                    <span class="gal-like">22</span>
                    <span class="gal-see">313</span>
                 </div><!--over-gal-li-->
            </div><!--gal-img-->
                
            <h4>Walk wit me in the ...</h4>
        </a>
            <h6 class="name-time">By Stephan corls  :  Sep 14/2014</h6>
        </div><!--gal-li-->
        
                
        
        <div class="gal-li" itemtype="http://schema.org/ImageObject" itemscope="" >
        <a itemprop="contentUrl" title="title" href="#">
            <div class="gal-img">
                <img itemprop="image" alt="rni-img" src="img/content/111 (3).jpg">
                                <div class="over-gal-li">
                	<span class="gal-com">33</span>
                    <span class="gal-like">22</span>
                    <span class="gal-see">313</span>
                 </div><!--over-gal-li-->
            </div><!--gal-img-->
                
            <h4>Walk wit me in the ...</h4>
        </a>
            <h6 class="name-time">By Stephan corls  :  Sep 14/2014</h6>
        </div><!--gal-li-->
        
       
        <div class="gal-li"  itemtype="http://schema.org/VideoObject" itemscope="" >
        <a itemprop="contentUrl" title="title" href="#">
            <div class="gal-img">
                <img itemprop="image" alt="rni-img" src="img/content/111 (4).jpg">
                                <div class="over-gal-li">
                	<span class="gal-com">3</span>
                    <span class="gal-like">232</span>
                    <span class="gal-see">33</span>
                 </div><!--over-gal-li-->
            </div><!--gal-img-->
                
            <h4>Walk wit me in the ...</h4>
        </a>
            <h6 class="name-time">By Stephan corls  :  Sep 14/2014</h6>
        </div><!--gal-li-->
        
        
        <div class="gal-li" itemtype="http://schema.org/AudioObject" itemscope="" >
        <a itemprop="contentUrl" title="title" href="#">
            <div class="gal-img">
                <img itemprop="image" alt="rni-img" src="img/content/111 (5).jpg">
                <div class="over-gal-li">
                	<span class="gal-com">32</span>
                    <span class="gal-like">232</span>
                    <span class="gal-see">33</span>
                 </div><!--over-gal-li-->
            </div><!--gal-img-->
                
            <h4>Walk wit me in the ...</h4>
        </a>
            <h6 class="name-time">By Stephan corls  :  Sep 14/2014</h6>
        </div><!--gal-li-->
        
                
        
        <div class="gal-li" itemtype="http://schema.org/ImageObject" itemscope="" >
        <a itemprop="contentUrl" title="title" href="#">
            <div class="gal-img">
                <img itemprop="image" alt="rni-img" src="img/content/111 (1).jpg">
                <div class="over-gal-li">
                	<span class="gal-com">3</span>
                    <span class="gal-like">22</span>
                    <span class="gal-see">313</span>
                 </div><!--over-gal-li-->
            </div><!--gal-img-->
                
            <h4>Walk wit me in the ...</h4>
        </a>
            <h6 class="name-time">By Stephan corls  :  Sep 14/2014</h6>
        </div><!--gal-li-->
        
        
        <div class="gal-li"  itemtype="http://schema.org/VideoObject" itemscope="" >
        <a itemprop="contentUrl" title="title" href="#">
            <div class="gal-img">
                <img itemprop="image" alt="rni-img" src="img/content/111 (1).jpg">
                                <div class="over-gal-li">
                	<span class="gal-com">3</span>
                    <span class="gal-like">22</span>
                    <span class="gal-see">313</span>
                 </div><!--over-gal-li-->
            </div><!--gal-img-->
                
            <h4>Walk wit me in the ...</h4>
        </a>
            <h6 class="name-time">By Stephan corls  :  Sep 14/2014</h6>
        </div><!--gal-li-->
        
        
        <div class="gal-li" itemtype="http://schema.org/AudioObject" itemscope="" >
        <a itemprop="contentUrl" title="title" href="#">
            <div class="gal-img">
                <img itemprop="image" alt="rni-img" src="img/content/111 (2).jpg">
                                <div class="over-gal-li">
                	<span class="gal-com">3</span>
                    <span class="gal-like">22</span>
                    <span class="gal-see">313</span>
                 </div><!--over-gal-li-->
            </div><!--gal-img-->
                
            <h4>Walk wit me in the ...</h4>
        </a>
            <h6 class="name-time">By Stephan corls  :  Sep 14/2014</h6>
        </div><!--gal-li-->
        
                
        
        <div class="gal-li" itemtype="http://schema.org/ImageObject" itemscope="" >
        <a itemprop="contentUrl" title="title" href="#">
            <div class="gal-img">
                <img itemprop="image" alt="rni-img" src="img/content/111 (3).jpg">
                                <div class="over-gal-li">
                	<span class="gal-com">33</span>
                    <span class="gal-like">22</span>
                    <span class="gal-see">313</span>
                 </div><!--over-gal-li-->
            </div><!--gal-img-->
                
            <h4>Walk wit me in the ...</h4>
        </a>
            <h6 class="name-time">By Stephan corls  :  Sep 14/2014</h6>
        </div><!--gal-li-->
        
       
        <div class="gal-li"  itemtype="http://schema.org/VideoObject" itemscope="" >
        <a itemprop="contentUrl" title="title" href="#">
            <div class="gal-img">
                <img itemprop="image" alt="rni-img" src="img/content/111 (4).jpg">
                                <div class="over-gal-li">
                	<span class="gal-com">3</span>
                    <span class="gal-like">232</span>
                    <span class="gal-see">33</span>
                 </div><!--over-gal-li-->
            </div><!--gal-img-->
                
            <h4>Walk wit me in the ...</h4>
        </a>
            <h6 class="name-time">By Stephan corls  :  Sep 14/2014</h6>
        </div><!--gal-li-->
        
        
        <div class="gal-li" itemtype="http://schema.org/AudioObject" itemscope="" >
        <a itemprop="contentUrl" title="title" href="#">
            <div class="gal-img">
                <img itemprop="image" alt="rni-img" src="img/content/111 (5).jpg">
                <div class="over-gal-li">
                	<span class="gal-com">32</span>
                    <span class="gal-like">232</span>
                    <span class="gal-see">33</span>
                 </div><!--over-gal-li-->
            </div><!--gal-img-->
                
            <h4>Walk wit me in the ...</h4>
        </a>
            <h6 class="name-time">By Stephan corls  :  Sep 14/2014</h6>
        </div><!--gal-li-->
        
                
        
        <div class="gal-li" itemtype="http://schema.org/ImageObject" itemscope="" >
        <a itemprop="contentUrl" title="title" href="#">
            <div class="gal-img">
                <img itemprop="image" alt="rni-img" src="img/content/111 (1).jpg">
                <div class="over-gal-li">
                	<span class="gal-com">3</span>
                    <span class="gal-like">22</span>
                    <span class="gal-see">313</span>
                 </div><!--over-gal-li-->
            </div><!--gal-img-->
                
            <h4>Walk wit me in the ...</h4>
        </a>
            <h6 class="name-time">By Stephan corls  :  Sep 14/2014</h6>
        </div><!--gal-li-->
        
        
        
     </div><!--gallery-continer-->
  </section><!--gallery-->

  
  
  
  
  
  
  
   
  


  
  
   
  
  
  
  
  
  
  
  
    
    <?php include('slider.php'); ?>
    
    
    
    <?php include('tab1.php'); ?>
    
    
    
    <?php include('topheadline.php'); ?>

    
    
    <?php include('recentnews.php'); ?>
    
  
  
  
  
  <aside class="weather" style="width: 33%;">
  	<div class="top-weather">Weather</div>
    <div class="slide-weather">
      <div class="emroz">
        <div class="hava">
          <div class="deg-hava">80</div>          <!--deg-hava--> 
          <!--<br>
          F    |   C
          &nbsp; &nbsp; &nbsp; &nbsp;
          fair--> </div>        <!--hava-->
        
        <div class="shahr"> paris </div>        <!--shahr--> 
        
      </div>      <!--emroz-->
      
      <div class="badan">
        <div class="today pre cloud"> today <br>
          90  70 </div>
        <!--today-->
        
        <div class="tomorrow pre sleet"> Tomorrow <br>
          90  70 </div>
        <!--tomorrow-->
        
        <div class="lastday pre sunny"> friday <br>
          90  70 </div>   <!--lastday--> 
        
      </div> <!--badan--> 
    </div><!--slide-weather-->
  </aside> <!--weather-->
  
  
  
  
  
  
  <aside class="advertise" style="width: 33%;" >
  
   <img src="<?php echo get_option('ts_ads1'); ?>" alt="ads" >
   
  </aside>  <!--advertise-->
  
  
  
  
  
  
  
   <?php include('home_categories.php'); ?>
 
</div> <!--container-->
</main>










    
<?php get_footer();?>
