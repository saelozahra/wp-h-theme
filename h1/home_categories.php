




<section class="categories" >
      <h1 class="caption"><span> categories </span></h1><!--caption-->
      

        <ul>
			<?php foreach (get_categories() as $cat) : ?>
                <li> <img src="<?php if (function_exists('z_taxonomy_image_url')) echo z_taxonomy_image_url($cat->term_id); ?>" alt="<?php echo $cat->cat_name; ?>">
                    <div class="hover"></div>
                      <A href="<?php echo get_category_link($cat->term_id); ?>" title="<?php echo $cat->cat_name; ?>" >
                        <h4><span class=" fa <?php echo str_replace("</p>","",str_replace("<p>","",category_description($cat->term_id))); ?>"></span><?php echo $cat->cat_name; ?></h4>
                      </A>
                </li>
            <?php endforeach; ?>
        </ul>
        
  </section>  <!--categories-->