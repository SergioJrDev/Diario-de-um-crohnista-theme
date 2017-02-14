<div class="sm-6-12 md-4-12">
	<div class="card_item btn-middle">
		<div class="card_img">
			<figure>
				<a href="<?php echo get_the_permalink(); ?>"><img src="<?php echo the_post_thumbnail_url(); ?>" alt=""></a>
			</figure>
		</div>
		<div class="card_content">
			<a href="<?php echo get_the_permalink(); ?>"><h2 class="card_content-title"><?php the_title(); ?></h2></a>
			<p class="card_content-p border-bottom">
				<?php echo get_the_excerpt(); ?>
			</p>
			<time class="card_content-time small" datatime="2017-01-10"><i class="fa fa-calendar-o" aria-hidden="true"></i> <?php echo the_date(); ?></time>
			<a class="card_content-btn btn btn-theme" href="<?php echo get_the_permalink(); ?>">Ver mais</a>
		</div>
	</div>
</div>
