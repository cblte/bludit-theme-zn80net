<?php foreach ($content as $page) : ?>
	<!-- A single blog post -->
<article <?php if ($page->custom('link')) {?>class="link" <?php } ?>>
		<?php Theme::plugins('pageBegin'); // Load Bludit Plugins: Page Begin 
		?>

		<?php if ($page->coverImage()) : ?>
			<img class="" alt="Cover Image for <?php echo $page->title(); ?>" src="<?php echo $page->coverImage(); ?>" />
		<?php endif ?>

		<h2>
			<?php
			if ($page->custom('link')) { ?>
				<a href="<?php echo $page->custom('link'); ?>"><?php echo $page->title(); ?></a> 
				<span class="linkarrow">→</span>
			<?php } else { ?>
				<a href="<?php echo $page->permalink(); ?>"><?php echo $page->title(); ?></a>
			<?php }
			?>

		</h2>
		<small>
			<a href="<?php echo $page->permalink(); ?>" title="Permalink: <?php echo $page->title(); ?>"><?php echo $page->date(); ?></a> 
			&ndash; 
			<?php echo $L->get('Reading time') . ': ' . $page->readingTime(); ?>
		</small>
		<!-- Breaked content -->
		<?php echo $page->contentBreak(); ?>

		<?php if ($page->readMore()) : // Read more" button 
		?>
			<a href="<?php echo $page->permalink(); ?>"><?php echo $L->get('Read more'); ?></a>
		<?php endif ?>

		<?php Theme::plugins('pageEnd'); // Load Bludit Plugins: Page End 
		?>
	</article>
	<hr />
<?php endforeach; ?>

<!-- Pagination -->
<?php if (Paginator::numberOfPages() > 1) : ?>
	<nav class="pagination">
		<!-- Next button -->
		<?php if (Paginator::showNext()) : ?>
			<a class="page-link next" href="<?php echo Paginator::nextPageUrl() ?>">&#9664; <?php echo $L->get('Next'); ?> </a>
		<?php endif; ?>

		<?php if (Paginator::currentPage() == -1) { ?>
			<!-- Home button -->
			<!-- a class="page-link" href="<?php echo Theme::siteUrl() ?>">Home</a -->
		<?php } ?>

		<!-- Previous button -->
		<?php if (Paginator::showPrev()) : ?>
			<a class="page-link prev" href="<?php echo Paginator::previousPageUrl() ?>" tabindex="-1"><?php echo $L->get('Previous'); ?> &#9658; </a>
		<?php endif; ?>

	</nav>
<?php endif ?>