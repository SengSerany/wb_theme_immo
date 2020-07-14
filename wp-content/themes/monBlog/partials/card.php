
<div class="col-sm-4">
    <div class="card" style="width: 18rem;">
        <?php the_post_thumbnail('card-header', ['class' => 'card-img-top', 'alt' => '', 'style' => 'height: auto;']) ?>
        <div class="card-body">
            <h5 class="card-title"><?php the_title() ?></h5>
            <h6 class="card-subtitle mb-2 text-muted">Publié le: <?php the_date() ?></h6>
            <ul>
                <?php
                    the_terms(get_the_ID(), 'sport', '<li>', '</li><li>', '</li>');
                ?>
            </ul>
            <p class="card-text"><?php the_excerpt() ?></p>
            <a href="<?php the_permalink() ?>" class="card-link">Voir plus...</a>
        </div>
    </div>
</div>