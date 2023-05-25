<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title><?php bloginfo('name'); wp_title(); ?></title>

<meta name="description" content="<?php if ( is_single() ) {
	single_post_title('', true); 
} else {
	bloginfo('name'); echo " - "; bloginfo('description');
}
?>" />
<link rel="shortcut icon" href="<?php echo get_option('ts_favicon') ?>" />

<link href="<?php bloginfo('template_url'); ?>/css/normalize.css" rel="stylesheet" type="text/css">
<link href="<?php bloginfo('template_url'); ?>/css/gly.css" rel="stylesheet" type="text/css">
<link href="<?php bloginfo('template_url'); ?>/css/owl.carousel.css" rel="stylesheet" type="text/css">
<link href="<?php bloginfo('template_url'); ?>/css/owl.theme.css" rel="stylesheet" type="text/css">
<link href="<?php bloginfo('template_url'); ?>/css/owl.transitions.css" rel="stylesheet" type="text/css">
<link href="<?php bloginfo('template_url'); ?>/css/photoswipe.css" rel="stylesheet" type="text/css">
<link href="<?php bloginfo('template_url'); ?>/css/default-skin.css" rel="stylesheet" type="text/css">
<link href="<?php bloginfo('template_url'); ?>/css/mediaelementplayer.css" rel="stylesheet" type="text/css">
<link href="<?php bloginfo('template_url'); ?>/css/mcs.css" rel="stylesheet" type="text/css">
<link href="<?php bloginfo('template_url'); ?>/css/ticker-style.css" rel="stylesheet" type="text/css">
<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" type="text/css">

<link href="<?php bloginfo('template_url'); ?>/css/190.css" rel="stylesheet" type="text/css">
<link href="<?php bloginfo('template_url'); ?>/css/360.css" rel="stylesheet" type="text/css">
<link href="<?php bloginfo('template_url'); ?>/css/550.css" rel="stylesheet" type="text/css">
<link href="<?php bloginfo('template_url'); ?>/css/700.css" rel="stylesheet" type="text/css">
<link href="<?php bloginfo('template_url'); ?>/css/1200.css" rel="stylesheet" type="text/css">
<link href="<?php bloginfo('template_url'); ?>/css/1444.css" rel="stylesheet" type="text/css">

<script src="<?php bloginfo('template_url'); ?>/js/jquery.js" type="text/javascript" ></script>
</head>

<body  <?php body_class(); ?> itemtype="http://schema.org/WebPage" itemscope="" >
<header itemtype="http://schema.org/WPHeader" itemscope="" >
  <nav class="nav1">
  <div class="container">
      <a href="<?php bloginfo('rss2_url'); ?>" title="rss"></a> 
      <a href="<?php echo get_option('ts_FB'); ?>" title="face"></a> 
      <a href="<?php echo get_option('ts_Google_plus'); ?>" title="google"></a> 
      <a href="<?php echo get_option('ts_twitter'); ?>" title="twitter" ></a> 
      <a href="<?php echo get_option('ts_Dribble'); ?>" title="dribble" ></a>
      
      <div class="sin-sup">
          <a href="<?php bloginfo('url'); ?>/wp-login.php" title="Login" >Login</a> 
          <a href="<?php bloginfo('url'); ?>/wp-login.php?action=register" title="SignUp" >SignUp</a>
          
      </div><!--sin-sup-->
  
  </div><!--container-->
  
  </nav>
  <div class="container">
      <a href="<?php bloginfo('url'); ?>" title="Home" class="logo">
      	<img src="<?php if(get_option('ts_logo') > ""){ echo get_option('ts_logo');} else {bloginfo('template_url');  ?>/img/logo.png" alt="<?php bloginfo('title'); } ?>" >
      </a>
      <form method="get" action="<?php bloginfo('url'); ?>">
        <input type="search" placeholder="Keywords" name="search">
        <input type="submit" value="Search">
      </form>
  </div><!--container-->
  
  
  
  
  
<!--  <nav class="nav2">
    <ul class="container" itemtype="http://schema.org/SiteNavigationElement" itemscope="" >
      <li class="tl-li gml-hide" ><a itemprop="url" href="index.html" title="Home">Home</a></li>
      <li class="tl-li gml-hide" ><a itemprop="url" href="#" title="Categorise">Categorise</a>
          <ul class="sub-nav">
          		<li><a href="category.html" title="sub-nav">CAT</a></li>
                <li><a href="category.html" title="sub-nav">CAT1</a></li>
                <li><a href="category.html" title="sub-nav">CAT2</a></li>
                
          </ul>
      </li>
      <li class="tl-li gallery_mnu_li"  ><a itemprop="url" href="#" title="Gallery">Gallery</a>      </li>
      <li class="tl-li gml-hide" ><a itemprop="url" href="#" title="Features">Features</a></li>
      <li class="tl-li gml-hide" ><a itemprop="url" href="about.html" title="About">About</a></li>
      <li class="tl-li gml-hide" ><a itemprop="url" href="contact.html" title="Contact">Contact</a></li>
    </ul>
  </nav>-->
  
  
  
  
  
          
  
  
      <?php wp_nav_menu( array( 'theme_location' => 'header_menu','container_class' => 'nav2',	'menu_class'      => 'container', 'container_id' => 'main-nav' ) ); ?>

  
  
  
  
  
  
  
  
  
  
  
  
  <div class="sub-nav-gallery" >


	<div class="container sng">







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
                <h6 class="time">Sep 14/2014</h6>
        </a>
        
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
           <h6 class="time">Sep 14/2014</h6>
        </a>
         
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
        <h6 class="time">Sep 14/2014</h6>
        </a>
           
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
           <h6 class="time">Sep 14/2014</h6>
        </a>
           
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
         <h6 class="time">Sep 14/2014</h6>
        </a>
          
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
          <h6 class="time">Sep 14/2014</h6>
        </a>
           
        </div><!--gal-li-->
        
        
        
     
     
  </div><!--end slider menu-->   
     
     
        
  </div><!--sub-nav-gallery-->
          
          
          

  
  
  
  
  
  