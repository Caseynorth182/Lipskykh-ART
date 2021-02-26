<?php
    /*
     Template Name: обо мне
     */
    get_header();
?>

    <div class="margin-top-xl"></div>
    <section class="hero hero--overlay-layer hero-default">
        <div class="container">
            <div class="hero__content text-left"><span>Про меня</span>
                <h1>Немного о себе</h1>
                <p>еще пару слов</p>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="ms-page ms-page--about text-component">
            <div class="ms_services">
                <h2 class="text-align-left">о себе</h2>
                <div class="row">
                    <!-- Service Item-->
                    <div class="grid-sizer col-sm-12 col-md-8 col-lg-4"></div>
                    <div class="grid-item col-sm-12  pb-lg-5 pb-4">
                        <div class="ms_services--heading">
                            <h4>Hello!</h4>
                        </div>
                        <p>
                            My name is Igor’ and I am an artist from Kharkiv, Ukraine. My fields of interests are painting and graphics. Usually it is figurative, sometimes still life or landscape. I can describe my style as modern realism. In short, I like to draw from model, look for interesting compositional solutions. In my works I pay a lot of attention to the shape, volume, composition, plasticity. I tend to experiment and combine realistic interpretation of form with conditional, semi-abstract environment.
                            Currently I am in search for my expressive style of painting and graphics.
                            Some of my works are in private collections in Ukraine, the USA, England, Poland, Spain and China.
                        </p>
                    </div>

                </div>
            </div>
            <div class="ms_experience">
                <h2 class="text-align-left">Experience</h2>
                <!-- Experience Item-->
	            <?php
                $query = new WP_Query([
                    'post_type' => 'education',
                    'order'     => 'ASC',
                    'tax_query' => [
                        [
                            'taxonomy' => 'educations_part',
                            'field'    => 'id',
                            'terms'    =>   3,
                        ]
                    ]
                ]);
						while($query->have_posts()):
	                        $query->the_post();

                    ?>
                <div class="row">
                    <div class="grid-sizer col-sm-6 col-md-4 col-lg-4"></div>
                    <div class="grid-item col-sm-6 col-md-3 col-lg-3">
                        <p class="company_name"><?php the_title();?></p>
	                    <?php
	                        if(!empty(get_field('year_start'))) {
	                        	?>
	                        	<p class="year"><? the_field('year_start'); ?> - <? the_field('year_end'); ?></p>
	                        	<?php
	                        } else {
                                ?>
		                        <p class="year"><? the_field('year_end'); ?></p>
                                <?php
	                        }
	                    ?>
                    </div>
                    <div class="grid-item col-sm-6 col-md-9 col-lg-9">
                        <div class="experience-text">
                            <p>Progressively unleash economically sound architectures before magnetic alignments. Progressively predominate turnkey models with impactful convergence. Dynamically restore cost effective infrastructures rather than revolutionary bandwidth. Uniquely matrix turnkey alignments rather than stand-alone functionalities. Continually matrix end-to-end process improvements vis-a-vis 2.0 intellectual capital.</p>
                        </div>
                    </div>
                </div>

				<?php
					endwhile;
				?>
                <!-- Experience Item-->
               <!-- <div class="row">
                    <div class="grid-sizer col-sm-6 col-md-4 col-lg-4"></div>
                    <div class="grid-item col-sm-6 col-md-3 col-lg-3">
                        <p class="company_name">Big Boss Company</p>
                        <p class="year">2008 - 2010</p>
                    </div>
                    <div class="grid-item col-sm-6 col-md-9 col-lg-9">
                        <div class="experience-text">
                            <p>Progressively unleash economically sound architectures before magnetic alignments. Progressively predominate turnkey models with impactful convergence. Dynamically restore cost effective infrastructures rather than revolutionary bandwidth. Uniquely matrix turnkey alignments rather than stand-alone functionalities. Continually matrix end-to-end process improvements vis-a-vis 2.0 intellectual capital.</p>
                        </div>
                    </div>
                </div>-->

            </div>
            <div class="ms_our-team">
                <h2 class="text-align-left">Our Team</h2>
                <div class="row">
                    <div class="grid-sizer col-sm-6 col-md-3 colg-4"></div>
                    <!-- Team Item-->
                    <div class="grid-item col-xs-6 col-sm-6 col-md-3 co-lg-4 pb-lg-5 pb-4"><img src="assets/img/team/jr-team.png" alt="John Wolf">
                        <h4>John Wolf</h4>
                        <p>CEO Director</p>
                    </div>
                    <!-- Team Item-->
                    <div class="grid-item col-xs-6 col-sm-6 col-md-3 co-lg-4 pb-lg-5 pb-4"><img src="assets/img/team/jr-team.png" alt="Laura Nelson">
                        <h4>Laura Nelson</h4>
                        <p>Product Manager</p>
                    </div>
                    <!-- Team Item-->
                    <div class="grid-item col-xs-6 col-sm-6 col-md-3 co-lg-4 pb-lg-5 pb-4"><img src="assets/img/team/jr-team.png" alt="Tommy Higher">
                        <h4>Tommy Higher</h4>
                        <p>Designer</p>
                    </div>
                    <!-- Team Item-->
                    <div class="grid-item col-xs-6 col-sm-6 col-md-3 co-lg-4 pb-lg-5 pb-4"><img src="assets/img/team/jr-team.png" alt="Kristine Rhodes">
                        <h4>Kristine Rhodes</h4>
                        <p>Project Manager</p>
                    </div>
                    <!-- Team Item-->
                    <div class="grid-item col-xs-6 col-sm-6 col-md-3 co-lg-4 pb-lg-5 pb-4"><img src="assets/img/team/jr-team.png" alt="Elisabeth Carly">
                        <h4>Elisabeth Carly</h4>
                        <p>Marketing Managerr</p>
                    </div>
                    <!-- Team Item-->
                    <div class="grid-item col-xs-6 col-sm-6 col-md-3 co-lg-4 pb-lg-5 pb-4"><img src="assets/img/team/jr-team.png" alt="Dustin Nolan">
                        <h4>Dustin Nolan</h4>
                        <p>Developer</p>
                    </div>
                    <!-- Team Item-->
                    <div class="grid-item col-xs-6 col-sm-6 col-md-3 co-lg-4 pb-lg-5 pb-4"><img src="assets/img/team/jr-team.png" alt="Evelyn Wood">
                        <h4>Evelyn Wood</h4>
                        <p>Marketing Manager</p>
                    </div>
                    <!-- Team Item-->
                    <div class="grid-item col-xs-6 col-sm-6 col-md-3 co-lg-4 pb-lg-5 pb-4"><img src="assets/img/team/jr-team.png" alt="Jimmy (Jim) Hansen">
                        <h4>Jimmy (Jim) Hansen</h4>
                        <p>Designer</p>
                    </div>
                </div>
            </div>
            <div class="ms_clients-gallery">
                <hr class="wp-block-separatoris-style-wide">
                <div class="row justify-center">
                    <div class="grid-sizer col-sm-4 col-md-2 colg-3"></div>
                    <!-- Logo Client Item-->
                    <div class="c_logo col-sm-4 col-md-2 colg-3"><img src="assets/img/clients/jr-client-1.png" alt="img title"></div>
                    <!-- Logo Client Item-->
                    <div class="c_logo col-sm-4 col-md-2 colg-3"><img src="assets/img/clients/jr-client-2.png" alt="img title"></div>
                    <!-- Logo Client Item-->
                    <div class="c_logo col-sm-4 col-md-2 colg-3"><img src="assets/img/clients/jr-client-3.png" alt="img title"></div>
                    <!-- Logo Client Item-->
                    <div class="c_logo col-sm-4 col-md-2 colg-3"><img src="assets/img/clients/jr-client-4.png" alt="img title"></div>
                    <!-- Logo Client Item-->
                    <div class="c_logo col-sm-4 col-md-2 colg-3"><img src="assets/img/clients/jr-client-5.png" alt="img title"></div>
                    <!-- Logo Client Item-->
                    <div class="c_logo col-sm-4 col-md-2 colg-3"><img src="assets/img/clients/jr-client-14.png" alt="img title"></div>
                    <!-- Logo Client Item-->
                    <div class="c_logo col-sm-4 col-md-2 colg-3"><img src="assets/img/clients/jr-client-7.png" alt="img title"></div>
                    <!-- Logo Client Item-->
                    <div class="c_logo col-sm-4 col-md-2 colg-3"><img src="assets/img/clients/jr-client-8.png" alt="img title"></div>
                    <!-- Logo Client Item-->
                    <div class="c_logo col-sm-4 col-md-2 colg-3"><img src="assets/img/clients/jr-client-9.png" alt="img title"></div>
                    <!-- Logo Client Item-->
                    <div class="c_logo col-sm-4 col-md-2 colg-3"><img src="assets/img/clients/jr-client-10.png" alt="img title"></div>
                    <!-- Logo Client Item-->
                    <div class="c_logo col-sm-4 col-md-2 colg-3"><img src="assets/img/clients/jr-client-11.png" alt="img title"></div>
                    <!-- Logo Client Item-->
                    <div class="c_logo col-sm-4 col-md-2 colg-3"><img src="assets/img/clients/jr-client-12.png" alt="img title"></div>
                    <!-- Logo Client Item-->
                    <div class="c_logo col-sm-4 col-md-2 colg-3"><img src="assets/img/clients/jr-client-13.png" alt="img title"></div>
                    <!-- Logo Client Item-->
                    <div class="c_logo col-sm-4 col-md-2 colg-3"><img src="assets/img/clients/jr-client-6.png" alt="img title"></div>
                    <!-- Logo Client Item-->
                    <div class="c_logo col-sm-4 col-md-2 colg-3"><img src="assets/img/clients/jr-client-15.png" alt="img title"></div>
                    <!-- Logo Client Item-->
                </div>
            </div>
        </div>
    </div>
    <!--Footer--><a class="back-to-top js-back-to-top back-to-top--is-visible" data-offset="500" data-duration="300">
        <svg viewBox="0 0 20 20">
            <path d="M17,0H3C1.3,0,0,1.3,0,3v14c0,1.7,1.3,3,3,3h14c1.7,0,3-1.3,3-3V3C20,1.3,18.7,0,17,0z M12.3,11.7L11,10.4V16H9v-5.6 l-1.3,1.3l-1.4-1.4L10,6.6l3.7,3.7L12.3,11.7z M14,6H6V4h8V6z"></path>
        </svg></a>

<?php
    get_footer('not_home');
?>
