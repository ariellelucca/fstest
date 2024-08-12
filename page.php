<?php
get_header();
?>
<div class="container mt-5 mb-5">
    <div class="row">
        <main id="site-main" class="col-12 col-md-9">
            <?php if (is_front_page() || is_home()) { ?>
                <header id="searchResultsCount"></header>
                <article class="container">
                    <section id="searchResults"></section>
                </article>
                <?php }
                else {
                    get_template_part('loops/page-content');
                }
            ?>
        </main>
        <article class="col-12 col-md-3">
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