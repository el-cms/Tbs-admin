<?php
$crumbs = $this->Html->getCrumbs(
				$this->Html->tag('span', '/', array(
						'class' => 'divider',
				))
);
?>
<?php if ($crumbs): ?>
	<div class="row-fluid">
		<div class="col-lg-12 col-md-12 visible-lg-block visible-md-block">
			<div class="breadcrumb" id="breadcrumb-container">
				<?php echo $crumbs; ?>
			</div>
		</div>
	</div>
	<?php
 endif;
