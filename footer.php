	<footer>
		 <!--FOOER AREA-->
    <div class="footer-area" id="contact">
        <div class="footer-area-bg" data-stellar-background-ratio="0.6"></div>
        <div class="container wow fadeIn">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <div class="footer-top section-padding text-center">
                        <div class="footer-logo">
                            <a href="#"><img src="img/main_logo.png" alt=""></a>
                        </div>
                        <div class="footer-address">
                        	<?php if (get_theme_mod('address')): ?>
                            	<p><?php echo get_theme_mod('address') ?></p>
                        	<?php endif ?>
                            <?php if (get_theme_mod('email')): ?>
                            	<p><a href="mailto:<?php echo get_theme_mod( 'email')   ?>"><?php echo get_theme_mod( 'email')   ?></a></p>
                            <?php endif ?>
                            <?php if (get_theme_mod('phone')): ?>
                            	<p><a href="callto:<?php echo get_theme_mod( 'phone')   ?>"><?php echo get_theme_mod( 'phone')   ?></a></p>
                            <?php endif ?>	
                        </div>
                        <?php get_template_part( 'social-footer'); ?>
                        
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                    <div class="footer-menu">
                        <ul>
                            <li><a href="#">Teams of use</a></li>
                            <li><a href="#">Privicy Policy</a></li>
                            <li><a href="#">SiteMap</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                    <div class="footer-copyright">
                        <p>&copy; 2018 <a href="#">Metro cafe</a> Todos los derechos reservados.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
	</footer>
	<?php wp_footer(); ?>
</body>
</html>