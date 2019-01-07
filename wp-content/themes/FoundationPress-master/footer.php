<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */
?>

<footer class="footer">
    <div class="footer-container">
        <div class="footer-grid">
            <?php dynamic_sidebar( 'footer-widgets' ); ?>
            <?php if (is_active_sidebar('footer-col1')) { ?>
                <div class="col1">
                    <?php dynamic_sidebar('footer-col1'); ?>
                </div>
            <?php
                }
            ?>
            <?php if (is_active_sidebar('footer-col2')) { ?>
                <div class="col2">
                    <?php dynamic_sidebar('footer-col2'); ?>
                </div>
            <?php
                }
            ?>
            <?php if (is_active_sidebar('footer-col3')) { ?>
                <div class="col3">
                    <?php dynamic_sidebar('footer-col3'); ?>
                </div>
            <?php
                }
            ?>
            <?php if (is_active_sidebar('footer-col4')) { ?>
                <div class="col4">
                    <?php dynamic_sidebar('footer-col4'); ?>
                </div>
            <?php
                }
            ?>
        </div>
    </div>
</footer>

<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
	</div><!-- Close off-canvas content -->
<?php endif; ?>

<?php wp_footer(); ?>
<?php
$request = wp_remote_get('https://www.asu.edu/asuthemes/4.6/includes/footer.shtml');
$response = wp_remote_retrieve_body( $request );
echo $response;
?>
</body>
</html>