<?php

/**
 * Template name: template-atelier
 * 
 * 
 * 
 *  */    
 get_header(); ?>
<main class="site__main">
    <?php the_post_thumbnail( 'thumbnail' );   ?> 
    <?php
if ( have_posts() ) : the_post(); ?>
<h1><?= get_the_title(); ?></h1>
<?php the_content();?>
<table style="
  width: 50%;
  color: white;
  border: 1px solid white;">
  <tr>
    <td>Formateur</td>
    <td><?php the_field('formateur'); ?></td>

</tr>
<tr>
    <td>Date de l'atelier</td>
    <td><?php the_field('date_de_latelier'); ?></td>
    
    
</tr>
<tr>
    
    <td>Heure</td>
    <td><?php the_field('heure_de_la_formation'); ?></td>
</tr>
<tr>
    
    <td>Durée</td>
    <td><?php the_field('duree'); ?></td>
</tr>
<tr>
    <td>Local</td>
    <td><?php the_field('local'); ?></td>
    
    </tr>
</table>
   
<?php endif;?>
</main><!-- #main -->
<?php
get_footer();