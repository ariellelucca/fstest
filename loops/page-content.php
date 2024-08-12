<?php
/*
 * The Page Content Loop
 */
?>

<!-- Create the default Page content -->
<!-- You have to show the Page's title, content, and -->
<!-- create a Field Group using ACF and add at least two Fields to show in this template -->
<!-- You have to use Bootstrap to define those new fields style -->

<?php if(have_posts()): while(have_posts()): the_post(); ?>
    <article role="article" id="post_<?php the_ID()?>" <?php post_class("mb-5")?>>
        <header class="container py-5 text-center">
            <h1 class="display-2 my-5">
                <?php the_title()?>
            </h1>
        </header>

        <section class="wrap-md pb-5">
            <?php the_content()?>
            <?php wp_link_pages(); ?>
        </section>

        <section class="section-three py-4 border-top">
            <div class="row">
                <?php
                    $img = get_field('page_image_custom');
                    $select = get_field('page_select_custom');
                    $text = get_field('page_text_custom');
                    
                    if (!empty($img)) { ?>
                    <div class="col-12 col-md-3">
                        <p><strong>Image ACF</strong></p>
                        <img src="<?php echo $img['url'] ?>" class="img-thumbnail" alt="<?php echo get_the_title()?>" />
                        </p>
                    </div>
                    <?php
                    }
                    if (!empty($select)) { ?>
                        <div class="col-12 col-md-3">
                            <p><strong>Select ACF</strong></p>
                            <p><?php echo $select; ?></p>
                        </div>
                        <?php
                    }
                    if (!empty($text)) { ?>
                        <div class="col-12 col-md-3">
                            <p><strong>Text ACF</strong></p>
                            <p><?php echo $text ?></p>
                        </div>
                    <?php
                    }
                ?>
            </div>
            <!-- Show your content with the ACF fields here -->
        </section>
    </article>
<?php
  endwhile;
  else :
    get_template_part('loops/404');
  endif;
?>
