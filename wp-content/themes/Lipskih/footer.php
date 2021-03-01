<ul class="socials">
	<?php
	    if(is_active_sidebar( 'art_footer_social' )){
	        dynamic_sidebar( 'art_footer_social' );
	    }
	?>
	<!--<li class="ms-btn"><a class="socicon-twitter" title="Twitter" target="_blank" href="http://twitter.com/"></a></li>
	<li class="ms-btn"><a class="socicon-dribbble" title="Dribbble" target="_blank" href="http://dribbble.com/"></a></li>
	<li class="ms-btn"><a class="socicon-facebook" title="Facebook" target="_blank" href="https://www.facebook.com/"></a></li>
	<li class="ms-btn"><a class="socicon-instagram" title="Instagram" target="_blank" href="https://www.instagram.com/"></a></li>-->
</ul>
<div class="slider footer-copyright">
	<p>
        <?php
        if(is_active_sidebar( 'art_footer' )){
            dynamic_sidebar( 'art_footer' );
        }
        ?>
	</p>
</div>
</div>
<!--Libs-->
<script src="assets/js/vendor/jquery-3.5.1.min.js"></script>
<script src="assets/js/vendor/modernizr.js"></script>
<script src="assets/js/vendor/gsap.min.js"></script>
<script src="assets/js/vendor/imagesLoaded.min.js"></script>
<script src="assets/js/vendor/isotope.pkgd.min.js"></script>
<script src="assets/js/vendor/swiper.min.js"></script>
<script src="assets/js/vendor/fslightbox.js"></script>
<script src="assets/js/util.js"></script>
<script src="assets/js/app.js"></script>
<?php
	wp_footer();
	?>
</body>
</html>

