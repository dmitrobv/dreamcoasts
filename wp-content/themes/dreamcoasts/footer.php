<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

<?php
$templpath = get_template_directory_uri();
?>

    </div><!-- #main -->
    <div class="footerok"></div>
    <div class="footerok2">
        <div class="footerok2_left"><a href="/">Home</a> <a href="/about">About</a> <a href="/blog">Blog</a> <a href="/contact">Contact</a></div>
        <div class="footerok2_right">
            Connect with us:
            <a href="https://www.facebook.com/DreamCoasts"><img src="<?=$templpath?>/images/fb_img.png" width="22" height="22" alt="DreamCoasts page on FB" target="_blank" /></a>
            <a href="https://www.twitter.com/DreamCoasts"><img src="<?=$templpath?>/images/tw_img.png" width="22" height="22" alt="DreamCoasts on Twitter" target="_blank" /></a>
            <a href="https://www.youtube.com/user/DreamCoastsTV"><img src="<?=$templpath?>/images/yt_img.png" width="22" height="22" alt="DreamCoasts channel on YouTube" target="_blank" /></a>
        </div>
    </div>
    <div id="footer">
        <span>&copy; <a href="http://www.dreamcoasts.com">DreamCoasts</a>. <?=date("Y")?> All Rights Reserved.</span>
    </div>

	<?php wp_footer(); ?>
</body>
</html>