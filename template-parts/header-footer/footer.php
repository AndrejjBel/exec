<footer id="colophon" class="exec-footer container">
    <div class="exec-footer__logo">
        <?php exec_custom_logo(); ?>
    </div><!-- .site-info -->
    <div class="exec-footer__nav">
        <?php
        $theme_location = 'menu-2';
        if ( is_page( 'en' ) ) {
            $theme_location = 'menu-4';
        }
        wp_nav_menu(
            array(
                'theme_location' => $theme_location,
                'menu_id'        => 'primary-menu',
            )
        );
        ?>
    </div>
    <div class="exec-footer__copyright">
        <?php if ( is_page( 'en' ) ) { ?>
            <div class="exec-footer__copyright__item">© EXEC 4.0 2024</div>
            <div class="exec-footer__copyright__item">
                <a href="#">Data Policy</a>
            </div>
            <div class="exec-footer__copyright__item">121099 Moscow, 2nd Smolensky lane, 1/4</div>
        <?php } else { ?>
            <div class="exec-footer__copyright__item">© EXEC 4.0 2024</div>
            <div class="exec-footer__copyright__item">
                <a href="#">Политика в отношении данных</a>
            </div>
            <div class="exec-footer__copyright__item">121099 Москва, 2-й Смоленский переулок, 1/4</div>
        <?php } ?>
    </div>
</footer><!-- #colophon -->
