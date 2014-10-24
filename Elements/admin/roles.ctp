Elements/roles<?php
if (isset($roles[$this->request->data['User']['role_id']])) {
	$validRoles = array_diff_key($roles, array($this->request->data['User']['role_id'] => null));
} else {
	$validRoles = $roles;
}

echo $this->Form->input('Role', array('values' => $validRoles, 'class' => 'input checkbox', 'multiple' => 'checkbox'));
?>
<div class="row">
	<div class="col-sm-12">
		<div class="alert alert-warning">This element seems to be unused (<?php echo __FILE__ ?>)</div>
	</div>
</div>