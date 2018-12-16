
<?php get_header(); ?>
  <main role="main" class="container">
    <div class="row">
        <div class="col-md-8 blog-main">
          <div class="blog-post">
            <?php if (have_posts()): ?>
              <?php while (have_posts()): the_post();?>
	          <h2 class="blog-post-title mt-4">
	            <?php the_title();?></h2>
	 
	          <p class="blog-post-meta">
	            <?php the_time("F j, Y g:i a");?>
	             by <?php the_author();?>
	          </p>
	          <?php if (has_post_thumbnail()): ?>
	            <div class="post-thumbnail-cont">
	              <?php the_post_thumbnail();?>
	            </div>
	          <?php endif;?>
                <?php the_content(); ?>
              <?php endwhile;?>
            <?php else: ?>
              <p><?php __('No Posts Found');?></p>
            <?php endif;?>
          </div><!-- /.blog-post -->
      

        </div><!-- /.blog-main -->
         <!-- sidebar -->
      <?php get_sidebar(); ?>
    </div><!-- /.row -->
  </main><!-- /.container -->
<!--Footer -->
<?php get_footer();?>