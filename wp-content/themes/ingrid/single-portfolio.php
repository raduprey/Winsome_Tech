<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package   ingrid
 * @copyright Copyright (c) 2015 Ashley Evans and Anna Moore
 * @license   GPL2
 */
get_header(); ?>

            <div id="primary" class="site-content">
              <div id="content" role="main">
                <?php while ( have_posts() ) : the_post();
                  $image_1 = get_field("image_1");
                  $image_2 = get_field("image_2");
                  $image_3 = get_field("image_3");
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
              </center>
              </div>
              
              <div class="portfolio-images">
              <center>
              <?php if($image_1) {
              	echo wp_get_attachment_image( $image_1, $size);
              } ?>
              <?php if($image_2) {
              	echo wp_get_attachment_image( $image_2, $size);
              } ?>
              <?php if($image_3) {
              	echo wp_get_attachment_image( $image_3, $size);
              } ?>
              </center>
              </div>
            </article>

         <?php endwhile; //end of the loop. ?>
     </div>
   </div>

<?php get_footer(); ?>