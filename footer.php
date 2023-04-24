<footer class="site__footer">
    <section>
        
    </section>
    <section><div class="logomenu">
               <?php the_custom_logo(); ?>
            </div>
            <div class="widget2">
    <?php dynamic_sidebar( 'widget2' ); ?>
</div></section>
    <section id="menu__bas_de_page"><?php wp_nav_menu(array(
        "menu" => "entete",
        "container" => "nav"
        )) ?></section>
    <section>
    <div class="footer">
    <?php dynamic_sidebar( 'footer' ); ?>
</div>
    </section>
</footer>
<?php wp_footer(); ?>
</body>
</html>