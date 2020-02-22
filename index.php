<!DOCTYPE html>
<html lang="<?php echo Theme::lang() ?>">

<head>
<?php include(THEME_DIR_PHP.'head.php'); ?>
</head>

<body>
  
  <!-- Load Bludit Plugins: Site Body Begin -->
  <?php Theme::plugins('siteBodyBegin');  ?>
  
  <!-- Load header which contains title, slogan, menu and social links -->
  <header class="site-header">
  <?php include(THEME_DIR_PHP . 'header.php'); ?>
  </header>
  
  
  <main style="clear:both;">
  <?php
  // Bludit content are pages
  // But if you order the content by date
  // These pages works as posts

  // $WHERE_AM_I variable detect where the user is browsing
  // If the user is watching a particular page/post the variable takes the value "page"
  // If the user is watching the frontpage the variable takes the value "home"
  if ($WHERE_AM_I == 'page') {
    // fix coming from https://forum.bludit.org/viewtopic.php?p=7049&sid=64c6ba5330df05a27b5d19c7afad769f#p7049
    if ($page->slug() == 'archive') {
      include(THEME_DIR_PHP.'archive.php');
    } else {
      include(THEME_DIR_PHP.'page.php');
      }
  } else {
    include(THEME_DIR_PHP.'home.php');
  } 
  ?>
  </main>

  <!-- Footer -->
  <footer>
  <?php include(THEME_DIR_PHP.'footer.php'); ?>
  </footer>

	<!-- Load Bludit Plugins: Site Body End -->
  <?php Theme::plugins('siteBodyEnd'); ?>
</body>
</html>