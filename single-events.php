<?php get_header(); ?>
		<section class="banner single-content">
			<div class="container">
				<div class="column">
					<?php while(have_posts()): the_post(); ?>
						<div class="md-8-12 main">
							<?php
								if(has_post_thumbnail()) { ?>
									<figure class="thumbnail">
										<img src="<?php echo the_post_thumbnail_url(); ?>" alt="">
									</figure>
								<?php }
							?>
							<h2 class="post-title"><?php the_title(); ?></h2>
							<p><i class="fa fa-calendar-o" aria-hidden="true"></i>  Dia do Evento:
							<?php $dataEvent = new DateTime(get_field('data'));?>
							<time class="card_contenttime event-data" datatime="<?php echo $dataEvent->format('Y-m-d') ?>">
							<?php echo $dataEvent->format('d \d\e F \d\e Y'); ?></time></p>
							<p><i class="fa fa-map-marker" aria-hidden="true"></i>  Local:
							<?php echo get_field('local'); ?></p>
							<?php the_content(); ?>
						</div>
					<?php endwhile; ?>
					<div class="sm-12-1 md-4-12">
						<?php get_sidebar(); ?>
					</div>
				</div>
			</div>
		</section>
<?php get_footer(); ?>
