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

                <h2 class="text-align-left">Образование</h2>
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
                            <p><? the_content();?></p>
                        </div>
                    </div>
                </div>

				<?php
					endwhile;
                    wp_reset_postdata();
				?>
                <!-- Experience Item-->
	            <h2 class="text-align-left">EVENTS</h2>
	            <?php
	                $query = new WP_Query([
	                    'post_type' => 'education',
	                    'order'     => 'ASC',
	                    'tax_query' => [
	                        [
	                            'taxonomy' => 'educations_part',
	                            'field'    => 'id',
	                            'terms'    =>   4,
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
                            <p><?php the_content();?></p>
                        </div>
                    </div>
                </div>
	            <?php
	                endwhile;
	                wp_reset_postdata();
	            ?>
		                    <!-- Experience Item-->
	            <h2 class="text-align-left">Exhibitions</h2>
	            <?php
	                $query = new WP_Query([
	                    'post_type' => 'education',
	                    'order'     => 'ASC',
	                    'tax_query' => [
	                        [
	                            'taxonomy' => 'educations_part',
	                            'field'    => 'id',
	                            'terms'    =>   5,
	                        ]
	                    ]
	                ]);
	                while($query->have_posts()):
	                $query->the_post();
	            ?>
               <div class="row">
                    <div class="grid-sizer col-sm-6 col-md-4 col-lg-4"></div>
                    <div class="grid-item col-sm-6 col-md-3 col-lg-3">
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
                            <p><?php the_title();?></p>
                        </div>
                    </div>
                </div>
	            <?php
	                endwhile;
	                wp_reset_postdata();
	            ?>
            </div>
            <div class="ms_our-team">
                <h2 class="text-align-left">Фотоальбом</h2>
                <div class="row">
                    <div class="grid-sizer col-sm-6 col-md-3 colg-4"></div>
	                <?php
	                    $query = new WP_Query([
                            'post_type' => 'album',
                            'order'     => 'ASC',
	                    ]);
	                    if($query->have_posts()):
	                        while($query->have_posts()):
	                            $query->the_post();
	                ?>
                    <!-- Team Item-->
                    <div class="grid-item col-xs-6 col-sm-6 col-md-3 co-lg-4 pb-lg-5 pb-4">
	                    <a href="<?php the_permalink();?>">
	                    <?php
	                        the_post_thumbnail('full');
	                    ?>
                        <h4><?php the_title();?></h4>
                        <p><?php the_excerpt();?></p>
	                    </a>
                    </div>
                    <?php
                        endwhile;
                        endif;
                        wp_reset_postdata();

                    ?>
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
