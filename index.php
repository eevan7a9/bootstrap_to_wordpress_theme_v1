<?php get_header();?>
<div class="container mt-5">
    <div class="blog-header">
        <h1 class="blog-title"><?php bloginfo('name');?></h1>
        <p class="lead blog-description"><?php bloginfo('description');?></p>
    </div>
</div>
  <main role="main" class="container">
    <div class="row">
        <div class="col-md-8 blog-main">
          <div class="blog-post">
            <?php if (have_posts()): ?>
              <?php while (have_posts()): the_post();?>
                <?php get_template_part('content', get_post_format()); ?>
		            <?php wp_link_pages(); ?>
	            <?php endwhile;?>
              <div class="mt-5">
	              <?php the_posts_pagination( array(
		              'mid_size' => 2,
		              'prev_text' => __( 'Back', 'textdomain' ),
		              'next_text' => __( 'Next', 'textdomain' ),
	              ) ); ?>
              </div>
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