<?php
    function displayTeam($members){
        foreach ($members as $p => $p_value):
            echo "<div class='member'>";
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
    }