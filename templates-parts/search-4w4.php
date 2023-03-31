<section class="chaque_recherche">
            
            
            <h4><a href="<?php the_permalink(); ?>"> <?= get_the_title(''); ?></a></h4>
            <div class="contenu_recherche">
                
                <?php
            //the_content();
            echo wp_trim_words(get_the_excerpt(), 50, "[...]");
            
            ?>
            </div>
        </section>
            <hr>