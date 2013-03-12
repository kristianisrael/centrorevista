<div class="extend bgdark">
<div class="container">
	<div class="eleven columns">
		<h2>Cumpleaños</h2>
		<?php query_posts('category_name=Cumple&showposts=1'); ?>
		<?php $wp_query->in_the_loop = true; while (have_posts()) : the_post(); ?>
		<h4 class="info">Mes: <?php the_date('F'); ?></h4>
	<div class="cumple">
		<?php the_content(); ?>
		<?php endwhile; wp_reset_query(); ?>
	</div>
	</div>
	<div class="five columns">
	<h4>Patrocinador</h4>
		<img src="<?php bloginfo('template_directory'); ?>/images/ad_final.jpg" alt="">
	</div>
</div>
</div>
<div class="extend red footer">
	<div class="container">
		<div class="five columns">
			<h2><a href="https://www.facebook.com/Centro.Revista">Visitanos en Facebook »</a></h2>
			<iframe src="//www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2FCentro.Revista%3F&amp;send=false&amp;layout=standard&amp;width=280&amp;show_faces=true&amp;font=arial&amp;colorscheme=dark&amp;action=like&amp;height=80&amp;appId=341483205955970" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:280px; height:80px;" allowTransparency="true"></iframe>
			<br>
			Revista Centro Copyright © 2013
		</div>
		<div class="six columns">
			<h2>Enlaces Directos</h2>
		<?php wp_nav_menu( array('theme_location' => 'secondary-menu', 'menu_class' => 'set', 'container' => 'false')); ?>
		</div>
		
		<div class="five columns">
			<h2>Quienes Somos</h2>
			<p class="med">Centro Revista, surge con la necesidad de crear un medio
publicitario con contenido relevante y entretenido de carácter social, así como de dar a conocer las marcas más importantes para la región Sur de Jalisco. 
</p>
		</div>
	</div>
	<?php wp_footer(); ?>
</div>
	<!-- container -->


<!-- End Document
================================================== -->
</body>
</html>