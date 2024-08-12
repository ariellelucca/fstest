<?php
/**
 * The searchform.php template.
 *
 * Used any time that get_search_form() is called.
 *
 * @link https://developer.wordpress.org/reference/functions/wp_unique_id/
 * @link https://developer.wordpress.org/reference/functions/get_search_form/
 *
 * @package WordPress
 */

$unique_id = wp_unique_id( 'search-form-' );
$aria_label = ! empty( $args['aria_label'] ) ? 'aria-label="' . esc_attr( $args['aria_label'] ) . '"' : '';
?>

<form class="d-flex"
      role="search"
    <?php echo $aria_label; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- Escaped above. ?>
      method="get"
      id="searchHome"
      action="<?php echo home_url( '/' ); ?>"
>
    <div class="input-group">
      <input type="text" name="s" id="search-term" class="form-control" placeholder="Search for..." aria-label="Search term" aria-describedby="search-term">
      <button type="submit" class="input-group-text" id="search-term"><i class="bi bi-search"></i></button>
        <!-- Create the search input using bootstrap to call the search Wordpress query -->
    </div>
</form>