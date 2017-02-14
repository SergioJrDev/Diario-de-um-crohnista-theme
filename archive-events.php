<?php get_header(); ?>
		<section class="archive banner single-content space-default">
			<div class="container">
				<h2 class="section-title">Todos os Eventos</h2>
				<div class="column event">
					<?php while(have_posts()): the_post(); 
						get_template_part('includes/card', 'event');
					endwhile; ?>
				</div>
			</div>
		</section>
<?php get_footer(); ?>
