  <!-- footer -->
  <footer>
      <div class="container">
          <div class="footer">
              <div class="footer-content footer-meditative">
                  <?php
                    dynamic_sidebar('meditative');
                    ?>
              </div>
              <div class="footer-content popular-links">
                  <?php
                    dynamic_sidebar('popular_links');
                    ?>
              </div>
              <div class="footer-content quick-links">
                  <?php
                    dynamic_sidebar('quick_links');
                    ?>
              </div>
              <div class="footer-content have-questions">
                  <?php
                    dynamic_sidebar('have_a_question');
                    ?>
              </div>
          </div>
      </div>
  </footer>
  <?php wp_footer(); ?>
  </body>

  </html>