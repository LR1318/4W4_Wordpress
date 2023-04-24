<footer class="site__footer">
    <section class="colonne1">

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
        </section>
        <section class="colonne2">

            <section>
                <div class="footer">
                    <?php dynamic_sidebar( 'footer' ); ?>
                </div>
                <div class="widget3">
            <?php dynamic_sidebar( 'widget3' ); ?>
        </div>
            </section>
        </section>
</footer>
<?php wp_footer(); ?>
</body>
</html>