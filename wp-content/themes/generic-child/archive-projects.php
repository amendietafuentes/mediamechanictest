<?php get_header(); ?>

<?php 
	//Get template part of Custom Post Searchs
	get_template_part('custom-posts-search');
?>
	<div id="projects-content" class="container">
		<div class="row">
		<?php
		
		// the query to set the posts per page to 8
		$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

		$args = array( 
			"post_type" => "projects", 
			"posts_per_page" => 6,
			"orderby" => "date",
			"paged" => $paged,
			"order" => "ASC"
		);

		$query = new WP_Query( $args );
		$count = 0;

		if($query->have_posts()) : 
		
		while($query->have_posts()) : $query->the_post();
		
		?>
		
		<?php if($count <= 6):?>
	    	
			<div class="col-4 item-results">
				<h1 class="title"><?php echo the_title(); ?></h1>

				<?php echo get_the_post_thumbnail(); ?>

				<div class="entry-content">
					<p><?php the_excerpt();?></p>
				</div>

				<div class="category-projects">
					<?php 
						//Returns All Term Items for "my_taxonomy".
						$term_list = wp_get_post_terms( $post->ID, 'category', array( 'fields' => 'names' ) );
					?>
					<?php echo "<ul class='list-categories'>";?>
					<p class="list-category-title">Categories: </p>
					<?php foreach($term_list as $term):?> 
					<?php echo "<li>".$term."</li>"; ?>
					<?php endforeach;?>
					<?php echo "</ul>";?>
				</div>

				<div class="state-projects">
					<?php 
						//Returns All Term Items for "my_taxonomy".
						$state_term_list = wp_get_post_terms( $post->ID, 'state', array( 'fields' => 'names' ) );
					?>
					<?php echo "<ul class='list-state'>";?>
					<p class="list-state-title">State: </p>
					<?php foreach($state_term_list as $state_term):?> 
					<?php echo "<li>".$state_term."</li>"; ?>
					<?php endforeach;?>
					<?php echo "</ul>";?>
				</div>

				<a href="<?php echo get_permalink(); ?>" class="btn-more">Read more</a>

			</div>
		<?php endif;?>
		
		<?php 
		    $count++;
			endwhile;
			wp_reset_query();
		?>
		<?php else: ?>
			<p>Sorry, no posts found.</p>
		<?php endif;?>
		</div>
	</div>
	<div class="pagination">
		
		<!-- Pagination Projects -->
		<?php if( get_previous_posts_link() ) : ?>
		<button class="prev-btn"><?php previous_posts_link("&larr; Proyectos Anteriores");?></button>
		<?php endif;?>
		<?php if( get_next_posts_link() ) : ?>
		<button class="next-btn"><?php next_posts_link("Proyectos Siguientes &rarr;", 0 );?></button>
	<?php endif;?>
	</div>
<?php get_sidebar();?>
<?php get_footer(); ?>