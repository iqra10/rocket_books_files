<?php
// If this file is called directly, abort.
if ( ! defined( 'ABSPATH' ) ) {
	die;
}
/**
 * The template part for displaying content
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

$compact = get_option( 'style' );
?>

<article id="post-<?php the_ID(); ?>" class="<?php echo $compact ?>" >
    <div class="book-entry-img">
		<?php the_post_thumbnail( 'thumbnail' ); ?>
    </div>
    <div class="book-entry-content ">
		<?php
		the_title( sprintf( '<h2 class="book-entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
         the_excerpt();
		 
		include ROCKET_BOOKS_BASE_DIR . 'templates/book-meta.php';
		?>
    </div><!-- .entry-content -->

</article><!-- #post-## -->
