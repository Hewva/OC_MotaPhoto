<footer id="site-footer" class="menu-footer-container"> 
    <!-- Pour afficher le secondary menu crée dans WP -->
<?php wp_nav_menu(array('theme_location' => 'footer'));?>
        </footer><!-- #site-footer -->
    <!-- Pour afficher le modale-contact -->
    <?php get_template_part( 'templates_part/modale-contact' ); ?>
      <?php wp_footer(); ?>

   </body>
</html>