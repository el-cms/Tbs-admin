<?php
$rowClass = $this->Layout->cssClass('row');
$columnFull = $this->Layout->cssClass('columnFull');
?>
<div class="<?php echo $rowClass ?>">
	<div class="<?php echo $columnFull ?>">
		<div class="alert alert-warning">
			This view seems to be unused (<code><?php echo __FILE__ ?></code>)...
		</div>
	</div>
</div>

<div class="<?php echo $rowClass ?>">
	<div class="<?php echo $columnFull ?>">
		<div class="col-sm-8">
			<h2><?php echo __d('croogo', 'Setting'); ?></h2>
			<dl><?php $i = 0;
$class = ' class="altrow"';
?>
				<dt<?php if ($i % 2 == 0) echo $class; ?>><?php echo __d('croogo', 'Id'); ?></dt>
				<dd<?php if ($i++ % 2 == 0) echo $class; ?>>
<?php echo $setting['Setting']['id']; ?>
					&nbsp;
				</dd>
				<dt<?php if ($i % 2 == 0) echo $class; ?>><?php echo __d('croogo', 'Key'); ?></dt>
				<dd<?php if ($i++ % 2 == 0) echo $class; ?>>
<?php echo $setting['Setting']['key']; ?>
					&nbsp;
				</dd>
				<dt<?php if ($i % 2 == 0) echo $class; ?>><?php echo __d('croogo', 'Value'); ?></dt>
				<dd<?php if ($i++ % 2 == 0) echo $class; ?>>
<?php echo $setting['Setting']['value']; ?>
					&nbsp;
				</dd>
				<dt<?php if ($i % 2 == 0) echo $class; ?>><?php echo __d('croogo', 'Description'); ?></dt>
				<dd<?php if ($i++ % 2 == 0) echo $class; ?>>
<?php echo $setting['Setting']['description']; ?>
					&nbsp;
				</dd>
				<dt<?php if ($i % 2 == 0) echo $class; ?>><?php echo __d('croogo', 'Input Type'); ?></dt>
				<dd<?php if ($i++ % 2 == 0) echo $class; ?>>
<?php echo $setting['Setting']['input_type']; ?>
					&nbsp;
				</dd>
				<dt<?php if ($i % 2 == 0) echo $class; ?>><?php echo __d('croogo', 'Weight'); ?></dt>
				<dd<?php if ($i++ % 2 == 0) echo $class; ?>>
<?php echo $setting['Setting']['weight']; ?>
					&nbsp;
				</dd>
				<dt<?php if ($i % 2 == 0) echo $class; ?>><?php echo __d('croogo', 'Params'); ?></dt>
				<dd<?php if ($i++ % 2 == 0) echo $class; ?>>
<?php echo $setting['Setting']['params']; ?>
					&nbsp;
				</dd>
			</dl>
		</div>
		<div class="col-sm-4">
			<div class="actions">
			<ul>
				<li><?php echo $this->Html->link(__d('croogo', 'Edit Setting'), array('action' => 'edit', $setting['Setting']['id'])); ?> </li>
				<li><?php echo $this->Form->postLink(__d('croogo', 'Delete Setting'), array('action' => 'delete', $setting['Setting']['id']), null, __d('croogo', 'Are you sure you want to delete # %s?', $setting['Setting']['id'])); ?> </li>
				<li><?php echo $this->Html->link(__d('croogo', 'List Settings'), array('action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__d('croogo', 'New Setting'), array('action' => 'add')); ?> </li>
			</ul>
		</div>
		</div>
	</div>
</div>
