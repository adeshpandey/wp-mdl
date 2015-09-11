<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package SleekBlog
 * @since Sleek Blog 1.0
 */
?>

<footer class="mdl-mini-footer">
          <div class="mdl-mini-footer--left-section">
            <button class="mdl-mini-footer--social-btn social-btn social-btn__twitter">
              <span class="visuallyhidden">Twitter</span>
            </button>
            <button class="mdl-mini-footer--social-btn social-btn social-btn__blogger">
              <span class="visuallyhidden">Facebook</span>
            </button>
            <button class="mdl-mini-footer--social-btn social-btn social-btn__gplus">
              <span class="visuallyhidden">Google Plus</span>
            </button>
          </div>
          <div class="mdl-mini-footer--middle-section">
          	<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'twentyfifteen' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'twentyfifteen' ), 'WordPress' ); ?></a>
          </div>
          <div class="mdl-mini-footer--right-section">
            <button class="mdl-mini-footer--social-btn social-btn__share">
              <i class="material-icons" role="presentation">share</i>
              <span class="visuallyhidden">share</span>
            </button>
          </div>
        </footer>
<?php wp_footer(); ?>
</main> <!-- main content area -->
</div> <!-- site area -->
</body>
</html>
