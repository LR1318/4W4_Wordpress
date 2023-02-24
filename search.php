<?php
/**
 * Modèle par défaut
 * 
 */
?>
<?php get_header(); ?>
<main>
<h3>search.php</h3>
<h3>Resultat de la recherche</h3>
<?php
    if (have_posts()): 
        while (have_posts()) : the_post();?>
        <section class="chaque_recherche">
            
            
            <h4><a href="<?php the_permalink(); ?>"> <?= get_the_title(''); ?></a></h4>
            <div class="contenu_recherche">
                
                <?php
            //the_content();
            echo wp_trim_words(get_the_excerpt(), 50, "[...]");
            
            ?>
            </div>
        </section>
            <hr>
        <?php endwhile;
    endif;
?>
</main>

<?php get_footer(); ?>