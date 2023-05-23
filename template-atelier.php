<?php

/**
 * Template name: template-atelier
 * 
 * 
 * 
 *  */    
 get_header(); ?>
<main class="site__main">
<?php
if ( have_posts() ) : the_post(); ?>
<h1><?= get_the_title(); ?></h1>
<?php the_content();?>
<table style="width:50%">
  <tr>
    <td>Formateur</td>
    <td>Date de l'atelier</td>
    <td>Heure</td>
    <td>Durée</td>
    <td>Local</td>
  </tr>
  <tr>
    <td><?php the_field('formateur'); ?></td>
    <td><?php the_field('date_de_latelier'); ?></td>
    <td><?php the_field('heure_de_la_formation'); ?></td>
    <td><?php the_field('duree'); ?></td>
    <td><?php the_field('local'); ?></td>


  </tr>
</table>
   
<?php endif;?>
</main><!-- #main -->
<?php
get_footer();