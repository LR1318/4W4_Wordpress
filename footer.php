<footer class="site__footer">
    <section><div class="logomenu">
               <?php the_custom_logo(); ?>
            </div></section>
    <section id="menu__bas_de_page"><?php wp_nav_menu(array(
        "menu" => "entete",
        "container" => "nav"
        )) ?></section>
    
</footer>
<?php wp_footer(); ?>
</body>
</html>