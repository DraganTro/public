<footer id="site-footer" class="header-footer-group">
   <div bottles-drink>
      <img class="bottles-planty" src="http://planty.local/wp-content/uploads/2023/02/bouteilles_footer-removebg.png" alt="Boissons Planty" />
   </div>
   <div class="text-footer">
      <?php 
      wp_nav_menu( array(
         'theme_location' => 'footer', 
         'container' => false, 
         'menu_class' => 'footer-menu', 
      ) ); 
      ?>
   </div>
</footer><!-- #site-footer -->

<?php wp_footer(); ?>

</body>
</html>
