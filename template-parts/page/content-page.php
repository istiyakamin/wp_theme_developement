
<h1><?php the_title(); ?></h1>
<?php
the_content();

wp_link_pages(array(
	'before' => '<div class="page-links">' . __( 'Pages:', 'twentyseventeen' ),
	'after'  => '</div>',
));

 ?>