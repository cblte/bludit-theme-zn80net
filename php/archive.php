<ul class="home article list"> 
<?php foreach ($content as $page): ?>
  <li>
    <small class="home article date"><?php echo $page->date(); ?> &ndash; </small> <a href="<?php echo $page->permalink(); ?>"><?php echo $page->title(); ?></a>
  </li>
<?php endforeach; ?>
</ul>

<!-- Pagination -->
<?php if (Paginator::numberOfPages()>1): ?>
<nav class="pagination">
	<!-- Previous button -->
	<?php if (Paginator::showPrev()): ?>
		<a class="page-link prev" href="<?php echo Paginator::previousPageUrl() ?>" tabindex="-1">&#9664; <?php echo $L->get('Previous'); ?></a>
	<?php endif; ?>

	<?php if (Paginator::currentPage()==-1) { ?>
		<!-- Home button -->
		<!-- a class="page-link" href="<?php echo Theme::siteUrl() ?>">Home</a -->
	<?php } ?>

	<!-- Next button -->
	<?php if (Paginator::showNext()): ?>
		<a class="page-link next" href="<?php echo Paginator::nextPageUrl() ?>"><?php echo $L->get('Next'); ?> &#9658;</a>
	<?php endif; ?>
</nav>
<?php endif ?>
