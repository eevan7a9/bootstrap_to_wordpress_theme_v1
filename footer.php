
<section class="blog-footer bg-secondary">
  <footer class="container pr-1 pl-1 pt-1 pb-1">

    <div class="row footer-list">
        <?php if (is_active_sidebar('footer1')): ?>

	            <?php dynamic_sidebar('footer1') ?>


        <?php endif;?>
	    <?php if (is_active_sidebar('footer2')): ?>

			    <?php dynamic_sidebar('footer2') ?>

	    <?php endif;?>
	    <?php if (is_active_sidebar('footer3')): ?>

			    <?php dynamic_sidebar('footer3') ?>

	    <?php endif;?>
	    <?php if (is_active_sidebar('footer4')): ?>

			    <?php dynamic_sidebar('footer4') ?>

	    <?php endif;?>

<!---->
<!--      <div class="col-md-3 col-5">-->
<!--        <h4 class="text-light">Contacts</h4>-->
<!--        <small class="text-light">something here</small><br>-->
<!--        <small class="text-light">something here</small><br>-->
<!--        <small class="text-light">something here</small><br>-->
<!--      </div>-->
    </div>
      <hr class="mt-5">
          <p class="text-light">&copy; <?php echo date('Y') . " - ";
bloginfo('name'); ?></p>
      <p>
        <a href="#">Back to top</a>
      </p>
  </footer>
</section>

<?php wp_footer();?>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php bloginfo('template_url');?>/js/jquery-3.3.1.js"></script>
    <script src="<?php bloginfo('template_url');?>/js/popper.min.js"></script>
    <script src="<?php bloginfo('template_url');?>/js/bootstrap.js"></script>
    <script>
      Holder.addTheme('thumb', {
        bg: '#55595c',
        fg: '#eceeef',
        text: 'Thumbnail'
      });
    </script>
</body>
</html>
