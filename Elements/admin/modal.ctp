<?php
$title = isset($title) ? $title : null;
if (empty($id)) {
	$id = 'modal';
}
if (empty($class)) {
	$class = 'modal fade';
} else {
	$class .= ' modal fade';
}
?>
<div id="<?php echo $id; ?>" class="<?php echo trim($class); ?>" role="dialog" tabindex="-1">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3><?php echo $title; ?></h3>
			</div>
			<div class="modal-body">
			</div>
			<div class="modal-footer">
				<button class="btn" data-dismiss="modal" aria-hidden="true"><?php echo __d('croogo', 'Close'); ?></button>
			</div>
		</div>
	</div>
</div>
