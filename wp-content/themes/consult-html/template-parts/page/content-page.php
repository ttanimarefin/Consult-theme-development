<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */

?>

<article>
<?php the_title();?>
<?php the_content();?>
<div class="entry-content">
<?php wp_link_pages(array(
    'before' => '<div class="page-links">' . __( 'Pages:', 'twentynineteen' ),
    'after'  => '</div>',
)) ?>
</div>
</article>