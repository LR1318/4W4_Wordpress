<?php
/**
 * Modèle par défaut
 * 
 */
?>
<?php get_header(); ?>


    <main class="site__main">
        
        
        
        <section class="section__galerie">
            
            
            
            
            <!-- <section class="enfant_machin"> -->
                
                <?php   
        $la_categorie = "4w4";
        if(in_category('galerie')) {
            $la_categorie= "galerie";
        }
        
        get_template_part('templates-parts/categorie', $la_categorie);
        
        
        
        ?>
        </section>
        
        <section class="blocflex">
            <?php
        if (have_posts()): 
            while (have_posts()) : the_post(); 
            ?>
            <!-- <section class="enfant_machin"> -->
                
                <?php   
            $la_categorie = "4w4";
            
            
            get_template_part('templates-parts/categorie', $la_categorie);
            
            ?>
            
            <!-- </section> -->
            <?php  
            
            
        endwhile;
    endif;    
    ?>
    </section>
</main>
<section class="blocflex__menu">
    <h2>Evenement</h2>
    <?php  
        wp_nav_menu(array(
            "menu"=>"evenement",
            "container"=>"nav"
        ));
    
    ?>
    
    </section>

<?php get_footer(); ?>