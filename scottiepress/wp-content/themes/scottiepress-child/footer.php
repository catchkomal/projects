<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0.0
 */

?>
		<footer>
            <div class="fix_wrap">
                <div class="left">
                    <h1>Sign up to mailing list:</h1>
                    <input type="email" placeholder="Enter your email address here..."/>
                    <input type="button" value="Submit">
                </div>
                <div class="right">
                    <div classs="top">
                        <p>Explore the archive <a href="#"><img src="<?php echo THEME_IMG_PATH; ?>/arrow.png"/></a></p>
                        <p>Access the Forum <a href="#"><img src="<?php echo THEME_IMG_PATH; ?>/arrow.png"/></a></p>
                        <p>View the Partner Pack <a href="#"><img src="<?php echo THEME_IMG_PATH; ?>/arrow.png"/></a></p>
                    </div>
                    <div class="btm">
                        <a href="#"><img src="<?php echo THEME_IMG_PATH; ?>/facebook.png"/></a>
                        <a href="#"><img src="<?php echo THEME_IMG_PATH; ?>/tw.png"/></a>
                        <a href="#"><img src="<?php echo THEME_IMG_PATH; ?>/insta.png"/></a>
                    </div>
                </div>
            </div>
        </footer>
			<?php wp_footer(); ?>
   </body>
   </html>