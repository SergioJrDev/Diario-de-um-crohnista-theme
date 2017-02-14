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
							<p><time class="card_content-time event-data" datatime="2017-01-10"><i class="fa fa-calendar-o" aria-hidden="true"></i> <?php echo the_date(); ?></time>
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
