    </div>
    <?php wp_nav_menu([
        'theme_location' => 'footer',
        'container' => false,
        'menu_class' => 'navbar-nav mr-auto'
    ]); ?>
    <footer>
        <div class="container">
            <div class="row my-4">
                <div class="col-3">
                    <?=
                        the_widget(YoutubeWidget::class, ['youtube' => 'Kx6lJ1IHhjs', ['before_widget' => '', 'after_widget' => ''] ]);
                    ?>
                </div>
                <div class="col-3">
                    <div class="container">
                        <?= get_option('agence_horaire'); ?>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <?php wp_footer() ?>
</body>
</html>