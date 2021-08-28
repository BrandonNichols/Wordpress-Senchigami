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
            <h2 class="partner-section-title">Senchigami Partners</h2>
            <img class="partners" src="http://localhost/wordpress/wp-content/uploads/2021/08/threadica.png"/>
            <div class="spacer"></div>
            <?php get_template_part( 'includes/section', 'shop');?>
            <div class="spacer"></div>
        </div>
    </section>
<?php endif; ?>
<?php get_footer(); ?>