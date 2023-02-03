<!DOCTYPE html>
<html lang="fr-ca">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php  wp_head(); ?>
</head>
<body>
    <header>
        <?php  wp_nav_menu(array(
            "menu" => "entete"
        )) ?>
        <h1><a href="<?php  echo bloginfo('url') ?>"><?php  echo bloginfo('name') ?></a></h1>
        <h2><?php  echo bloginfo('description') ?></h2>
    </header>