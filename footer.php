<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 */
?>
		</div><!-- #content -->
<?php $language = isset($_GET['lang']) ? $_GET['lang'] : '';
global $hideFooter; if (!$hideFooter) {
$translations = '';
if ($language) {
    if (file_exists(get_stylesheet_directory() . '/' . 'template-parts/' . '/translations/' . $language .'/footer-content' . '.php')) {
        $translations = '/translations/' . $language;
    }
}
ob_start();
get_template_part('template-parts' . $translations . '/footer-content'); ?>
        
<?php } ?>
        <?php $showBackLink = get_option('np_hide_backlink') ? false : true; ?>
<?php if ($showBackLink) : $GLOBALS['theme_backlink'] = true; ?>
<section class="u-backlink u-clearfix u-grey-80">
            <p class="u-text">
                <span>This site was created with the </span>
                <a class="u-link" href="https://nicepage.com/" target="_blank" rel="nofollow">
                    <span>Nicepage</span>
                </a>
             </p>
    </section>
<?php endif; ?>
        
	</div><!-- .site-inner -->
</div><!-- #page -->

<?php wp_footer(); ?>
<?php back_to_top(); ?>
</body>
</html>
<?php $footer = ob_get_clean();
if (function_exists('renderTemplate')) {
    renderTemplate($footer, '', 'echo', 'footer');
} else {
    echo $footer;
} ?>