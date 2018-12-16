<?php if(!is_single($post)): ?>
    <a href="<?php the_permalink();?>">
        <h2 class="blog-post-title mt-4">
        <?php the_title();?></h2>
    </a>
<?php else: ?>

    <h2 class="blog-post-title mt-4">
    <?php the_title();?></h2>
<?php endif; ?>
    <p class="blog-post-meta">
    <?php the_time("F j, Y g:i a");?>
        by
    <a href="<?php get_author_posts_url(get_the_author_meta('ID'));?>">
        <?php the_author();?>
    </a></p>
<?php if (has_post_thumbnail()): ?>
    <div class="post-thumbnail-cont">
        <?php the_post_thumbnail();?>
    </div>
<?php endif;?>
<?php if(is_single($post)): ?>
   <?php the_content(); ?>
<?php else: ?>
    <?php the_excerpt();?>
<?php endif; ?>