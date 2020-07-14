<?php $sports = get_terms(['taxonomy' => 'sport']) ?>
<?php if(is_array($sports)): ?>
    <ul class="nav nav-pills my-4">
    <?php foreach($sports as $sport): ?>
        <li class="nav-item">
            <a href="<?= get_term_link($sport) ?>" class="nav-link <?= is_tax('sport', $sport->term_id) ? 'active' : '' ?>"> <?= $sport -> name ?> </a>
        </li>
    <?php endforeach; ?>
    </ul>
<?php endif; ?>

<?php // OR wp_list_categories(['taxonomy' => 'sport', 'title_li' => '']); ?>
