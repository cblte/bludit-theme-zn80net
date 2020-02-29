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