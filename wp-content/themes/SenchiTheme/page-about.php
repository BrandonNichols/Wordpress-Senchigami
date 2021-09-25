<?php /* Template Name: About */ ?>
<?php require __DIR__ . '/includes/site-url.php';?>
<?php get_header();?>
<section class="About-section">
    <img src="<?php echo $site?>wp-content/uploads/2021/09/Sempire-final.png" alt="Welcome to the sempire">
    <div class="About-container">
        <div class="About-us-text">
            <h3>Senchigami Royals</h3>
            <p>With the Senchigami Royal program we believe in offering true value to any 
                content creator that we bring aboard to the team. We want to be an 
                organization that is known for creating a long lasting community as 
                well as taking care of its creators. When becoming a Senchigami Royal 
                you have access to a variety of benefits that will make your brand stronger.</p>
            <h3>Merchandise Development</h3>
            <p>Each Senchigami Royal member gets the opportunity to work with many of the 
                talented freelance artists that we have collaborated with and create their 
                very own line of merch. Senchigami will also serve as a platform for merchandise 
                hosting as well as handle the marketing of the product.</p>
            <h3>Content Guidance</h3>
            <p>With over a decade of experience in the content creation space. 
                The Senchigami management team are here to guide you in reaching your goals 
                and expanding your digital footprint to newer audiences </p>
            <h3>Brand Development</h3>
            <p>Whether it is Twitch,YouTube,Twitter or even TikTok. 
                We will collaborate with you in creating a unique content plan that will further 
                develop your brand in any direction you wish to pursue</p>
            <h3>Free Merchandise</h3>
            <p>At its core Senchigami is an apparel brand. 
                Our creators get to choose from a variety of unique styles and designs 
                that we will send to them at no cost.</p>
            <h3>Discount Code</h3>
            <p>All Senchigami creators will receive their own creator code that will give 
                them the opportunity to receive revenue from each sale made from Senchigami 
                products</p>
            <h3>24/7 support</h3>
            <p>If you have any questions,comments, or concerns The CEO is always ready to address any issue. So reach out over discord whenever you like.
Interested in joining an amazing group of content creators who are committed to being better and reaching their goals?
Apply at: info@senchigami.com or DM us on Twitter @Senchigami</p>
        </div>
        <?php get_template_part("/includes/section", "testimonials");?>
    </div>
</section>
<?php get_footer();?>