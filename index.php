<?php get_header(); ?>
		<!-- <div class="container">
			<div class="owl-carousel owl-theme">
				<php
					$query = new WP_Query([ 'posts_per_page'=> 2]);
					while($query->have_posts()) { $query->the_post();
						if(get_field('img_slider')) {
							get_template_part('includes/slider', 'item');
						};
					}
				?>
			</div>
		</div> -->
		<section class="space-default">
			<div class="container">
				<h2 class="section-title">Últimos Posts</h2>
				<div class="card column">
					<?php
						$query = new WP_Query([ 'posts_per_page'=> 5]);
						while($query->have_posts()) { $query->the_post();
							get_template_part('includes/card', 'posts');
						}
					?>
				</div>
			</div>
		</section>
			<section class="space-default">
				<div class="container">
					<h2 class="section-title">Destaques</h2>
					<p class="title-descr">Todos nós já passamos por essa fase e sabemos como é, mas não se preocupe, quanto mais você conhecer a doença, mais fácil será aceita-la e controla-la. Acredito que seria bom você lêr os seguintes posts</p>
					<div class="card column">
						<?php
							$query = new WP_Query([ 'posts_per_page'=> 3, 'post__in' => array(93, 454, 399, 124)]);
							while($query->have_posts()) { $query->the_post();
								get_template_part('includes/card', 'featured');
							}
						?>
					</div>
				</div>
			</section>
			<section class="space-default">
				<div class="container">
					<h2 class="section-title">Eventos</h2>
					<div class="event column">
						<?php
							$query = new WP_Query([ 'posts_per_page'=> 5, 'post_type' => 'events']);
							while($query->have_posts()) { $query->the_post();
								get_template_part('includes/card', 'event');
							}
						?>
 					</div>
				</div>
			</section>
<?php get_footer(); ?>
