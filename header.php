<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body class="site">
   <header class="site__entete">
    <section class="site__header__logo">
        <div class="logomenu">
        <?php the_custom_logo(); ?>
        </div>
        <div class="site__entete">
            <?php wp_nav_menu(array(
                "menu" => "entete",
                "container" => "nav"
                )) ?>
        </div>
        <?php  get_search_form() ?>
    </section>
    <section id="site__header__titre">

        <h1><a href="<?= bloginfo('url') ?>"><?= bloginfo('name') ?></a></h1>
        <h2><?= bloginfo('description') ?></h2>
    </section>
   </header>
<aside class="site__aside">
    <h3>Menu secondaire</h3>
    <?php wp_nav_menu(array(
        "menu" => "aside",
        "container" => "nav"  
    )); ?>
</aside>
