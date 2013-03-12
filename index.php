<?php get_header(); ?>
<div class="portada_holder">
	<div class="titular">
		<div class="container">
			<div class="sixteen columns">
				<?php query_posts('category_name=Portadas&showposts=1'); ?>
				<?php $wp_query->in_the_loop = true; while (have_posts()) : the_post(); ?>
			<h1><a title="<?php the_title(); ?>" href="<?php the_permalink() ?>" rel="bookmark" alt="<?php the_title(); ?>">
								<?php the_title(); ?></a></h1>
			</div>
		</div>
	</div>
	<div class="container">
<div class="sixteen columns">
	<div class="logo"><img src="<?php bloginfo('template_directory'); ?>/images/logo.jpg" alt="logo"></div>
		</div>
</div>


<div class="desc">
<div class="container">
<div class="sixteen columns">
	<p><?php echo excerpt(45); ?></p>
</div>
</div>
</div>
	<div class="portada">
		<a title="<?php the_title(); ?>" href="<?php the_permalink() ?>" rel="bookmark" alt="<?php the_title(); ?>">
		<?php the_post_thumbnail('portada'); ?></a>

	</div>
<?php endwhile; ?>
</div>

<div class="container">
		<div class="three columns">
		<div class="red p_10 clearfix sidebar">
				<?php query_posts('category_name=Entrevistas&showposts=1'); ?>
				<?php $wp_query->in_the_loop = true; while (have_posts()) : the_post(); ?>
			<h2>Entrevista <a href="<?php bloginfo('url'); ?>/category/entrevistas" class="plus">+</a></h2> 
		<h3><a title="<?php the_title(); ?>" href="<?php the_permalink() ?>" rel="bookmark" alt="<?php the_title(); ?>">
								<?php the_title(); ?></a></h3>
								<a title="<?php the_title(); ?>" href="<?php the_permalink() ?>" rel="bookmark" alt="<?php the_title(); ?>">
		<?php the_post_thumbnail('sidebar', array('class' => 'scale-with-grid')); ?></a>
		<p class="small"><?php echo excerpt(12); ?></p>
		<?php endwhile; ?>
		<hr>
			<h2>Artículos <a href="<?php bloginfo('url'); ?>/category/articulos" class="plus">+</a></h2>

			<?php query_posts('category_name=Articulos&showposts=1'); ?>
			<?php $wp_query->in_the_loop = true; while (have_posts()) : the_post(); ?>
			<h3><a title="<?php the_title(); ?>" href="<?php the_permalink() ?>" rel="bookmark" alt="<?php the_title(); ?>">
								<?php the_title(); ?></a></h3>
								<a title="<?php the_title(); ?>" href="<?php the_permalink() ?>" rel="bookmark" alt="<?php the_title(); ?>">
			<?php the_post_thumbnail('sidebar', array('class' => 'scale-with-grid')); ?></a>
			
				<p class="small"><?php echo excerpt(12); ?></p>
				<?php endwhile; ?>
					<hr>
					<h4>Patrocinador</h4>
					<img src="<?php bloginfo('template_directory'); ?>/images/banner_side.jpg" alt="">
		</div>
		</div>
		<div class="eight columns">
				<h2>Highlights <a href="<?php bloginfo('url'); ?>/category/highlights" class="plus">+</a></h2>
					<div class="highlight main clearfix">
						<?php query_posts('category_name=Highlights&showposts=1'); ?>
						<?php $wp_query->in_the_loop = true; while (have_posts()) : the_post(); ?>
						<a title="<?php the_title(); ?>" href="<?php the_permalink() ?>" rel="bookmark" alt="<?php the_title(); ?>">
						<?php the_post_thumbnail('hlight'); ?></a>
						<h3>
							<a title="<?php the_title(); ?>" href="<?php the_permalink() ?>" rel="bookmark" alt="<?php the_title(); ?>">
								<?php the_title(); ?></a>
							</h3>
						<p class="med"><?php echo excerpt(24); ?></p>
						<?php endwhile; ?>
					</div>
					<hr>

					<?php query_posts('category_name=Highlights&showposts=2&offset=1'); ?>
						<?php $wp_query->in_the_loop = true; while (have_posts()) : the_post(); ?>
					<div class="highlight four columns <?php echo $wp_query->current_post+1; ?> <?php echo (($wp_query->current_post%2==0)?'alpha':'omega'); ?> ">
						<a title="<?php the_title(); ?>" href="<?php the_permalink() ?>" rel="bookmark" alt="<?php the_title(); ?>">
						<?php the_post_thumbnail('cat_thumb'); ?></a>
						<h3 class="small"><a title="<?php the_title(); ?>" href="<?php the_permalink() ?>" rel="bookmark" alt="<?php the_title(); ?>">
								<?php the_title(); ?></a></h3>
						<p class="small">
							<?php echo excerpt(8); ?>
						</p>
					</div>
					<?php endwhile; ?>

				<hr>
					<div class="ad_2 four columns alpha">
					<h4>Patrocinador</h4>
					<img src="<?php bloginfo('template_directory'); ?>/images/darth.jpg" class="scale-with-grid" alt="">	
					</div>
					<div class="ad_2 four columns omega">
					<h4>Patrocinador</h4>
					<img src="<?php bloginfo('template_directory'); ?>/images/darth.jpg" class="scale-with-grid" alt="">	
					</div>
					<hr>
					<h2>Hot <a href="<?php bloginfo('url'); ?>/category/hot" class="plus">+</a></h2>
					<?php query_posts('category_name=Hot&showposts=2'); ?>
						<?php $wp_query->in_the_loop = true; while (have_posts()) : the_post(); ?>
				<div class="four columns <?php echo $wp_query->current_post+1; ?> <?php echo (($wp_query->current_post%2==0)?'alpha':'omega'); ?>">
					<a title="<?php the_title(); ?>" href="<?php the_permalink() ?>" rel="bookmark" alt="<?php the_title(); ?>">
					<?php the_post_thumbnail('hot'); ?></a>
					<h3><a title="<?php the_title(); ?>" href="<?php the_permalink() ?>" rel="bookmark" alt="<?php the_title(); ?>">
								<?php the_title(); ?></a></h3>
						
				</div>
			<?php endwhile; ?>
			<hr>


			<div class="four columns alpha">
				<?php query_posts('category_name=Hot&showposts=2&offset=2'); ?>
				<?php $wp_query->in_the_loop = true; while (have_posts()) : the_post(); ?>
				<a title="<?php the_title(); ?>" href="<?php the_permalink() ?>" rel="bookmark" alt="<?php the_title(); ?>">
						<?php the_post_thumbnail('sidebar_thumb', array('class' => 'left') ); ?></a>
