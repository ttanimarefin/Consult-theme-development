<?php get_header();?>
<?php
while (have_posts()) : the_post();

get_template_part( 'template-parts/page/content','page' );
       if(comments_open() || get_comments_number()):
                    comments_template();
       endif;

    endwhile;


// If comments are open or we have at least one comment, load up the comment template.


?>
<php get_footer();?>