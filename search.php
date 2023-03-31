<?php
/**
 * Modèle par défaut
 * 
 */



?>
<?php 

get_header(); 
?>
<main>
<h3>search.php</h3>
<h3 id="titre_page_recherche">Resultat de la recherche</h3>
<?php
    
    if (have_posts()): 
        while (have_posts()) : the_post(); 
        ?>
        <!-- <section class="enfant_machin"> -->

            <?php   
        $la_categorie = "4w4";
        
        
        get_template_part('templates-parts/search', $la_categorie);
        
        ?>
        
        <!-- </section> -->
        <?php  
        
        
        endwhile;
        endif;    
        
   
?>
</main>

<?php get_footer(); ?>