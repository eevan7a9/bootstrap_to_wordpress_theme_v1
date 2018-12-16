<?php get_header(); ?>
<!--header -->
<style>
    .evn-cover-img{
        width: 100%;
        height: 500px;
        background: url('<?php echo get_theme_mod('showcase_photo', get_bloginfo('template_url').'/img/purple_light.jpg'); ?>');
        background-repeat: no-repeat;
        background-position: center;
        background-size: 100% 100%;
    }
</style>
<section class="evn-cover-img text-center">
	<div class="header_e7a9">
		<h1 class="font_e7a9"><?php echo get_theme_mod('showcase_heading', 'Purple Light') ?></h1>
		<h4 class="font_e7a9"><?php echo get_theme_mod('showcase_text', 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...') ?></h4>
	    <a href="<?php echo get_theme_mod('showcase_btn_url', 'http://test.com') ?>">
            <button class="btn btn_e7a9" style="background-color: <?php echo get_theme_mod('button_color', '#4a087c') ?>"><?php echo get_theme_mod('showcase_btn_text', 'More...') ?>
            </button>
        </a>
    </div>
</section>
<div class="container mt-4">
	<!-- Three columns of text below cover page -->
	<section class="boxes">
		<div class="row ">
			<div class="col-md-4">
				<div class="text-center">
					<?php if(is_active_sidebar('box1')) : ?>
					<div class="card">
						<div class="card-body">
                            <?php dynamic_sidebar('box1'); ?>
						</div>
					</div>
					<?php endif; ?>
				</div>
			</div><!-- /.col-lg-4 -->
			<div class="col-md-4">
				<div class="text-center">
					<?php if(is_active_sidebar('box2')) : ?>
					<div class="card">
						<div class="card-body">
                            <?php dynamic_sidebar('box2'); ?>
						</div>
					</div>
					<?php endif; ?>
				</div>
			</div><!-- /.col-lg-4 -->
			<div class="col-md-4">
				<div class="text-center">
					<?php if(is_active_sidebar('box3')) : ?>
					<div class="card">
						<div class="card-body">
                            <?php dynamic_sidebar('box3'); ?>
						</div>
					</div>
					<?php endif; ?>
				</div>
			</div><!-- /.col-lg-4 -->
		</div><!-- /.row -->
	</section>


    <hr class="featurette-divider">
</div>
<!-- footer -->
<?php get_footer(); ?>
