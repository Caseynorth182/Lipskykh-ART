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
	<div class="ms-contact-page row">
		<div class="grid-sizer col-sm-12 col-md-6 col-lg-4"></div>
		<!--Contact Info-->
		<div class="col-12 col-md-6 col-lg-6 contact__list pr-lg-5 pr-md-3">
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
				<button class="push_me">Push MEEE</button>
		</div>
		<!--Contact Form-->
		<div class="col-md-6 col-lg-6 pb-lg-5 contact__form pb-lg-5">
			<form id="add_feedback">
				<div class="add_feedback_top">
					<input type="text" name="art_name" id="art_name" class="required art_name" placeholder="Ваше имя" value=""/>

					<input type="email" name="art_email" id="art_email" class="required art_email" placeholder="Ваш E-Mail" value=""/>
				</div>

				<input type="text" name="art_subject" id="art_subject" class="art_subject" placeholder="Тема сообщения" value=""/>

				<textarea name="art_comments" id="art_comments" placeholder="Сообщение" rows="10" cols="30" class="required art_comments"></textarea>

				<input type="checkbox" name="art_anticheck" id="art_anticheck" class="art_anticheck" style="display: none !important;" value="true" checked="checked"/>

				<input type="text" name="art_submitted" id="art_submitted" value="" style="display: none !important;"/>

				<input type="submit" id="submit-feedback" class="button" value="Отправить сообщение"/>
			</form>
		</div>

		<script>
			var a = toastr.options = {
                "closeButton": false,
                "debug": false,
                "newestOnTop": false,
                "progressBar": false,
                "positionClass": "toast-top-right",
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            }
            $('.push_me').on('click', function () {

                toastr["success"]("My name is Inigo Montoya. You killed my father. Prepare to die!", "Очень сильно крутая! ")
            })
		</script>
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
