<?php get_header() ?>

<h1>Voir tout nos biens</h1>

<?php if (have_posts()) : ?>
    <div class="row">
        <?php while (have_posts()) : the_post(); ?>
            <?php get_template_part('partials/card', 'post'); ?>
        <?php endwhile; ?>
    </div>

    <?php my_theme_pagination() ?>
<?php else : ?>
    <h1>Pas d'articles !</h1>
<?php endif; ?>

<?php get_footer() ?>