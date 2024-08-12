<?php
get_header();
?>

    <main id="site-main" class="col-12 col-md-8">
        <?php if (is_front_page() || is_home()) { ?>
            <article class="container">
                <section id="searchResults"></section>
            </article>
            <?php }
            else {
                get_template_part('loops/page-content');
            }
        ?>
    </main>
    <aside class="col-12 col-md-4">
            test
    </aside>

<?php
get_footer();
?>