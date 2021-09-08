        <footer>
            <div class="row">
                <div class="footer-logo col-xs-12 col-sm-4">
                    There is my footer
                </div>
                <div class="footer-menu-wrapper col-xs-12 col-sm-4">
                    <?php wp_nav_menu(array('theme_location'=>'secondary')); ?>
                </div>
                
                <div class="col-xs-12 col-sm-4">
                    <?php get_sidebar('footer-widget-area'); ?>
                </div>

            </div>
          
        </footer>
        <?php wp_footer(); ?>
    </body>
</html>