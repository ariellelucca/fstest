<?php
get_header();
?>
<div class="container mt-5 mb-5">
    <div class="row">
        <main id="site-main">
            <header>
                <h2>Archive for: <?php echo get_the_archive_title(); ?></h2>
            </header>
            <?php get_template_part('loops/index-loop'); ?>
        </main>
    </div>
</div>
<?php
get_footer();
?>