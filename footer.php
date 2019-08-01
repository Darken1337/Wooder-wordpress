    <div class="footer-wrapper">
      <div class="container">
        <footer class="footer" id="sectionFooter">
          <div class="footer-rights"><?php echo esc_html__(fw_get_db_customizer_option('footer_rights')); ?></div>
          <div class="logo"><?php bloginfo('name'); ?></div>
          <div class="designed-by"><?php __('Designed by'); ?> <span class="designed-by__author"><?php echo esc_html__(fw_get_db_customizer_option('footer_author')); ?></span></div>
        </footer>
      </div>
    </div>
    <?php wp_footer(); ?>
  </body>
</html>