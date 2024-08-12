<?php
get_header();
?>
<div class="container mt-5 mb-5">
    <div class="row">
        <main id="site-main" class="col-12 col-md-8">
            <header>
                <h2>Category: <?php echo single_cat_title(); ?></h2>
            </header>
            <?php get_template_part('loops/search-results'); ?>
        </main>
        <article class="col-12 col-md-4">
            <?php
                if(is_active_sidebar('mainbody-widget-area-1')) { ?>
                    <section class="widget-area">
                        <?php dynamic_sidebar('mainbody-widget-area-1'); ?>
                </section>
                    <?php
                }
            ?>
        </article>
    </div>
</div>
<?php
get_footer();
?>