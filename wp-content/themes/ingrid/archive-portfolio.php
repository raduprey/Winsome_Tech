<?php

get_header(); ?>

            <div id="primary" class="site-content">
              <div id="content" role="main">
                <?php while ( have_posts() ) : the_post();
                  $image_1 = get_field("image_1");
                  $size = "full";
                  $services = get_field('services');
                  $site_link = get_field('site_link') 
                   ?>
              <article class="portfolio">
              <div id="portfolio-archive">
              <center>
               <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
               <p><strong><?php echo $site_link; ?></strong></p>
               <p><?php echo $services; ?></p>
              <?php the_excerpt(); ?>
              <p><strong><a href="<?php the_permalink(); ?>">View Full Project</a></strong></p>
              </center>
              </div>
              
              <div class="portfolio-images">
              <center>
              <?php if($image_1) {
              	echo wp_get_attachment_image( $image_1, $size);
              } ?>
              </center>
              </div>
            </article>

         <?php endwhile; //end of the loop. ?>
     </div>
   </div>

<?php get_footer(); ?>