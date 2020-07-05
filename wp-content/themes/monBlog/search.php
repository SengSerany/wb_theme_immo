<?php get_header() ?>

<form class="form-inline">
  <input type="search" name="s" value="<?= get_search_query()?>" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder="Votre recherche">

  <div class="form-check mb-2 mr-sm-2">
    <input class="form-check-input" type="checkbox" name="sponso" value="1" id="inlineFormCheck" <?= checked('1', get_query_var(('sponso'))) ?>>
    <label class="form-check-label" for="inlineFormCheck">
      Article sponsorisé seulement
    </label>
  </div>

  <button type="submit" class="btn btn-primary mb-2">Rechercher</button>
</form>

<h1 class="mb-4">Resultat de votre recherche: "<?= get_search_query()?>"</h1>

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