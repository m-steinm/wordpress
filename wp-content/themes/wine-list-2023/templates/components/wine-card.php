<wine-card>
	<h1 class="name"><?php the_field('name'); ?></h1>
	<h3 class="grape"><?php the_field('grape'); ?></h3>
	<h3 class="tasting_notes"><?php the_field('tasting_notes'); ?></h3>
	<h3 class="region"><?php the_field('region'); ?></h3>
	<h3 class="price"><?php the_field('price'); ?></h3>

	<a href="<?php the_permalink(); ?>">More</a>

</wine-card>