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

<body>
   <header class="site__header">
    <section class="site__header__logo">
        <?php the_custom_logo(); ?>
        <?php wp_nav_menu(array(
        "menu" => "entete",
        "container" => "nav"
        )) ?>
    </section>
    <section id="site__header__titre">

        <h1><a href="<?= bloginfo('url') ?>"><?= bloginfo('name') ?></a></h1>
        <h2><?= bloginfo('description') ?></h2>
    </section>
   </header>