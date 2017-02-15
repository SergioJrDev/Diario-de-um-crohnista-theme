<?php
	// Template Name: Todos os Posts
?>
<?php get_header(); ?>
		<section class="archive banner single-content space-default">
			<div class="container">
				<h2 class="section-title">Todos as publicações</h2>
				<ul class="breadcrumb">
					<li><a href="<?php echo home_url(); ?>">Início</a></li>
					<li><a href="<?php echo home_url('/todos-os-posts'); ?>"><i class="fa fa-angle-right" aria-hidden="true"></i> Todos os Posts</a></li>
				</ul>
				<div class="column event">
					<?php $query = new WP_Query([ 'posts_per_page'=> -1]);
						while($query->have_posts()) { $query->the_post();
							get_template_part('includes/card', 'posts');
						}; ?>
				</div>
			</div>
		</section>
<?php get_footer(); ?>
