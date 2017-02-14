<?php $dataEvent = new DateTime(get_field('data')); 
	$now = new DateTime(date('Ymd'));
	if($dataEvent >= $now) { ?>
		<div class="sm-6-12 md-4-12">
			<div class="event-item">
				<h2 class="title"><?php the_title(); ?></h2>
				<time class="card_content-time event-data" datatime="2017-01-10"><i class="fa fa-calendar-o" aria-hidden="true"></i> <?php echo $dataEvent->format('d \d\e F \d\e Y') ?></time>
				<p class="event-local"><i class="fa fa-map-marker" aria-hidden="true"></i> <?php echo get_field('local')?></p>
				<a href="<?php echo get_the_permalink(); ?>" class="btn btn-theme btn-block">Ver Detalhes</a>
			</div>
		</div>
	<?php }
?>
