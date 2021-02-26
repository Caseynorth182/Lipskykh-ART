<?php
    /*
     Template Name: Портфолио-галерея
     */
get_header();
?>
<div class="margin-top-xl"></div>
<section class="hero hero--overlay-layer hero-default">
    <div class="container">
        <div class="hero__content text-left">
            <h1>Мои работы</h1>
            <p>Текст описания какие крутые картины и тд.</p>
        </div>
    </div>
</section>
<div class="container ms-content">
    <div class="subnav margin-bottom--lg">

    </div>
    <div class="row ms-p2 work-grid parent grid grid-gap-lg grid-content portfolio-feed">
        <div class="grid-sizer col-xs-12 col-md-4 col-sm-4"></div>
	    <?php
	        $query = new WP_Query([
                'post_type' => 'picture',
	        ]);

	        if($query->have_posts()):
	            while($query->have_posts()):
	                $query->the_post();
	    ?>
        <div class="grid-item mb-5 col-xs-12 col-md-4 col-sm-4 design">
            <div class="work-card card--is-link">
	            <a class="work-card__img-link" href="<?php the_permalink();?>" aria-label="Servant of academy">
                    <figure class="work-card__img media-wrapper media-wrapper--3:4">
	                   <?php the_post_thumbnail();?>
                        <div class="glow-wrap">
	                        <i class="glow vertical"></i>
                        </div>
                    </figure>
	            </a>
                <div class="work-card__content">
	                <span class="work-card__badge margin-bottom-xxs">

	                </span>
	                <a class="work-card__title" href="single_portfolio.html">
                        <h3><?php the_title();?></h3>
                    </a>
                    <a class="work-card__link" href="single_portfolio.html">
	                    показать картину
                        <svg class="icon" viewBox="0 0 12 12">
                            <g stroke-width="1" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <line x1="11.5" y1="6" x2="0.5" y2="6"></line>
                                <polyline points="7.5 2 11.5 6 7.5 10"></polyline>
                            </g>
                        </svg></a>
                </div>
            </div>
        </div>
		<?php
			endwhile;
			endif;
		?>
    </div>

</div>
<!--Footer-->
<a class="back-to-top js-back-to-top back-to-top--is-visible" data-offset="500" data-duration="300">
    <svg viewBox="0 0 20 20">
        <path d="M17,0H3C1.3,0,0,1.3,0,3v14c0,1.7,1.3,3,3,3h14c1.7,0,3-1.3,3-3V3C20,1.3,18.7,0,17,0z M12.3,11.7L11,10.4V16H9v-5.6 l-1.3,1.3l-1.4-1.4L10,6.6l3.7,3.7L12.3,11.7z M14,6H6V4h8V6z"></path>
    </svg></a>


<?php
    get_footer('not_home');
?>
