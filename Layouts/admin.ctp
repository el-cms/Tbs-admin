<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width">
		<title><?php echo $title_for_layout; ?> - <?php echo __d('croogo', 'Croogo'); ?></title>
		<?php
		echo $this->Html->css(array(
//			'/croogo/css/croogo-bootstrap',
//			'/croogo/css/croogo-bootstrap-responsive',
				'thickbox',
				'admin',
		));
		echo $this->Layout->js();
		echo $this->Html->script(array(
				'html5',
				'jquery/jquery.min',
				'jquery/jquery-ui.min',
				'jquery/jquery.slug',
				'jquery/jquery.cookie',
				'jquery/jquery.hoverIntent.minified',
				'jquery/superfish',
				'jquery/supersubs',
				'jquery/jquery.tipsy',
				'jquery/jquery.elastic-1.6.1.js',
				'jquery/thickbox-compressed',
				'underscore-min',
				'admin',
				'sidebar',
				'choose',
				'typeahead_autocomplete',
				'croogo-bootstrap.js',
		));

		echo $this->fetch('script');
		echo $this->fetch('css');
		?>
	</head>
	<body>qsdqsd
		<div id="wrap">
			<?php echo $this->element('admin/header'); ?>
			<?php echo $this->element('admin/navigation'); ?>
			<div id="push"></div>
			<div id="content-container" class="<?php echo $this->Layout->cssClass('container'); ?>">
			<!--<div  id="content"class="<?php echo $this->Layout->cssClass('row-fluid'); ?>">-->
				<div id="content">
					<?php echo $this->element('admin/breadcrumb'); ?>
					<div id="inner-content">
						<?php echo $this->Layout->sessionFlash(); ?>
						<?php echo $this->fetch('content'); ?>
					</div>
				</div>
				<!--</div>-->
			</div>
		</div>
		<?php echo $this->element('admin/footer'); ?>
		<?php
		echo $this->Blocks->get('scriptBottom');
		echo $this->Js->writeBuffer();
		?>
	</body>
</html>