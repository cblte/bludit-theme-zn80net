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
echo $commentText
?>