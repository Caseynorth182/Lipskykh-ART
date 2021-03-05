<?php
    /*
     Template Name: Для Главной
     */

get_header();
?>


<div class="swiper-container swiper-full-page">
    <div class="swiper-wrapper">
        <!-- Slide-->
	    <?php
	        $query = new WP_Query([
                'post_type' => 'slider',
	        ]);

	        if($query->have_posts()):
		        $count = 1;
	            $total = wp_count_posts('slider');

	            while($query->have_posts()):
		            $query->the_post();
	    ?>
        <div class="swiper-slide">
            <div class="swiper-slide__inner">
                <div class="slide-image">
	                <?php the_post_thumbnail('full');?>
                </div>
                <div class="slide-title-container row">
                    <div class="slide-title--inner">
                        <div class="slide-info__left">
                            <div class="ms-slide-count"><span>
		                            <?php
		                                echo $count++;
                                    ?>
	                            </span>
                                <span class="total-count">
	                                / <? echo $total->publish; ?>
                                </span>
                            </div>
                            <div class="slide-title">
                                <div class="slide-cat"><?php the_field('slide_name');?></div>
                                <h3><?php the_field('slide_subname');?>
	                                <br><?php the_field('slide_subname2');?>
                                </h3>
                                <a class="slide-link" rel="noreferrer" href="<?php the_field('slide_link');?>">Перейти<span></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="slider-nav">
                        <div class="swiper-button-prev">
                            <svg version="1.1" viewBox="0 0 36 36" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <polyline class="st0" points="11,18 16,13 21,18 "></polyline>
                                <path class="st0" d="M21,29H11c-4.4,0-8-3.6-8-8V11c0-4.4,3.6-8,8-8h10c4.4,0,8,3.6,8,8v10C29,25.4,25.4,29,21,29z"></path>
                          </svg>
                        </div>
                        <div class="swiper-button-next">
                            <svg version="1.1" viewBox="0 0 36 36" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <polyline class="st0" points="21,14 16,19 11,14 "></polyline>
                                <path class="st0" d="M21,29H11c-4.4,0-8-3.6-8-8V11c0-4.4,3.6-8,8-8h10c4.4,0,8,3.6,8,8v10C29,25.4,25.4,29,21,29z"></path>
                          </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	    <?php
				endwhile;
			endif;
	    ?>
        <!-- Slide-->

    </div>


    <?php
    get_footer();
    ?>
