
  
  <aside class="tab1" itemtype="http://schema.org/WPAdBlock" itemscope="" >
    <div class="container-tab1">
      <ul class="tab-caption">
        <li data-li="1" data-active="off" > Top Headlines<img src="<?php bloginfo('template_url'); ?>/img/tab-shaddow1.png" alt="tab-shaddow1"></li>
        <li data-li="2" data-active="off" >Popular<img src="<?php bloginfo('template_url'); ?>/img/tab-shaddow1.png" alt="tab-shaddow1"></li>
        <li data-li="3" data-active="on" >Recent<img src="<?php bloginfo('template_url'); ?>/img/tab-shaddow1.png" alt="tab-shaddow1"></li>
      </ul>
      <!--tab-caption-->
      
      <div class="tab-body tab-scroll">
        <ol data-li="1" data-active="off"  >
          <li><a itemprop="url" href="content.html"  title="li"> 13 best features in iOS 8 David Pogue</a></li>
          <li><a itemprop="url" href="content.html"  title="li"> Meet the real Cate Blanchett Bobbi</a></li>
          <li><a itemprop="url" href="content.html"  title="li"> Is 60 too old to show your bra?</a></li>
          <li><a itemprop="url" href="content.html"  title="li"> 13 best features in iOS 8 David Pogue</a></li>
          <li><a itemprop="url" href="content.html"  title="li"> Meet the real Cate Blanchett Bobbi Brown</a></li>
          <li><a itemprop="url" href="content.html"  title="li"> Is 60 too old to show your bra?</a></li>
          <li><a itemprop="url" href="content.html"  title="li"> 13 best features in iOS 8 David Pogue </a></li>
          <li><a itemprop="url" href="content.html"  title="li"> Meet the real Cate Blanchett Bobbi</a></li>
          <li><a itemprop="url" href="content.html"  title="li"> Is 60 too old to show your bra?</a></li>
          <li><a itemprop="url" href="content.html"  title="li"> 13 best features in iOS 8 David Pogue</a></li>
          <li><a itemprop="url" href="content.html"  title="li"> 13 best features in iOS 8 David Pogue</a></li>
          <li><a itemprop="url" href="content.html"  title="li"> 13 best features in iOS 8 David Pogue</a></li>
          <li><a itemprop="url" href="content.html"  title="li"> 13 best features in iOS 8 David Pogue</a></li>

        </ol>
        <ol data-li="2" data-active="off" >
         
            <?php
            $args=array	( 
                // 'cat' => 'id', 
                'post_status' => 'publish', 
                'posts_per_page' => 20 ,
                'orderby' => 'comment_count',
                'category_name' => ''
            );
            $my_query = null;
            $my_query = new WP_Query($args);
            if( $my_query->have_posts() ) { 
                while ($my_query->have_posts()) : $my_query->the_post();  ?>
                
                    <li <?php post_class(); ?> ><a href="<?php the_permalink(); ?>"  title=" <?php the_time('M j/Y') ?> "> <?php the_title(); ?> </a></li>       
                
                                <?php
                endwhile;
            }
            wp_reset_query();  // Restore global post data stomped by the_post().
            ?>
            
        </ol>
        <ol data-li="3" data-active="on" >
			<?php if(have_posts()) : ?> 
            <?php while(have_posts()) : the_post(); ?>
				<li <?php post_class(); ?> ><a href="<?php the_permalink(); ?>"  title=" <?php the_time('M j/Y') ?> "> <?php the_title(); ?> </a></li>
            <?php endwhile; ?>
            <?php endif; ?>
              
        </ol>
      </div>      <!--tab-body--> 
      
    </div>    <!--container-tab1--> 
    
  </aside><!--tab1-->
  
  