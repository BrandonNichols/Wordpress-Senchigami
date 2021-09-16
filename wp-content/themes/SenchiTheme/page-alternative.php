<?php /* Template Name: Alternative */ ?>
<?php get_header();?>
<section class="alternative-section">
    <!-- <div class= "hero-image <?php
        // if(is_page("vintrolicity")){
        //     echo "vintrolicity";
        // } elseif(is_page("avioverse")){
        //     echo "avioverse";
        // }
    ?>"
    ></div> -->
    <img class="hero-image" src=<?php
        if(is_page("vintrolicity")){
            echo "http://localhost/wordpress/wp-content/uploads/2021/09/Vintrolicity.png";
        } elseif(is_page("avioverse")){
            echo "http://localhost/wordpress/wp-content/uploads/2021/09/Avioverse.png";
        }
    ?>>
    <div class="senchi-alternative-container">
        <div class="about-us-alternative-text">
            <h1>About Us</h1>
            <p class=<?php if(is_page("vintrolicity")): echo "show"; else: echo ""; endif?>>
            Vintrolicity is Senchigami’s Valorant news show, with weekly shorts and episodes covering the critical news coming from the world of Valorant. 
            Made by players for players, Vintrolicity is hosted by Senchigami Partner Veluxe, and written by Partner Jackson. 
            You can find Vintrolicity on Youtube and soon on Senchigami’s Twitter and TikTok feeds.
            </p>
            <p class=<?php if(is_page("avioverse")): echo "show"; else: echo ""; endif?>>
            Avioverse is Senchigami’s newest endeavour, a platform for sharing and collaborating on music for the hottest independent artists on the internet. 
            Here, musicians can find like-minded collaborators to make their production dreams come true. 
            To see music made by Avioverse artists, check out our YouTube Channel Here:
            </p>
        </div>
        <section class="alternative-videos">
            <iframe class=<?php if(is_page("vintrolicity")): echo "show"; else: echo ""; endif?>
            width="560" height="315" src="https://www.youtube.com/embed/DImAp7aOyVY" 
            title="YouTube video player" frameborder="0" 
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
            allowfullscreen></iframe>
            
            <iframe class=<?php if(is_page("avioverse")): echo "show"; else: echo ""; endif?>
            width="560" height="315" 
            src="https://www.youtube.com/embed/6HNUUyJRTE4" 
            title="YouTube video player" frameborder="0" 
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
            allowfullscreen></iframe>
        </section>
        <h2>SHOP NOW</h2>
    </div>
    <?php get_template_part("/includes/section", "shop");?>
</section>
<?php get_footer();?>