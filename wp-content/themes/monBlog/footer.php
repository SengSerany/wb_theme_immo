    </div>
    <?php wp_nav_menu([
        'theme_location' => 'footer',
        'container' => false,
        'menu_class' => 'navbar-nav mr-auto'
    ]) ?>
    <footer>
        <div class="container">
            <?= get_option('agence_horaire'); ?>
        </div>
    </footer>
    <?php wp_footer() ?>
</body>
</html>