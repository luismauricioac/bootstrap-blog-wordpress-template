<?php get_header(); ?>

      <div class="row">

        <div class="col-sm-8 blog-main">
		
			<?php if (have_posts()) :?>
			<?php while (have_posts()) : the_post();?>
			
			  <div class="blog-post">
				<h2 class="blog-post-title">
					<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
						<?php the_title();?>
					</a>
				</h2>
				<p class="blog-post-meta">January 1, 2014 by <a href="#"><?php the_author_meta('first_name'); ?> <?php the_author_meta('last_name'); ?></a></p>

				<?php the_content();?>
			  </div><!-- /.blog-post -->
			  
			<?php endwhile; ?>			 

			  <nav>
				<ul class="pager">
				  <li><a href="#">Previous</a></li>
				  <li><a href="#">Next</a></li>
				</ul>
			  </nav>
			<?php endif; ?>

        </div><!-- /.blog-main -->

        <?php get_sidebar(); ?>

      </div><!-- /.row -->

   <?php get_footer(); ?>