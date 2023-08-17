<region-card>
	<h1 class="area"><?php the_field('area'); ?></h1>
	<h3 class="climate"><?php the_field('climate'); ?></h3>
	<h3 class="grape_varieties"><?php the_field('grape_varieties'); ?></h3>
	<h3 class="notes"><?php the_field('notes'); ?></h3>
	<h3 class="soil_type"><?php the_field('soil_type'); ?></h3>

	<a href="<?php the_permalink(); ?>">More</a>

</region-card>