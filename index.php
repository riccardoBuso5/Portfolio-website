<?php
/**
 * Main index template for Portfolio-website theme.
 *
 * This minimal index.php is required so WordPress recognizes the folder as a theme.
 * It outputs the normal loop and falls back to a simple message if no posts exist.
 *
 * @package Portfolio-website
 */

get_header();
?>

<main class="container">
  <?php
  if ( have_posts() ) :
    while ( have_posts() ) : the_post();
      echo '<article class="post">';
      the_title( '<h2>', '</h2>' );
      the_content();
      echo '</article>';
    endwhile;
  else :
    ?>
    <p><?php esc_html_e( 'Non ci sono contenuti da mostrare.', 'portfolio-website' ); ?></p>
    <?php
  endif;
  ?>
</main>

<?php get_footer(); ?>
