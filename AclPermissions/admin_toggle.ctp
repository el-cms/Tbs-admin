<?php

if ($success == 1) {
	if ($permitted == 1) {
		echo $this->Html->icon($this->Theme->getIcon('check-mark'), array(
			'class' => 'permission-toggle text-success',
			'data-aco_id' => $acoId,
			'data-aro_id' => $aroId
		));
	} else {
		echo $this->Html->icon($this->Theme->getIcon('x-mark'), array(
			'class' => 'permission-toggle text-danger',
			'data-aco_id' => $acoId,
			'data-aro_id' => $aroId
		));

	}
} else {
	echo __d('croogo', 'error');
}

Configure::write('debug', 0);