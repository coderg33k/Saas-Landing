<?php  
/**  
* Template Name:Home  
*  
* @package Saas-Landing
*  
*/  
?>  
<?php get_header(); ?>
<div class="about">

    <?php

        while ( have_posts() ) :
            the_post();
           
            get_template_part( 'template-parts/content', 'About' );
           
                       
        endwhile; // End of the loop.
    ?>
   
</div>

<?php get_footer();?>