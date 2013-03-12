	<div class="container">
		<div class="three columns">
		<div class="clearfix sidebar pt_20">
			<div class="clearfix">
					<a title="<?php the_title(); ?>" href="<?php bloginfo('url'); ?>" rel="bookmark" alt="<?php the_title(); ?>">

				<img src="<?php bloginfo('template_directory'); ?>/images/logo.jpg" alt=""></a></div>

				<h2>Otras Notas</h2>
			<ul class="border">
				<?php query_posts('showposts=3&cat=-12'); ?>
				<?php $wp_query->in_the_loop = true; while (have_posts()) : the_post(); ?>
				<li><h3 class="small">
				<a title="<?php the_title(); ?>" href="<?php the_permalink() ?>" rel="bookmark" alt="<?php the_title(); ?>">
				<?php the_title(); ?>
				</a></h3></li>
				<?php endwhile; wp_reset_query();?>
			</ul> 
			<!--	<?php if ( in_category('Highlights')){ ?>
			<h2>Higlights Pasados <a href="<?php bloginfo('url'); ?>/category/highlights" class="plus">+</a></h2>
			<ul class="border">
					<?php query_posts('showposts=3'); ?>
				<?php $wp_query->in_the_loop = true; while (have_posts()) : the_post(); ?>
				<li><h3 class="small">
				<a title="<?php the_title(); ?>" href="<?php the_permalink() ?>" rel="bookmark" alt="<?php the_title(); ?>">
				<?php the_title(); ?>
				</a></h3></li>
				<?php endwhile; wp_reset_query();?>
			</ul> 
			<?php } ?>-->
					<h4>Patrocinador</h4>
					<img src="<?php bloginfo('template_directory'); ?>/images/banner_side.jpg" alt="">
					<hr>

					<!--<h2>Lo mas destacado</h2>-->
		</div>
		</div>