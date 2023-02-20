<footer class="site__footer">
    <section>Colonne 1</section>
    <section id="menu__bas_de_page"><?php wp_nav_menu(array(
        "menu" => "entete",
        "container" => "nav"
        )) ?></section>
    <section>Colonne 3</section>
</footer>
<?php wp_footer(); ?>
</body>
</html>