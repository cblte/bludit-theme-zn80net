<?php foreach ($content as $page) : ?>
<!-- A single blog post on the homepage -->
<article <?php if ($page->custom('link')) {?>class="link" <?php } ?>>
<!-- Load Bludit Plugins: Page Begin -->
<?php Theme::plugins('pageBegin'); ?>
	<h2>
		<?php if ($page->custom('link')) { ?>
		<a href="<?php echo $page->custom('link'); ?>"><?php echo $page->title(); ?></a> 
		<span class="linkarrow">→</span>
		<?php } else { ?>
		<a href="<?php echo $page->permalink(); ?>"><?php echo $page->title(); ?></a>
		<?php } ?>
	</h2>
	<small>
		<a href="<?php echo $page->permalink(); ?>" title="Permalink: <?php echo $page->title(); ?>"><?php echo $page->date(); ?></a> 
		&ndash; 
		<?php echo $L->get('Reading time') . ': ' . $page->readingTime(); ?>
		&ndash; 
		<a href="<?php echo $page->permalink(); ?>#comments"><?php include(THEME_DIR_PHP . 'comments-counter.php') ?></a>
	</small>
	<?php if ($page->coverImage()) : ?>
	<!-- Cover Image -->
	<img class="coverImage" alt="Cover Image for <?php echo $page->title(); ?>" src="<?php echo $page->coverImage(); ?>" />
	<?php endif ?>
	<!-- Breaked content -->
	<?php echo $page->contentBreak(); ?>
	<?php if ($page->readMore()) { // Read more" button ?>
	<a href="<?php echo $page->permalink(); ?>" title="Permalink: <?php echo $page->title(); ?>"><?php echo $L->get('Read more'); ?></a>
	<?php } ?>
	<?php Theme::plugins('pageEnd'); // Load Bludit Plugins: Page End ?>
</article>
<?php endforeach; ?>
<!-- including pagination -->
<?php include(THEME_DIR_PHP . 'pagination.php'); ?>