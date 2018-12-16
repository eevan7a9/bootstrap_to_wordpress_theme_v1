<?php get_header();?>
  <main role="main" class="container">
    <div class="row">
        <div class="col-md-8 blog-main">
          <div class="blog-post">
            <?php if (have_posts()): ?>
              <?php while (have_posts()): the_post();?>
              <?php get_template_part('content', get_post_format($post)); ?>
              <?php endwhile;?>
            <?php else: ?>
              <p><?php __('No Posts Found');?></p>
            <?php endif;?>
          </div><!-- /.blog-post -->
          <nav class="blog-pagination">
            <a class="btn btn-outline-primary" href="#">Older</a>
            <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
          </nav>
        </div><!-- /.blog-main -->
      <!-- sidebar -->
      <?php get_sidebar(); ?>
    </div><!-- /.row -->
  </main><!-- /.container -->
<!--Footer -->
<?php get_footer();?>