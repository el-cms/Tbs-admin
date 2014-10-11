<?php
$rowClass = $this->Layout->cssClass('row');
$columnFull = $this->Layout->cssClass('columnFull');
?>

<div class="<?php echo $rowClass; ?> hidden-lg hidden-md">
	<div class="<?php echo $columnFull; ?>">
		<h2>
			<?php echo $title_for_layout; ?>
		</h2>
	</div>
</div>
<?php
$this->Html->addCrumb('', '/admin', array('icon' => $_icons['home']))
				->addCrumb(__d('croogo', 'Content'), array('controller' => 'nodes', 'action' => 'index'))
				->addCrumb(__d('croogo', 'Create'), '/' . $this->request->url);
?>
<div class="<?php echo $this->Layout->cssClass('row'); ?>">
	<div class="<?php echo $this->Layout->cssClass('columnFull'); ?>">
		<div class="box">
			<div class="box-content">
				<?php foreach ($types as $type): ?>
					<?php
					if (!empty($type['Type']['plugin'])):
						continue;
					endif;
					?>
					<div class="type">
						<h3><?php echo $this->Html->link($type['Type']['title'], array('action' => 'add', $type['Type']['alias'])); ?></h3>
						<p><?php echo $type['Type']['description']; ?></p>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
</div>
