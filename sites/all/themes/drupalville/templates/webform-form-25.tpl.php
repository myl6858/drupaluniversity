
<div class="container">
	<div class="row">
		<div class="col-md-6">
		<div class="row">
			<div class="col-md-6"><?php print drupal_render($form['submitted']['first_name']); ?></div>
			<div class="col-md-6"><?php print drupal_render($form['submitted']['last_name']); ?></div>
		</div>
		<br />
		<?php print drupal_render($form['submitted']['email']); ?><br />
		<?php print drupal_render($form['submitted']['phone']); ?>
	</div>
	<div class="col-md-6">
	<?php print drupal_render($form['submitted']['comment']); ?><br />
	<?php print drupal_render($form['actions']); ?>
	<?php print drupal_render_children($form);?>
	</div>
</div>

</div>