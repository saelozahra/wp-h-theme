<aside class="most-comment">
    <h2>Most Commented :</h2>
    <ul>
     
        <?php
        $args=array	( 
			// 'cat' => 'id', 
			'post_status' => 'publish', 
			'posts_per_page' => 4 ,
			'orderby' => 'comment_count',
			'category_name' => ''
        );
        $my_query = null;
        $my_query = new WP_Query($args);
        if( $my_query->have_posts() ) { 
			while ($my_query->have_posts()) : $my_query->the_post();  ?>
            
                
                <li>
                	<a href="<?php the_permalink(); ?>"  title="By: <?php the_author(); ?> "> 
                        <?php if ( has_post_thumbnail() ) { the_post_thumbnail(array(55, 55)); }?>
                        <?php the_title(); ?>
                    </a>
                </li>

                          
			
							<?php
			endwhile;
        }
        wp_reset_query();  // Restore global post data stomped by the_post().
        ?>
        
        
        
      </ul>
</aside><!--most-comment-->
        