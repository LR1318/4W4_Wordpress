<?php 
/**
 * Modèle par défaut
 * 
 */
?>
<?php get_header(); ?>
<main>
    <h3>Front-page</h3>
    <?php
    
        if(have_posts()): 
            while (have_posts()) : the_post(); ?>
                <h1><a href="<?php echo get_permalink();?>"><?php echo get_the_title();?></a> </h1>
                        
                <?php 
                    //the_content();//affiche le contenu complet
                    //the_excerpt();  // affiche un extrait du contenu
                  
                    echo(wp_trim_words(get_the_excerpt(),10,"&#10148"));
                  
                ?>
                <hr>
                <?php   
            endwhile;
            endif;
            
            ?>
            
</main>
<?php get_footer(); ?>
