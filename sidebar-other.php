			<div class="five columns">
				<h4>Patrocinador</h4>
				<img src="<?php bloginfo('template_directory'); ?>/images/big_ad.jpg" alt="">
				<hr>

	<?php if ( !in_category('Portadas')){ ?>
					<h2>En Portada este mes <a href="<?php bloginfo('url'); ?>/category/portadas" class="plus">+</a> </h2>
					<?php query_posts('category_name=Portadas&showposts=1'); ?>
				<?php $wp_query->in_the_loop = true; while (have_posts()) : the_post(); ?>
				<a title="<?php the_title(); ?>" href="<?php the_permalink() ?>" rel="bookmark" alt="<?php the_title(); ?>">
					<?php the_post_thumbnail('portada_thumb'); ?></a>
					<?php endwhile; wp_reset_query();?>
					<hr>
					
	<?php } ?>
	<?php if ( !in_category('Entrevistas')){ ?>
				<h2>Entrevista <a href="<?php bloginfo('url'); ?>/category/entrevistas" class="plus">+</a> </h2>
					<div class="entrevista">
						<?php query_posts('category_name=Entrevistas&showposts=1'); ?>
				<?php $wp_query->in_the_loop = true; while (have_posts()) : the_post(); ?>
				<a title="<?php the_title(); ?>" href="<?php the_permalink() ?>" rel="bookmark" alt="<?php the_title(); ?>">
						<?php the_post_thumbnail('sidebar_thumb', array('class' => 'left') ); ?></a>
					<h3 class="small"><a title="<?php the_title(); ?>" href="<?php the_permalink() ?>" rel="bookmark" alt="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
					<?php endwhile; wp_reset_query(); ?>
					</div>
					<hr>
					<?php } ?>
<?php if ( !in_category('Highlights')){ ?>

					<h2>Highlights <a href="<?php bloginfo('url'); ?>/category/highlights" class="plus">+</a></h2>
					<div class="highlights side">
						<ul class="border">
							<?php query_posts('category_name=Highlights&showposts=3'); ?>
							<?php $wp_query->in_the_loop = true; while (have_posts()) : the_post(); ?>
							<li><h3 class="small"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3></li>
							<?php endwhile; wp_reset_query(); ?>
						</ul>
					</div>
					<?php } ?>

					<?php if ( !in_category('Hot')){ ?>
					<h2>Hot <a href="<?php bloginfo('url'); ?>/category/hot" class="plus">+</a></h2>
					<div class="hot side">
						<ul class="border">
							<?php query_posts('category_name=Hot&showposts=3'); ?>
							<?php $wp_query->in_the_loop = true; while (have_posts()) : the_post(); ?>
							<li><h3 class="small"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3></li>
							<?php endwhile; wp_reset_query(); ?>
						</ul>
					</div>
					<?php } ?>
					<?php if ( !in_category('Trends')){ ?>
					<h2>Trends <a href="<?php bloginfo('url'); ?>/category/trends" class="plus">+</a></h2>
					<?php query_posts('category_name=Trends&showposts=3'); ?>
							<?php $wp_query->in_the_loop = true; while (have_posts()) : the_post(); ?>
							<a href="<?php the_permalink() ?>">
				<?php the_post_thumbnail('trend_thumb' ); ?></a>
				<?php endwhile;wp_reset_query(); ?>
					<hr>
					<?php } ?>
					<?php if ( !in_category('Articulos')){ ?>
					<h2>Artículos <a href="<?php bloginfo('url'); ?>/category/articulos" class="plus">+</a></h2>
					<ul class="border">
						<?php query_posts('category_name=Articulos&showposts=3'); ?>
							<?php $wp_query->in_the_loop = true; while (have_posts()) : the_post(); ?>
		<li><h3 class="small"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3></li>
		<?php endwhile; ?>
					</ul>
					<?php } ?>
						<h4>Patrocinador</h4>
						<img src="<?php bloginfo('template_directory'); ?>/images/del.jpg" alt="">

			</div></div>