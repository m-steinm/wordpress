<?php get_header(); ?>

<?php 
	if ( is_page('home') ) {
		echo "<h1>Home</h1>";
	}

	if ( is_page('list') ) {
		$args = array(
			'post_type' => 'wines',
		);

		$loop = new WP_Query( $args);

		while ( $loop->have_posts() ) : $loop->the_post();
			 include('templates/components/wine-card.php')  ;
		endwhile;

		wp_reset_postdata();
	}

		if ( is_singular('wines') ) {
		echo "<h1>Single Wine</h1>";
	}

	if ( is_page('regions') ) {
	$args = array(
		'post_type' => 'regions',
	);

	$loop = new WP_Query( $args);

	while ( $loop->have_posts() ) : $loop->the_post();
		 include('templates/components/region-card.php')  ;
	endwhile;

	wp_reset_postdata();
	}

?>

<?php get_footer(); ?>