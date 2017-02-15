<div class="sidebar">
	<div class="sidebar-item">
		<h2 class="sidebar-title"><i class="fa fa-address-card-o" aria-hidden="true"></i> Posts Recentes</h2>
		<?php
			$query = new WP_Query([ 'posts_per_page'=> 3]);
			while($query->have_posts()) { $query->the_post(); ?>
				<div class="widget">
					<div class="sidebar-item-content">
						<a href="#"><h2 class="card_content-title"><?php the_title(); ?></h2>
						</a>
					</div>
				</div>
			<?php }
		?>
	</div>
	<div class="sidebar-item">
		<h2 class="sidebar-title"><i class="fa fa-list" aria-hidden="true"></i> Categorias</h2>
		<div class="widget widget-cat">
			<ul>
				<?php
					$args = array(
						'hide_empty' => false
					);

					$terms = get_terms('category', $args);
					foreach($terms as $term) { ?>
						<li class="list-itens"><a href="<?php echo esc_url( get_term_link( $term ) ) ?>" class=" <?php echo ( $obj->term_id == $term->term_id ? 'btn-default' : '' ) ?>"><?php echo $term->name ?></a></li>
				<?php }	?>
			</ul>
		</div>
	</div>
	<div class="sidebar-item">
		<h2 class="sidebar-title"><i class="fa fa-users" aria-hidden="true"></i> Parceiros</h2>
		<div class="widget-partness">
			<?php
				$query = new WP_Query([ 'posts_per_page'=> 5, 'post_type' => 'parceiros']);
				while($query->have_posts()) { $query->the_post();
					get_template_part('includes/card', 'parceiros');
				}
			?>
		</div>
	</div>
</div>
