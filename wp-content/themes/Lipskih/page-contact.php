<?php
/*
 * Template Name: Для страницы "Контакты"
 */
get_header();
?>
<div class="margin-top-xl"></div>
<section class="hero hero--overlay-layer hero-default">
	<div class="container">
		<div class="hero__content text-left"><span>Мои контакты</span>
			<h1>Свяжитесь со мной</h1>
			<p>Любым удобным для вас способом</p>
		</div>
	</div>
</section>
<div class="container ms-content">
	<div class="ms-contact-page">
		<!--<div class="grid-sizer"></div>-->
		<!--Contact Info-->
		<div class="contact__list">
			<div class="contact__item">
				<h4>Адресс студии</h4>
				<p class="text-sm">88 Whitby Road<br> IP20 6JA<br> London, UK</p>
			</div>
			<div class="contact__item">
				<h4>Email</h4>
				<p class="text-sm"><a href="mailto:webmaster@example.com">hello@myemail.com</a></p>
			</div>
			<div class="contact__item">
				<h4>Phone</h4>
				<p class="text-sm"><a href="tel:http://+4473566487">+44 7356
						6487</a><br><small class="color-contrast-medium">Mon - Fri, 8AM - 7PM</small></p>
			</div>
		</div>
        <?php echo do_shortcode('[contact-form-7 id="130" title="Untitled"]')?>

		<!--Contact Form-->
		<!--///////////////////////////////-->
	</div>
</div>






<!--Footer--><a class="back-to-top js-back-to-top back-to-top--is-visible"
                data-offset="500"
                data-duration="300">
	<svg viewBox="0 0 20 20">
		<path d="M17,0H3C1.3,0,0,1.3,0,3v14c0,1.7,1.3,3,3,3h14c1.7,0,3-1.3,3-3V3C20,1.3,18.7,0,17,0z M12.3,11.7L11,10.4V16H9v-5.6 l-1.3,1.3l-1.4-1.4L10,6.6l3.7,3.7L12.3,11.7z M14,6H6V4h8V6z"></path>
	</svg>
</a>

<?php
get_footer('not_home');
?>
