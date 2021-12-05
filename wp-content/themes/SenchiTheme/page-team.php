<?php /* Template Name: Team */ ?>
<?php get_header();?>
<?php require __DIR__ . '/includes/teamData.php';?>
<?php require __DIR__ . '/includes/displayTeam.php';?>
<section class="Member-section">
    <h1>Ambassadors</h1>
    <div class="Member-container team-members">
    <?php displayTeam($ambassadors);?>
    </div>
    <h1>VIPs</h1>
    <div class="Member-container team-members">
    <?php displayTeam($vips);?>
    </div>
    <h1>Staff</h1>
    <div class="Member-container team-members">
    <?php displayTeam($staff);?>
    </div>
    <h1>Management</h1>
    <div class="Member-container team-members">
    <?php displayTeam($management);?>
    </div>
    <?php get_template_part("/includes/section", "testimonials");?>
</section>
<?php get_footer();?>