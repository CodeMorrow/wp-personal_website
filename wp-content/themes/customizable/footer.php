<?php
/**
 * The template for displaying the footer
**/ 
?>
<footer class="main_footer">
  <div class="top_footer footer">
    <div class="container customize-container">
        <!--Link to My Facebook Page-->    
      <div id="facebook" class="footer__link">
          <a class="social_media" href="https://www.facebook.com/JMorrow16/" target="_blank"><img class="footer__link__img" src="http://localhost:8888/wp-personal_website/wp-content/uploads/2016/08/facebook.png" alt="Facebook"></a>
      </div>
      
      <!--Link to My Twitter Page-->
      <div id="twitter" class="footer__link">
          <a class="social_media" href="https://twitter.com/CodeMorrow" target="_blank"><img class="footer__link__img" src="http://localhost:8888/wp-personal_website/wp-content/uploads/2016/08/twitter.png" alt="Twitter"></a>
       </div>
      
      <!--Link to My Github Page-->
      <div id="github" class="footer__link">
          <a class="social_media" href="https://github.com/CodeMorrow" target="_blank"><img class="footer__link__img" src="http://localhost:8888/wp-personal_website/wp-content/uploads/2016/08/github.png" alt="Github"></a>
      </div>

      <!--Link to My LinkedIn Page-->
      <div id="linkedin" class="footer__link">
          <a class="social_media" href="https://www.linkedin.com/in/john-morrow-758545111" target="_blank"><img class="footer__link__img" src="http://localhost:8888/wp-personal_website/wp-content/uploads/2016/08/linkedin.png" alt="LinkedIn"></a>
      </div>

      <!--Link to E-mail me-->
      <div id="email" class="footer__link">
        <a href="mailto:codemorrow@yahoo.com?Subject=Hey%20John,%20I%20checked%20out%20your%20website%20and%20wanted%20to%20reach%20out" target="_top"><img class="footer__link__img" src="http://localhost:8888/wp-personal_website/wp-content/uploads/2016/08/email.png" alt="Email"></a>
      </div>
    </div>
  </div>
  <div class="bottom_footer">
    <div class="container customize-container">
      <p><?php
  global $customizable_options;
   if(!empty($customizable_options['footertext']))
  {
	  echo wp_filter_nohtml_kses($customizable_options['footertext']).' ';
	  printf( __( 'Powered by %1$s and %2$s', 'customizable' ), '<a href="http://wordpress.org" target="_blank">WordPress</a>', '<a href="http://fasterthemes.com/wordpress-themes/customizable" target="_blank">Customizable</a>' ); 
	}
	else
	{
		printf( __( 'Powered by %1$s and %2$s', 'customizable' ), '<a href="http://wordpress.org" target="_blank">WordPress</a>', '<a href="http://fasterthemes.com/wordpress-themes/customizable" target="_blank">Customizable</a>' ); 
	}?></p>
    <?php wp_nav_menu(array('theme_location'  => 'secondary', 'fallback_cb' => false)); ?>
    </div>
  </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
