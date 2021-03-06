<?php
$this->extend('/Common/admin_index');

$this->Html->addCrumb('', '/admin', array('icon' => $this->Theme->getIcon('home')))
	->addCrumb(__d('croogo', 'Settings'), array('plugin' => 'settings', 'controller' => 'settings', 'action' => 'prefix', 'Site'))
	->addCrumb(__d('croogo', 'Languages'), '/' . $this->request->url);

?>
<div class="<?php echo $this->Layout->cssClass('row'); ?>">
	<div class="<?php echo $this->Layout->cssClass('columnFull'); ?>">
		<table class="table table-striped">
			<?php
				$tableHeaders = $this->Html->tableHeaders(array(
					$this->Paginator->sort('id', __d('croogo', 'Id')),
					$this->Paginator->sort('title', __d('croogo', 'Title')),
					$this->Paginator->sort('native', __d('croogo', 'Native')),
					$this->Paginator->sort('alias', __d('croogo', 'Alias')),
					$this->Paginator->sort('status', __d('croogo', 'Status')),
					__d('croogo', 'Actions'),
				));
				?>
					<thead>
						<?php echo $tableHeaders; ?>
					</thead>
				<?php

				$rows = array();
				foreach ($languages as $language) {
					$actions = array();
					$actions[] = $this->Croogo->adminRowActions($language['Language']['id']);
					$actions[] = $this->Croogo->adminRowAction('',
						array('action' => 'moveup', $language['Language']['id']),
						array('icon' => $this->Theme->getIcon('move-up'), 'tooltip' => __d('croogo', 'Move up'))
					);
					$actions[] = $this->Croogo->adminRowAction('',
						array('action' => 'movedown', $language['Language']['id']),
						array('icon' => $this->Theme->getIcon('move-down'), 'tooltip' => __d('croogo', 'Move down'))
					);
					$actions[] = $this->Croogo->adminRowAction('',
						array('action' => 'edit', $language['Language']['id']),
						array('icon' => $this->Theme->getIcon('update'), 'tooltip' => __d('croogo', 'Edit this item'))
					);
					$actions[] = $this->Croogo->adminRowAction('',
						array('action' => 'delete', $language['Language']['id']),
						array('icon' => $this->Theme->getIcon('delete'), 'tooltip' => __d('croogo', 'Remove this item')),
						__d('croogo', 'Are you sure?')
					);

					$actions = $this->Html->div('item-actions', implode(' ', $actions));

					$rows[] = array(
						$language['Language']['id'],
						$language['Language']['title'],
						$language['Language']['native'],
						$language['Language']['alias'],
						$this->Html->status($language['Language']['status']),
						$actions,
					);
				}

				echo $this->Html->tableCells($rows);
			?>
			</table>
		</div>
	</div>
</div>
