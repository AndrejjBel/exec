<?php
    $theme_location = 'menu-1';
    if ( is_page( 'en' ) ) {
        $theme_location = 'menu-3';
    }
?>
<div class="exec-top"
    style="">
    <header id="masthead" class="exec-header container">
        <div class="exec-header__branding">
            <?php
            // the_custom_logo();
            if ( is_front_page() || is_page( 'en' ) ) :
                ?>
                <div class="exec-header__branding__site-title">
                    <a href="#" rel="home" class="logo-img-link">
                        <?php exec_custom_logo(); ?>
                    </a>
                </div>
                <?php
                else :
                    ?>
                    <div class="exec-header__branding__site-title">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                            <?php exec_custom_logo(); ?>
                        </a>
                    </div>
                    <?php
                endif;
                ?>
            </div>

            <nav id="exec-navigation" class="exec-header__navigation">
                <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                        <path d="M0 7.3335H32" stroke="#A62B22" stroke-width="3"/>
                        <path d="M0 16H32" stroke="#A62B22" stroke-width="3"/>
                        <path d="M0 24.6665H32" stroke="#A62B22" stroke-width="3"/>
                    </svg>
                </button>
                <button class="menu-close" aria-controls="primary-menu" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                        <path d="M4.68628 27.3135L27.3137 4.68606" stroke="#A62B22" stroke-width="3"/>
                        <path d="M4.68628 4.68652L27.3137 27.3139" stroke="#A62B22" stroke-width="3"/>
                    </svg>
                </button>
                <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => $theme_location,
                            'menu_id'        => 'primary-menu',
                        )
                    );
                ?>
            </nav>

            <div class="exec-header__locale">
                <?php if ( is_page( 'en' ) ) { ?>
                    <a href="/">Ru</a>
                <?php } else { ?>
                    <a href="/en">Eng</a>
                <?php } ?>
            </div>
        </header><!-- #masthead -->

        <div class="menu-primary-mobile-container">
            <?php
                wp_nav_menu(
                    array(
                        'theme_location' => $theme_location,
                        'menu_id'        => 'primary-menu-mobile',
                        'menu_class'     => 'primary-menu-mobile',
                        'container'      => false,
                    )
                );
            ?>
            <div class="menu-primary-mobile-container__contacts">
                <span>Для связи</span>
                <a class="fs44 ff-mediator" href="mailto:info@execfourzero.com">info@execfourzero.com</a>
            </div>
            <div class="menu-primary-mobile-container__link">
                <a href="#" class="prymary menu-mobile fs20 width100">Перейти на платформу</a>
            </div>
        </div>

        <div class="exec-top__hero container">
            <h1 class="exec-top__hero__title exec-title ff-mediator"><?php echo $post->title;?></h1>
            <div class="exec-top__hero__subtitle fs20"><?php echo $post->subtitle;?></div>
            <div class="exec-top__hero__link">
                <a href="<?php echo $post->btn_link;?>" class="prymary fs20"><?php echo $post->btn_text;?></a>
            </div>
        </div>

        <div class="exec-top__info fs20 container">
            <div class="exec-top__info__item"><?php echo $post->info1;?></div>
            <div class="exec-top__info__item"><?php echo $post->info2;?></div>
            <div class="exec-top__info__item"><?php echo $post->info3;?></div>
        </div>

        <div id="services" class="exec-top__services container">
            <div class="exec-top__services__title exec-title ff-mediator"><?php echo $post->services_title;?></div>
            <div class="exec-top__services__subtitle fs20"><?php echo $post->services_subtitle;?></div>
        </div>
</div>
