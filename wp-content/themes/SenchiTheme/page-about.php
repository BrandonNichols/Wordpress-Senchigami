<?php /* Template Name: About */ ?>
<?php get_header();?>
<section class="About-section">
    <img src="http://localhost/wordpress/wp-content/uploads/2021/09/Sempire-final.png" alt="Welcome to the sempire">
    <div class="About-container">
        <div class="About-us-text">
            <h1>About Us</h1>
            <p>
            Leverage agile frameworks to provide a robust synopsis for 
            high level overviews. Iterative approaches to corporate strategy 
            foster collaborative thinking to further the overall value proposition. 
            Organically grow the holistic world view of disruptive innovation via 
            workplace diversity and empowerment.
            </p>
        </div>
        <?php get_template_part("/includes/section", "testimonials");?>
    </div>
</section>
<?php get_footer();?>