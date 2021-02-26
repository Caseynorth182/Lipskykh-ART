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
                <div class="contact__item">
                    <h4>Socials</h4>
                    <ul class="socials">
                        <li class="ms-btn"><a class="socicon-twitter"
                                              title="Twitter"
                                              target="_blank"
                                              href="http://twitter.com/"></a></li>
                        <li class="ms-btn"><a class="socicon-dribbble"
                                              title="Dribbble"
                                              target="_blank"
                                              href="http://dribbble.com/"></a></li>
                        <li class="ms-btn"><a class="socicon-facebook"
                                              title="Facebook"
                                              target="_blank"
                                              href="https://www.facebook.com/"></a></li>
                        <li class="ms-btn"><a class="socicon-instagram"
                                              title="Instagram"
                                              target="_blank"
                                              href="https://www.instagram.com/"></a></li>
                    </ul>
                </div>
            </div>
            <!--Contact Form-->
            <div class="col-md-6 col-lg-6 pb-lg-5 contact__form pb-lg-5">
                <div class="row">
                    <div class="form-group col-6">
                        <input class="form-control"
                               type="text"
                               name="your-name"
                               aria-required="true"
                               aria-invalid="false"
                               placeholder="Your name">
                    </div>
                    <div class="form-group col-6">
                        <input class="form-control"
                               type="email"
                               name="your-email"
                               aria-required="true"
                               aria-invalid="false"
                               placeholder="Your email">
                    </div>
                    <div class="form-group col-12">
                        <input class="form-control"
                               type="text"
                               name="your-subject"
                               aria-required="true"
                               aria-invalid="false"
                               placeholder="Your subject">
                    </div>
                    <div class="form-group col-12">
                        <textarea class="form-control"
                                  name="your-message"
                                  cols="40"
                                  rows="8"
                                  aria-required="true"
                                  aria-invalid="false"
                                  placeholder="Write your message here..."></textarea>
                    </div>
                    <div class="form-group col-12 custom-checkbox"><span class="wpcf7-form-control-wrap your-consent"><span class="wpcf7-form-control wpcf7-acceptance"><span class="wpcf7-list-item">
                        <label>
                          <input class="checkbox checkbox--bg"
                                 type="checkbox"
                                 name="your-consent"
                                 value="1"
                                 aria-invalid="false"><span class="wpcf7-list-item-label">I consent to the conditions.</span>
                        </label></span></span></span></div>
                    <div class="conditions-checkbox__control col-12"
                         aria-hidden="true">
                        <input class="btn btn--primary"
                               type="submit"
                               value="Send"
                               disabled=""><span class="ajax-loader"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Footer--><a class="back-to-top js-back-to-top back-to-top--is-visible"
                    data-offset="500"
                    data-duration="300">
        <svg viewBox="0 0 20 20">
        <path d="M17,0H3C1.3,0,0,1.3,0,3v14c0,1.7,1.3,3,3,3h14c1.7,0,3-1.3,3-3V3C20,1.3,18.7,0,17,0z M12.3,11.7L11,10.4V16H9v-5.6 l-1.3,1.3l-1.4-1.4L10,6.6l3.7,3.7L12.3,11.7z M14,6H6V4h8V6z"></path>
    </svg></a>

<?php
    get_footer('not_home');
?>
