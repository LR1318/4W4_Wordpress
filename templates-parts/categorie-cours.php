<?php
        $titre = get_the_title();
        $sigle = substr($titre,0,7);
        $titre_long = substr($titre,7,-5);
        $duree = "60"
        //strpos($titre,'(') permet de trouver la position du caractère '('
?>
    
<article class="blocflex__article">
        <!-- note a moi remplace la classe par .enfant_machin si tu veut retrouver caroussel css -->

    <h4><a href="<?php the_permalink(); ?>"> <?= $sigle ?></a></h4>
    <h5><?= $titre_long ?></h5>
    <p><?= wp_trim_words(get_the_excerpt(), 15) ?></p>
    <p><?php the_field('enseignant'); ?></p>
    <p><?php the_field('domaine'); ?></p>


</article>