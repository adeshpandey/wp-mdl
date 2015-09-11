<?php
/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('demo-blog__posts mdl-grid'); ?>>
	
<div class="mdl-card amazing mdl-cell mdl-cell--12-col">
            <div class="mdl-card__title mdl-color-text--grey-50">
              <?php the_title( '<h3 class="entry-title">', '</h3>' ); ?>
            </div>
            <div class="mdl-card__supporting-text mdl-color-text--grey-600">
              <?php the_content(); ?>
            </div>
            <div class="mdl-card__supporting-text meta mdl-color-text--grey-600">
              <div class="minilogo"></div>
              <div>
                <strong>The Newist</strong>
                <span>2 days ago</span>
              </div>
            </div>
          </div>
	
</article>
