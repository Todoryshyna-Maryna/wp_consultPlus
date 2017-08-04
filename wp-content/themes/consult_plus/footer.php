<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package consult_plus
 */

?>
<footer id="colophon" class="site-footer">
    <div class="site-info">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <a href="#" class="site-logo site-logo__footer-logo-eg"></a>
                </div>
                <div class="col-md-8">
                    <div class="footer-nav__wr">
                        <ul class="footer-nav">
                            <h3 class="c-header3 c-header3__footer-eg">navigation</h3>
                            <li class="footer-nav_li"><a href="#" class="footer-nav_item">home</a></li>
                            <li class="footer-nav_li"><a href="#" class="footer-nav_item">about us</a></li>
                            <li class="footer-nav_li"><a href="#" class="footer-nav_item">insudstry</a></li>
                            <li class="footer-nav_li"><a href="#" class="footer-nav_item">services</a></li>
                            <li class="footer-nav_li"><a href="#" class="footer-nav_item">pages</a></li>
                            <li class="footer-nav_li"><a href="#" class="footer-nav_item">contact us</a></li>
                        </ul>
                        <ul class="industry-nav">
                            <h3 class="c-header3 c-header3__footer-eg">industry</h3>
                            <li class="industry-nav_li"><a href="" class="industry-nav_item">Education</a></li>
                            <li class="industry-nav_li"><a href="" class="industry-nav_item">business</a></li>
                            <li class="industry-nav_li"><a href="" class="industry-nav_item">realestate</a></li>
                            <li class="industry-nav_li"><a href="" class="industry-nav_item">technology</a></li>
                            <li class="industry-nav_li"><a href="" class="industry-nav_item">banking</a></li>
                            <li class="industry-nav_li"><a href="" class="industry-nav_item">communication</a></li>
                            <li class="industry-nav_li"><a href="" class="industry-nav_item">much more</a></li>
                        </ul>
                    </div>
                    <div class="newsletter_wr">
                        <h3 class="c-header3 c-header3__footer-eg">news letter</h3>
                        <p class="c-text c-text__blog">Enter your email address to subscribe our notification of our new post &
                            features
                            by email.</p>
                        <div class="subscribe-block">
                            <input class="footer_input" type="email" name="EMAIL" placeholder="email address" required />
                            <input class="c-button c-button__footer-eg" type="submit" value="subscribe" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr class="footer-hr">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <p class="c-text c-text__copy">Copyright &copy; 2016 Consultplus theme<p>
                </div>
                <div class="col-lg-6">
                    <ul class="social_nav">
                        <li class="social_nav_li"><a href="#" class="social_nav_item fb">facebook</a></li>
                        <li class="social_nav_li"><a href="" class="social_nav_item tw">twitter</a></li>
                        <li class="social_nav_li"><a href="" class="social_nav_item ins">instagram</a></li>
                        <li class="social_nav_li"><a href="" class="social_nav_item lnd">linkedin</a></li>
                        <li class="social_nav_li"><a href="" class="social_nav_item ggl">goolge +</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<script type="text/javascript">
    jQuery(document).ready(function($){
        $('.header-item').slick();
    });
</script>

</body>
</html>