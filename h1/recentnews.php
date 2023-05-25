<section class="recent-news">
  
    <h1 class="caption"><span> Recent News </span></h1> <!--caption-->
      
    <div class="rncontainer">
		<?php if(have_posts()) : ?> 
        <?php while(have_posts()) : the_post(); ?>
      
            <div class="rni"> 
                <a href="<?php the_permalink(); ?>"  title="<?php the_title(); ?>"> 
                	<?php if ( has_post_thumbnail() ) { the_post_thumbnail(array(180, 180)); }?>
                    <h3><?php the_title(); ?> </h3>
                </a>
                <h4><?php the_excerpt(); ?> </h4>
                <h6 class="time"><?php the_time('M j/Y') ?></h6>
            </div>      <!--rni--> 
        <?php endwhile; ?>
        <?php endif; ?>
          
      
    </div><!--rncontainer-->
    
    <button class="rni-loadmore">Load more . . . </button>
 
  </section>  <!--Recent news -->
  
   