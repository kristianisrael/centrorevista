<?php get_header(); ?>
<?php get_sidebar(); ?>
<div class="eight columns">
<h2>Mostrando contenidos de sección: <?php echo single_cat_title(); ?></h2>
<?php if (have_posts()) : ?>
<?php $post = $posts[0]; $c=0;?>
<?php while (have_posts()) : the_post(); ?>
<?php $c++;
if( !$paged && $c == 1) :?>


<div class="main single clearfix">
						<div class="single info">
						<h5>
							<a title="<?php the_title(); ?>"  href="<?php the_permalink() ?>" rel="bookmark" alt="<?php the_title(); ?>">
								<?php the_title(); ?></a>
							</h5>
						<hr>
						<h4>Fecha de publicación:</h4><small><?php the_time('j'); ?> de <?php the_time('F, Y'); ?></small>
						</div>	
						<p class="large clearfix">
							<a title="<?php the_title(); ?>" href="<?php the_permalink() ?>" rel="bookmark" alt="<?php the_title(); ?>">
								<?php the_post_thumbnail('single_big'); ?></a></p>
						<p><?php echo excerpt(24); ?> </p>
						<a title="<?php the_title(); ?>" class="button more right" href="<?php the_permalink() ?>" rel="bookmark" alt="<?php the_title(); ?>">
						_</a>
						<hr>						
					</div>

<?php else :?>
<div class="cat clearfix">
	<a title="<?php the_title(); ?>" href="<?php the_permalink() ?>" rel="bookmark" alt="<?php the_title(); ?>">
<?php the_post_thumbnail('cat_thumb', array('class' => 'left')); ?></a>
<div class="cat_info left">
<h3 class="small">
	<a title="<?php the_title(); ?>" href="<?php the_permalink() ?>" rel="bookmark" alt="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
<hr>
<h4>Fecha de publicación:</h4><small><?php the_time('j'); ?> de <?php the_time('F, Y'); ?></small>
<hr>
<p class="small"><?php echo excerpt(12); ?>
</p>
</div>
</div>
<?php endif;?>
<?php endwhile; ?>

<div class="paginate m_10">
	Paginas: 
<?php
global $wp_query;

$big = 999999999; // need an unlikely integer

echo paginate_links( array(
	'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
	'format' => '?paged=%#%',
	'current' => max( 1, get_query_var('paged') ),
	'total' => $wp_query->max_num_pages
) );
?>
</div>
<?php endif; ?>
			</div>

<?php get_sidebar('other'); ?>
<?php get_footer(); ?>