<?php
/**
 * Modèle par défaut
 * 
 */
?>
<?php get_header(); ?>
<main class="site__main">
    
    <section class="blocflex">
    <?php
        if (have_posts()): 
            while (have_posts()) : the_post(); 
            ?>
            <!-- <section class="enfant_machin"> -->

                <?php   
            $la_categorie = "4w4";
            if(in_category('galerie')) {
                $la_categorie= "galerie";
            }
            
            get_template_part('templates-parts/categorie', $la_categorie);
            
            ?>
            
            <!-- </section> -->
            <?php  
            
            
            endwhile;
            endif;    
            ?>
    </section>
</main>

<?php get_footer(); ?>