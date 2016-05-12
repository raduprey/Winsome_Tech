<?php get_header(); ?>


                     <section class="featured-work">
	                     <div class="site-content">

			               <ul class="homepage-featured-work"><center>
                             <h3> Featured Work</h3>

			               <?php query_posts('posts_per_page=1&post_type=portfolio'); ?>
			                <?php while ( have_posts() ) : the_post();
			                $image_1 = get_field("image_1");
			                $size = "full";
			             ?>
                          <figure>
                          <?php echo wp_get_attachment_image($image_1, $size); ?>
                          </figure>

                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <?php endwhile; //end of the loop ?>
                        <?php wp_reset_query(); //resets the altered query back to orginal ?>
                        </center>
                        </ul>
                        </div>
                        </section>

      <?php get_footer(); ?>