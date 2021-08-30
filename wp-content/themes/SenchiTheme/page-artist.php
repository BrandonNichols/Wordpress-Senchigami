<?php /* Template Name: Artist */ ?>
<?php get_header();?>
<?php require __DIR__ . '/includes/teamData.php';?>
<?php require __DIR__ . '/includes/displayTeam.php';?>
<section class="Member-section">
    <h1>Artists</h1>
    <div class="Member-container artist-members">
    <?php displayTeam($artists);?>
    <?php //the_content()?>
    </div>
</section>
<?php get_footer();?>