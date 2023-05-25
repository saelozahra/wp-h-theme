<div class="slider" itemscope itemtype="http://schema.org/ImageGallery" >
    <div class="view">
      <div class="container1">
        
        
        
        
              
        
        <?php
		
		$loop_number = 0 ;
		$loop_number2 = 0 ;
        $args=array	( 
			// 'cat' => 'id', 
			'post_status' => 'publish', 
			'posts_per_page' => get_option('ts_sld_c_l') ,
			'category_name' => get_option('ts_slider1_cat')
        );
        $my_query = null;
        $my_query = new WP_Query($args);
        if( $my_query->have_posts() ) { 
			while ($my_query->have_posts()) : $my_query->the_post();  
			
			$loop_number = $loop_number + 1 ;
			
			?>
            
            
                
                
                
                <div class="slider_item_div" itemscope itemtype="http://schema.org/ImageObject"  id="sld<?php echo $loop_number ;?>"  data-active="on" data-number="<?php echo $loop_number ;?>"  >
						<img src="" data-address="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ) ?>" alt="<?php the_title(); ?>" width="800" height="400">
						<h1 itemprop="caption description"><span class="id-sld"> <?php the_ID(); ?> </span><a style="display:inline;" itemprop="contentUrl" href="<?php the_permalink(); ?>"  title="<?php the_title(); ?>"><?php the_title(); ?></a><br class="clear">
						<span class="lead"><?php the_excerpt(); ?> </span></h1>
                </div>
                    
							<?php
			endwhile;
        }
        wp_reset_query();  // Restore global post data stomped by the_post().
        ?>
        
        
        
        
        

        
        
        
      </div><!--container1-->
      
      
      <div class="view2" id="boxscroll" >
        <div class="container2 " >
        
              
        
        <?php
        $args=array	( 
			// 'cat' => 'id', 
			'post_status' => 'publish', 
			'posts_per_page' => get_option('ts_sld_c_l') ,
			'category_name' => get_option('ts_slider1_cat')
        );
        $my_query = null;
        $my_query = new WP_Query($args);
        if( $my_query->have_posts() ) { 
			while ($my_query->have_posts()) : $my_query->the_post();  
			$loop_number2 = $loop_number2 + 1 ;
			?>
            
            
                
                    <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ) ?>" itemprop="thumbnail" alt="sld<?php echo $loop_number2 ;?>" id="sldt<?php echo $loop_number2 ;?>" data-number="<?php echo $loop_number2 ;?>" >
                            
                    
							<?php
			endwhile;
        }
        wp_reset_query();  // Restore global post data stomped by the_post().
        ?>
        
        
        </div><!--container2--> 
      </div><!--view2--> 
    </div><!--view-->
    
    <div class="flash" id="fllft"></div>    <!--flash left-->
    <div class="flash" id="flrgt"></div>    <!--flash left--> 
    
  </div>  <!--slider-->
  
  
  