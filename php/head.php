  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <?php echo Theme::headTitle(); ?>
  <?php echo Theme::headDescription(); ?>
  <?php echo Theme::css('css/style.css'); ?>
  

  <link rel="icon" href="favicon.ico" type="image/x-icon">
  <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
  <link rel="manifest" href="site.webmanifest">

  <!-- Load Bludit Plugins: Site head -->
  <?php Theme::plugins('siteHead'); ?>
