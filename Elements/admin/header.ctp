<?php
$dashboardUrl = Configure::read('Croogo.dashboardUrl');
?>
<header class="navbar navbar-inverse navbar-fixed-top">
	<div class="navbar-inner">
		<div class="<?php echo $this->Layout->cssClass('container'); ?>">

			<div class="navbar-header">

				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<span class="hidden-sm hidden-xs">
					<?php echo $this->Html->link(Configure::read('Site.title'), $dashboardUrl, array('class' => 'navbar-brand ellipsis')); ?>
				</span>
				<span class="hidden-lg hidden-md">
					<?php echo $this->Html->link(__d('croogo', 'Dashboard'), $dashboardUrl, array('class' => 'navbar-brand')); ?>
				</span>
			</div>
			<div class="navbar-collapse collapse" style="height: 0px; ">
				<?php
				echo $this->Croogo->adminMenus(CroogoNav::items('top-left'), array(
						'type' => 'dropdown',
						'htmlAttributes' => array(
								'id' => 'top-left-menu',
								'class' => 'nav navbar-nav',
						),
				));
				?>
				<?php if ($this->Session->read('Auth.User.id')): ?>
					<?php
					echo $this->Croogo->adminMenus(CroogoNav::items('top-right'), array(
							'type' => 'dropdown',
							'htmlAttributes' => array(
									'id' => 'top-right-menu',
									'class' => 'navbar-nav nav navbar-right',
							),
					));
					?>
				<?php endif; ?>
			</div>
		</div>
	</div>
</header>