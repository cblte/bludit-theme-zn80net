<div class="site-branding">
  <h1 class="site-title"><a href="/"><?php echo $site->title() ?></a></h1>
  <p class="site-slogan"><?php echo $site->slogan() ?></p>
</div>

<div class="site-navigation">
  <!-- Static pages -->
  <p>
    <?php foreach ($staticContent as $staticPage): ?>
    <a class="site-static-link" href="<?php echo $staticPage->permalink() ?>"><?php echo $staticPage->title() ?></a>
    <?php endforeach ?>
  </p>
  <!-- Social Networks -->
  <p>
    <?php foreach (Theme::socialNetworks() as $key=>$label): ?>
    <a class="site-social-link" href="<?php echo $site->{$key}(); ?>" target="_blank">
      <i class="lab la-twitter-square"></i>
      <img class="site-social-svg-icon" src="<?php echo DOMAIN_THEME.'img/social/'.$key.'.svg' ?>" alt="<?php echo $label ?>" />
      <span class="site-social-label"><?php echo $label; ?></span>
    </a>
    <?php endforeach; ?>
  </p>
</div>