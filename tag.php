<?php
get_header();
?>
<div class="container mt-5 mb-5">
    <div class="row">
        <main id="site-main">
            <header>
                <h2>tagged: <?php echo single_tag_title(); ?></h2>
            </header>
            <?php get_template_part('loops/index-loop'); ?>
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