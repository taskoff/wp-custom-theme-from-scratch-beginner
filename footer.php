        <footer>
            <div class="container">
                    <div class="footer-items-wrapper row">
                        <div class="footer-logo col-xs-12 col-sm-3">
                            <?php if ( ! has_custom_logo() ) { ?>
                                <a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a>
                            <?php
                            } else {
                                the_custom_logo();
                            }
                            ?>
                        </div>
                        <div class="footer-menu-wrapper col-xs-12 col-sm-3">
                            <h5>Меню</h5>
                            <?php wp_nav_menu(array('theme_location'=>'secondary')); ?>
                        </div>
                        <div class="contacts-wrapper col-xs-12 col-sm-3">
                            <h5>Контакти</h5>
                            <p>+359 000 000 000</p>
                            <p>Благоевград 2700</p>  
                            <p>test@email.com</p>                      </div>
                        <div class="col-xs-12 col-sm-3">
                            <h5>Последвайте ни</h5>
                            <?php get_sidebar('footer-widget-area'); ?>
                        </div>

                    </div>
            </div>
            <div class="bottom-footer-wrapper">
                <div class="container">
                    <p>2021 Всички права запазени!</p>
                </div>
            </div>
        </footer>
        <?php wp_footer(); ?>
    </body>
</html>