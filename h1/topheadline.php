<section class="topheadline " itemtype="http://schema.org/CollectionPage" itemscope="" >

      <div class="tophead-content-ul">

      <h1 class="caption"><span><?php 
            if (get_option('ts_t_hl_t') > ""):
               echo  get_option('ts_t_hl_t') ;
			else:
				echo "top head lines" ;
            endif
			?></span></h1>   <!--caption--> 
      
      
      
      
      
      
      




		    
        <?php
        $args=array	( 
			// 'cat' => 'id', 
			'post_status' => 'publish', 
			'posts_per_page' => get_option('ts_t_hl_n') ,
			'category_name' => get_option('ts_t_hl_c')
        );
        $my_query = null;
        $my_query = new WP_Query($args);
        if( $my_query->have_posts() ) { 
			while ($my_query->have_posts()) : $my_query->the_post();  ?>
            
                
                <article  <?php post_class( array('tophead-content') ); ?>  itemtype="http://schema.org/NewsArticle" itemscope="" >
                    <div class="img-box-thl">
                    	<?php if ( has_post_thumbnail() ) { the_post_thumbnail(array(133, 133)); }?>
                    	<div class="over-tophead-content">
                        	<img src="<?php bloginfo('template_url'); ?>/img/ply.png" alt="ply">
                            </div>
                    </div><!--img-box-thl-->
                    <A href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" >
                    	<div class="h2" > <?php the_title(); ?> </div>
                    </A>
                    <div class="time"><?php the_time('M j/Y') ?></div>
                </article><!--tophead-content-->
                
                
                  
							<?php
			endwhile;
        }
        wp_reset_query();  // Restore global post data stomped by the_post().
        ?>
        

            

      
      </div><!--tophead-content-ul-->
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      <section class="headline-slider" itemscope itemtype="http://schema.org/MediaObject" >
        <ul class="thl-sld-tab">
          <li class="active-thl" >Music</li>
          <li >Video</li>
        </ul>
        <div class="view">
          <div class="container1">
            <div itemscope itemtype="http://schema.org/VideoObject"  id="thlsld1" class="lb-show1" style="display: block;" data-active="on" data-number="1" data-film="img/content/other.mp4" data-poster="img/content/main1.jpg" data-caption="Title Of Video In Light Box" >
            	<video style="width:100%;" src="img/content/other.mp4" type="video/mp4" id="player1" poster="img/content/main1.jpg" controls preload="none"></video>
                <!--<span class="ply-lb flash" ></span> -->
            </div>
            
            <div itemscope itemtype="http://schema.org/AudioObject" id="thlsld2" data-number="2" class="lb-show1" data-audio="img/content/sound.mp3" data-caption="Title Of Video In Light Box" >
             <video style="width:100%;" src="img/content/other.mp4" type="video/mp4" id="player1" poster="img/content/main.jpg" controls preload="none"></video>
              <!--<span class="ply-lb flash" ></span>--> </div>
          </div>
          <!--container1-->
          <div class="view2" >
            <div class="container2 " >
              <div id="thlsldt1" > <img src="img/content/stmb1.jpg" itemprop="thumbnail" alt="sld1" data-number="1" > <span class="ply"></span> </div>
              <div id="thlsldt2" > <img src="img/content/stmb2.jpg" itemprop="thumbnail" alt="sld2" data-number="2" > <span class="ply"></span> </div>
            </div>
            <!--container2--> 
          </div>
          <!--view2--> 
        </div>
        <!--view-->
        
        <div class="flash" id="thlfllft"></div> <!--flash left-->
        <div class="flash" id="thlflrgt"></div> <!--flash left-->
        
        
      </section><!--headline-slider--> 
      

    
  </section><!--topheadline-->
  
  
  