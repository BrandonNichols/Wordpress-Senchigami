<?php require __DIR__ . '/includes/site-url.php';?>
<?php get_header(); ?>
<?php if (have_posts()) : the_post();
    $postID = array(get_the_ID()); ?>
    <section class="single-page">
        <div class="front-page">
            <?php //the_content();?>
            <?php get_template_part('includes/section', 'slider'); ?>
            <div class="spacer"></div>
            <?php get_template_part( 'includes/section', 'aboutus');?>
            <div class="spacer"></div>
            <?php get_template_part( 'includes/section', 'shop');?>
        </div>
    </section>
<?php endif; ?>
<?php get_footer(); ?>