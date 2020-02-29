<ul class="archive-list"> 
<?php
	$pageNumber = 1; // Page number of the paginator, the first page is 1
	$numberOfItems = -1; // The value -1 tell to Bludit to returns all the pages on the system
	$onlyPublished = true; // Only get the pages with the satus published
	// Get the list of keys of pages
	$items = $pages->getList($pageNumber, $numberOfItems, $onlyPublished);

	foreach ($items as $key) {
		// buildPage function returns a Page-Object
		$archivePage = buildPage($key);

?>
	<li>
		<small class="archive-article-date"><?php echo $archivePage->date(); ?> &ndash; </small> 
			<a href="<?php echo $archivePage->permalink(); ?>" title="Permalink: <?php echo $archivePage->title(); ?>">
				<?php echo $archivePage->title(); ?>
			</a>
		</small>
	</li>	
<?php 
	} 
?>
</ul>

<!-- Load Bludit Plugins: Page End -->
<?php Theme::plugins('pageEnd'); ?>