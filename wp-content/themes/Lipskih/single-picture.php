<?php
get_header();
	if (have_posts()):
?>
<!--Post Title-->
<header class="text-component__block text-component__block--meta">
	<h1 class="text-component__block--header"><?php the_title();?></h1>
	<div class="post-info__single">

	</div>
</header>
<!--Post Feautured image-->
<figure class="post_feautured media-wrapper media-wrapper--4:3">
   <?php the_post_thumbnail();?>
</figure>
<div class="margin-bottom-lg"></div>
<!--Post Content-->
<article class="article text-component">
	<div class="text-component__inner js-sticky-sharebar-target">
		<p>
			<?php the_content();?>
		</p>

		<blockquote>
			<p>
				<?php the_excerpt();?>
			</p>
		</blockquote>

		<div class="clearfix"></div>
	</div>
</article>
<!--Post Tags-->


<?php
	else:
		echo ' нет записей ';
	endif;
get_footer('not_home');
?>