<h3 class="small"><a title="<?php the_title(); ?>" href="<?php the_permalink() ?>" rel="bookmark" alt="<?php the_title(); ?>">
								<?php the_title(); ?></a></h3>
								<hr>
								<?php endwhile; ?>
			</div>
			<div class="four columns omega">

	<?php query_posts('category_name=Hot&showposts=2&offset=4'); ?>
				<?php $wp_query->in_the_loop = true; while (have_posts()) : the_post(); ?>
				<a title="<?php the_title(); ?>" href="<?php the_permalink() ?>" rel="bookmark" alt="<?php the_title(); ?>">
						<?php the_post_thumbnail('sidebar_thumb', array('class' => 'left') ); ?></a>
<h3 class="small"><a title="<?php the_title(); ?>" href="<?php the_permalink() ?>" rel="bookmark" alt="<?php the_title(); ?>">
								<?php the_title(); ?></a></h3>
								<hr>
								<?php endwhile; ?>
			</div>

			</div>
			<div class="five columns">
				<h4>Patrocinador</h4>
				<img src="<?php bloginfo('template_directory'); ?>/images/big_ad.jpg" alt="">
				<hr>
					<h2>Trends <a href="<?php bloginfo('url'); ?>/category/trends" class="plus">+</a></h2>
					<?php query_posts('category_name=Trends&showposts=1'); ?>
						<?php $wp_query->in_the_loop = true; while (have_posts()) : the_post(); ?>
						<div class="trends">
						<a title="<?php the_title(); ?>" href="<?php the_permalink() ?>" rel="bookmark" alt="<?php the_title(); ?>">
								<?php the_post_thumbnail('trend_side'); ?>

							</a>
					<span class="slideText"> <h3 class="small"><?php the_title(); ?></h3></span>
				</div>
				<?php endwhile; ?>
					<hr>
						<h4>Patrocinador</h4>
						<img src="<?php bloginfo('template_directory'); ?>/images/del.jpg" alt="">
			</div>
</div><!-- container -->
<?php get_footer();?>