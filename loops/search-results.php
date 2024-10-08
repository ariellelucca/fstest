<?php
/*
 * The Search Results (Main Header and) Loop
 */

 if (have_posts()) :
    while (have_posts()) :
        the_post(); ?>
        <div class="card mb-3">
            <div class="row g-0">
                <div class="col-md-4">
                    <?php
                    if (!empty(get_the_post_thumbnail_url())) {
                        echo '<img src="'.get_the_post_thumbnail_url(get_the_ID(), 'img_thumbnail').'" class="img-thumbnail" alt="'.get_the_title().'">';
                    }
                    else {
                        echo '<img src="'.get_stylesheet_directory_uri().'/theme/img/placeholder.png" class="img-thumbnail" alt="'.get_the_title().'">';  
                    }
                ?>
                </div>
                <div class="col-md-8">
                <div class="card-body">
                    <span><i class="bi bi-shield"></i> <?php echo get_the_category_list(','); ?></span>
                    <h5 class="card-title"><?php echo get_the_title() ?></h5>
                    <p class="card-text">
                        <?php 
                            if (!empty(get_the_excerpt())) {
                                echo wp_trim_words(get_the_excerpt(), 20);
                            }
                            if (!empty(get_the_content())) {
                                echo wp_trim_words(get_the_content(), 20);
                            }
                            ?>    
                    </p>
                    <a href="<?php echo get_the_permalink(get_the_ID()) ?>" class="link-underline-primary" name="<?php echo esc_attr(get_the_title()); ?>" aria-label="<?php echo esc_attr(get_the_title()); ?>">Continue reading <i class="bi bi-arrow-right"></i></a>
                    <p class="card-text">
                        <!-- Date -->
                        <small class="text-body-secondary"><i class="bi bi-calendar3"></i> 
                            <?php echo get_the_date( 'F j, Y' ) ?>
                            (updated <?php echo get_the_modified_date(); ?>)
                        </small>
                        <!-- Author -->
                        <small class=""><i class="bi bi-person-circle"></i>
                            <?php echo the_author_posts_link(get_the_author_ID(get_the_ID())); ?>
                        </small>
                        <!-- Comments -->
                        <small class="">
                            <i class="bi bi-chat-dots"></i>
                            <?php echo sprintf(_n('%s comment', '%s comments', get_comments_number(get_the_id())), get_comments_number(get_the_id())); ?>
                        </small>
                    </p>
                </div>
                </div>
            </div>
        </div>

    <?php
    endwhile; endif;   
?>