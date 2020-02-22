
<!-- A single blog post -->
<article>
  <!-- Load Bludit Plugins: Page Begin -->
  <?php Theme::plugins('pageBegin'); ?>

  <?php if ($page->coverImage()): ?>
	<img class="" alt="Cover Image for <?php echo $page->title(); ?>" src="<?php echo $page->coverImage(); ?>"/>
	<?php endif ?>

  <h2>
    <?php echo $page->title(); ?>
  </h2>
  <?php if (!$page->isStatic() && !$url->notFound()):  ?>
    <small><?php echo $page->date(); ?> &ndash; <?php echo $L->get('Reading time') . ': ' . $page->readingTime(); ?></small>
  <?php endif ?>

  <!-- Full content -->
  <?php echo $page->content(); ?>


  <!-- Load Bludit Plugins: Page End -->
  <?php Theme::plugins('pageEnd'); ?>
</article>

<hr />
