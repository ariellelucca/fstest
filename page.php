<?php
get_header();
?>

    <main id="site-main">
        <?php if (front_page() || is_home()) { ?>
            <article class="container">
                <?php get_template_part('loops/search-results'); ?>
            </article>
            <?php } ?>
        <?php
        get_template_part('loops/page-content');
        ?>
    </main>

<?php
get_footer();
?>