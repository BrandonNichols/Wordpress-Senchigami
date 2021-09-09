<?php get_header(); ?>

<section class="page-hero">
    <div class="container">
	    <?php the_archive_title( '<h2 class="page-title">', '</h2>' ); ?>
    </div>
</section>

<div class="news-page">
    <div class="news-container">

        <section class="news">
            <div class="section-header">
                <div class="section-title normal">
                    <h2>Archive</h2>
                </div>
            </div>
        </section>
	    <?php get_sidebar(); ?>
    </div>
</div>

<?php get_footer(); ?>
