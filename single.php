<?php
/**
 * Modèle par défaut
 * 
 */
?>
<?php get_header(); ?>
<main class="page__single">
<h3>single.php</h3>
<?php
    if (have_posts()): 
        while (have_posts()) : the_post();
        the_title('<h1>','</h1>');
            the_post_thumbnail( 'full' );
            the_content(); ?>
            <hr>
        <?php endwhile;
    endif;
?>

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

