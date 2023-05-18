<?php
/**
 * Modèle category par défaut
 * 
 */
?>
<?php get_header(); ?>
<main class="site__main">
   <section class="blocflex">
      <?php
      $category = get_queried_object();
      $args = array(
         'category_name' => $category->slug,
         'orderby' => 'title',
         'order' => 'ASC'
      );
      $query = new WP_Query( $args );
      if ( $query->have_posts() ) :
         while ( $query->have_posts() ) : $query->the_post(); ?>
         <!-- slug peut avoir les valeurs qui se trouve dans les catégories wordpress -->
            <?php get_template_part('templates-parts/categorie', $category->slug);  ?>
         <?php endwhile; ?>
      <?php endif;
      wp_reset_postdata();?>
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