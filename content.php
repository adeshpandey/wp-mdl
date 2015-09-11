<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package Sleek_Blog
 * @since Sleek Blog 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('demo-blog__posts mdl-grid'); ?>>
	
<div class="mdl-card amazing mdl-cell mdl-cell--12-col">
            <div class="mdl-card__title mdl-color-text--grey-50">
              <?php the_title( '<h3 class="quote">', '</h3>' ); ?>
            </div>
            <div class="mdl-card__supporting-text mdl-color-text--grey-600">
              <?php the_content(); ?>
            </div>
            <div class="post-meta mdl-card__supporting-text meta mdl-color-text--grey-600">
              <div class="minilogo"></div>
              <div>
              <?php
		// Author bio.
		if ( is_single() && get_the_author_meta( 'description' ) ) :
			get_template_part( 'author-bio' );
		endif;
	?>
	<?php sleekblog_entry_meta(); ?> 
	<?php edit_post_link( __( 'Edit', 'twentyfifteen' ), '<span class="edit-link">', '</span>' ); ?>               
              </div>
            </div>
          </div>
	
</article>

