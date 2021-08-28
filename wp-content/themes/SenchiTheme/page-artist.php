<?php /* Template Name: Artist */ ?>
<?php get_header();?>
<section class="Artist-section">
    <div class="Artist-container">
    <?php
        $artists = [
            "Pixzeles" => [
                "image" => "http://localhost/wordpress/wp-content/uploads/2021/08/Pixzeles-2-150x150.jpg",
                "socials" => [
                    "twitter" => "https://twitter.com/Pixzeles",
                    "twitch" => "https://www.twitch.tv/pixzelesart",
                    "instagram" => "https://www.instagram.com/pixzeles/",
                    "discord" => "https://discord.gg/QBx2SyV",
                    "tiktok" => "https://www.tiktok.com/@pixzeles"
                ]
            ],
            "Andre" => [
                "image" => "http://localhost/wordpress/wp-content/uploads/2021/08/andre-150x150.jpg",
                "socials" => [
                    "behance" => "https://www.behance.net/vkdesign42d600"
                ]
            ],
            "Yona" => [
                "image" => "http://localhost/wordpress/wp-content/uploads/2021/08/yona-150x150.png",
                "socials" => [
                    "artstation" => "https://www.artstation.com/yonasaura"
                ]
            ],
            "Knuxxy" => [
                "image" => "http://localhost/wordpress/wp-content/uploads/2021/08/knuxxy-150x150.png",
                "socials" => [
                    "twitter" => "https://twitter.com/Knuxyy"
                ]
            ],
            "Jhony" => [
                "image" => "http://localhost/wordpress/wp-content/uploads/2021/08/Jhony-150x150.png",
                "socials" => [
                    "instagram" => "https://www.instagram.com/jhonycaballeroart/"
                ]
            ],
            "Aereio" => [
                "image" => "http://localhost/wordpress/wp-content/uploads/2021/08/Aereio-2-edited-150x150.jpg",
                "socials" => [
                    "twitter" => "https://twitter.com/aereio_",
                    "twitch" => "https://www.twitch.tv/aereio_",
                    "instagram" => "https://www.instagram.com/aereio/",
                    "discord" => "https://discord.gg/SDSe6TJKDv",
                ]
            ],
        ];

        foreach ($artists as $p => $p_value):
            echo "<div class='artist-member'>";
            echo "<div class='image-wrapper'>";
            echo "<img src='" . $p_value["image"] . "' />";
            echo "</div>";
            echo "<p>" . $p . "</p>";
            echo "<div class='social-wrapper'>";
            foreach($p_value["socials"] as $social => $s_value):
                echo "<div class='" . $social . " round-social'>";
                echo "<a href='$s_value'>";
                echo "<i class='fab fa-$social fa-lg social-placement'></i>";
                echo "</a>";
                echo "</div>";
            endforeach;
            echo "</div>";
            echo "</div>";
        endforeach;
    ?>
    <?php //the_content()?>
    </div>
</section>
<?php get_footer();?>