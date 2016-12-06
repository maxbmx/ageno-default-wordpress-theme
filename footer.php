<div class="container footer-widget-area" >
  <?php dynamic_sidebar('footer-widget-area'); ?>
</div>

<footer id="footer" class="container">
  <div class="row">
    <div class="col-md-6">
      <p class="copy">© <?php echo date('Y'); ?>, <?php bloginfo('name'); ?></p>
      <p class="author">Theme by <a href="http://ageno.pl">Ageno.pl</a></p>
    </div>
    <div class="col-md-6">
      <p class="social">
        <?= ageno_dwt_social(); ?>
      </p>







    </div>
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>



