<?php
$rowClass = $this->Layout->cssClass('row');
$columnFull = $this->Layout->cssClass('columnFull');
?>
<div class="<?php echo $rowClass; ?> hidden-lg hidden-md">
	<div class="<?php echo $columnFull; ?>">
		<h2>
			<?php echo $title_for_layout ?>
		</h2>
	</div>
</div>
<?php
$this->Html
	->addCrumb('', '/admin', array('icon' => $this->Theme->getIcon('home')))
	->addCrumb(__d('croogo', 'Dashboard'), '/' . $this->request->url);