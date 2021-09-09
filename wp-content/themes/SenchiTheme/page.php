<?php get_header(); ?>

<?php
if(have_posts()) {
	the_post();
	$postID = array(get_the_ID());

	$addClass = ['single-page'];
}
?>
<section class="<?php echo esc_attr(implode(' ', $addClass)); ?>">

    <div class="container">

	    <?php if (has_post_thumbnail()): ?>
            <figure class="featured-box">
                <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title_attribute(); ?>">
            </figure>
	    <?php endif; ?>

        <div class="wrapper">

	            <?php the_content(); ?>
        </div>
    </div>
</section>
<?php get_footer(); ?>
