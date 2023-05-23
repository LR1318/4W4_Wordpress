
<?php
    
    $titre = get_the_title();
    if(substr($titre,0,1)=='0'){
        $titre=substr($titre,1);
    }
    
    ?>
    
<article class="blocflex__article">
    <!-- note a moi remplace la classe par .enfant_machin si tu veut retrouver caroussel css -->

   <?php the_post_thumbnail( 'thumbnail' );   ?> 
               <h4><a href="<?php the_permalink(); ?>"> <?= $titre ?></a></h4>
               <p><?= wp_trim_words(get_the_excerpt(), 15) ?></p>
</article>