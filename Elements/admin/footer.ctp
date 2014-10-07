<footer class="navbar-inverse">
	<div class="navbar-inner">

		<div class="footer-content">
			<?php
			$link = $this->Html->link(
							__d('croogo', 'Croogo %s', strval(Configure::read('Croogo.version'))), 'http://www.croogo.org'
			);
			?>
			<?php echo __d('croogo', 'Powered by %s', $link); ?>
		</div>

	</div>
</footer>