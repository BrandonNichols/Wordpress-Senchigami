<?php get_header();?>
    <?php if(have_posts()): the_post(); $postID = array(get_the_ID());?>
        <section class="single-page">
            <div class="front-page">
                <h1><?php the_title()?></h1>
                <div class="section-slider">
                    <div class="slider">
                        <?php echo do_shortcode('[metaslider id="77"]');?>
                    </div>
                </div>
                <div class="spacer"></div>
                <div class="section-twitch-player">
                    <div class="twitch-player">
                        <?php echo do_shortcode('[getTwitchPlayer]');?>
                    </div>
                </div>
                <?php the_content();?>
            </div>
        </section>
    <?php endif; ?>
<?php get_footer();?>