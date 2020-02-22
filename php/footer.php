
<p style="float: right;">
  <a href="https://www.uberspace.de" target="_blank">hosted on asteroids</a>
  &ndash;
  <a href="http://www.adfreeblog.org" target="_blank">ad free blog</a>
  &ndash;
  <a href="http://www.bludit.com" target="_blank">made with bludit</a>
  &ndash;
  <a href="https://paypal.me/cblte" target="_blank">say thanks</a>
  &ndash;
<?php
    // Class name of the plugin
    $className = 'pluginRSS';

    if (pluginActivated($className)) {
        echo '<a href="rss.xml" target="_blank">rss</a>';
    }
?>
</p>
<p style="clear:both; ">
<?php echo $site->footer(); ?>
</p>