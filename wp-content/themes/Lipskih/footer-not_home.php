
<footer class="ms-footer">
      <div class="footer-contacts">
        <div class="container footer-c__info">
          <div class="ms-logo__default">
            <div class="logo-light main-header__logo--text">
	            <a href="/">Lipskhyh ART</a>
            </div>
          </div>

	        <ul class="socials">
                <?php
                if(is_active_sidebar( 'art_footer_social' )){
                    dynamic_sidebar( 'art_footer_social' );
                }
                ?>
        </ul></div>
      </div>
      <div class="footer-copyright">
        <p>
            <?php
            if(is_active_sidebar( 'art_footer' )){
                dynamic_sidebar( 'art_footer' );
            }
            ?>
        </p>
      </div>
    </footer>

<?php
    wp_footer();
?>
  </body>
</html>
