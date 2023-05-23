<aside class="site__aside">
    <h3>Ateliers</h3>
    <?php 
       
       wp_nav_menu(array(
        "menu" => "atelier",        
        "container" => "nav",
        the_post_thumbnail( 'thumbnail' )
      )); 
      ?>
</aside>