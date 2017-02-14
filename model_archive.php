<?php 
	// Template Name: Todos os Posts
?>
<?php get_header(); ?>
		<section class="archive banner single-content space-default">
			<div class="container">
				<h2 class="section-title">Todos as publicações</h2>
				<div class="column event">
					<?php $query = new WP_Query([ 'posts_per_page'=> -1]);
						while($query->have_posts()) { $query->the_post();
							get_template_part('includes/card', 'posts');
						}; ?>
				</div>
			</div>
		</section>
<?php get_footer(); ?>
