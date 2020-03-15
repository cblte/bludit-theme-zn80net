<!-- A single blog post -->
<article <?php if ($page->custom('link')) {?>class="link" <?php } ?>>
<!-- Load Bludit Plugins: Page Begin -->
<?php Theme::plugins('pageBegin');  ?>
	<h2>
		<?php if ($page->custom('link')) { ?>
		<a href="<?php echo $page->custom('link'); ?>"><?php echo $page->title(); ?></a> 
		<span class="linkarrow">→</span>
		<?php } else { ?>
		<a href="<?php echo $page->permalink(); ?>"><?php echo $page->title(); ?></a>
		<?php } ?>
	</h2>
	<?php if (!$page->isStatic() && !$url->notFound()):  ?>
    <small>
		<a href="<?php echo $page->permalink(); ?>" title="Permalink: <?php echo $page->title(); ?>"><?php echo $page->date(); ?></a> 
		&ndash; 
		<?php echo $L->get('Reading time') . ': ' . $page->readingTime(); ?>
		&ndash; 
		<a href="<?php echo $page->permalink(); ?>#comments"><?php include(THEME_DIR_PHP . 'comments-counter.php') ?></a>
	</small>
	<?php endif ?>
	<?php if ($page->coverImage()) : ?>
	<!-- Cover Image -->
	<img class="coverImage" alt="Cover Image for <?php echo $page->title(); ?>" src="<?php echo $page->coverImage(); ?>" />
	<?php endif ?>
	<!-- Full content -->
	<?php echo $page->content(); ?>
  <!-- Load Bludit Plugins: Page End -->
  <?php Theme::plugins('pageEnd'); ?>
</article>
