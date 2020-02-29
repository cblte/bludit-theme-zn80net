<?php foreach ($content as $page) : ?>
<!-- A single blog post on the homepage -->
<article <?php if ($page->custom('link')) {?>class="link" <?php } ?>>

<!--
<?php 

// CHECK IF PLUGIN IS LOADED
$pageUuid = $page->getValue('uuid');
$commentCounter = 0;

foreach($SnickerIndex->db as $id => $comment) {
	if($comment['page_uuid'] == $pageUuid && $comment['status'] == 'approved') $commentCounter++;
}

if ($commentCounter == 0) {
	$commentText = $L->get('no-comments');
} elseif ($commentCounter = 1) {
	$commentText = $L->get('one-comment');
} else {
	$commentText = sprintf($L->get('comments'), $commentCounter );
}

?>
-->
<!-- Load Bludit Plugins: Page Begin -->
<?php Theme::plugins('pageBegin'); ?>

<?php if ($page->coverImage()) : ?>
	<img class="" alt="Cover Image for <?php echo $page->title(); ?>" src="<?php echo $page->coverImage(); ?>" />
<?php endif ?>

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
		<a href="<?php echo $page->permalink(); ?>#comments"><?php echo $commentText ?></a>
	</small>


	<!-- Breaked content -->
	<?php echo $page->contentBreak(); ?>
	<?php if ($page->readMore()) : // Read more" button ?>
	<a href="<?php echo $page->permalink(); ?>" title="Permalink: <?php echo $page->title(); ?>"><?php echo $L->get('Read more'); ?></a>
	<?php endif ?>
	<?php Theme::plugins('pageEnd'); // Load Bludit Plugins: Page End ?>
</article>
<hr />
<?php endforeach; ?>

<!-- including pagination -->
<?php include(THEME_DIR_PHP . 'pagination.php'); ?>