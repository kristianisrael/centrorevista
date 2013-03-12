<?php get_header(); ?>
<?php get_sidebar(); ?>
<div class="eight columns">

	<?php $wp_query->in_the_loop = true; while (have_posts()) : the_post(); ?>
				<h2><?php
$category = get_the_category();
echo $category[0]->cat_name;
?><a href="<?php bloginfo('url'); ?>/category/<?php
$category = get_the_category();
echo $category[0]->cat_name;
?>" class="plus">+</a></h2>
					<div class="main single clearfix">
					<div class="single info">

						<h5><?php the_title(); ?></h5>
						<hr>
						<h4>Fecha de Publicación:</h4>
						<small><?php the_time('j'); ?> de <?php the_time('F, Y'); ?></small>
						<!--<a href="#" class="button right">Compartir</a>-->
					</div>	
					<hr>

						<?php the_content();?>
						
							<?php wp_link_pages('before=<hr><div class="paginate">Pagina: &after=</div>'); ?>
					
			
					<?php endwhile; ?>	
				</div>
				<hr>
				<h2>No te pierdas
					<?php if ( in_category('Highlights')){ ?>
				 otros highlights
				 <?php }elseif ( in_category('Hot')){ ?>
				 más notas hot
				<?php }elseif ( in_category('Portadas')){ ?>
				portadas pasadas.
				<?php }elseif ( in_category('Entrevistas')){ ?>
				otras entrevistas
				<?php }elseif ( in_category('Articulos')){ ?>
				estos otros artículos
				<?php }elseif ( in_category('Trends')){ ?>
				estas trends
				<?php } ?>
				</h2>


<?php
if ( is_single() ) {
  $cats = wp_get_post_categories($post->ID);
    if ($cats) {
    $first_cat = $cats[0];
    $args=array(
      'cat' => $first_cat, //cat__not_in wouldn't work
      'post__not_in' => array($post->ID),
      'showposts'=>2,
      'caller_get_posts'=>1
    );
    $my_query = new WP_Query($args);
    if( $my_query->have_posts() ) {
      
      while ($my_query->have_posts()) : $my_query->the_post(); ?>
      <div class="highlight four columns alpha">
      	<a title="<?php the_title(); ?>" href="<?php the_permalink() ?>" rel="bookmark" alt="<?php the_title(); ?>">
						<?php the_post_thumbnail('cat_thumb'); ?></a>
						<h3 class="small">
							<a title="<?php the_title(); ?>" href="<?php the_permalink() ?>" rel="bookmark" alt="<?php the_title(); ?>">
								<?php the_title(); ?></a>
							</h3>
						<p class="small">
							<?php echo excerpt(9); ?>
						</p>
					</div>
       <?php
      endwhile;
    } //if ($my_query)
  } //if ($cats)
  wp_reset_query();  // Restore global post data stomped by the_post().
} //if (is_single())
?>
	</div>
<?php get_sidebar('other'); ?>
<?php get_footer(); ?>