<?php
	print render($content['title']);
	//dsm ($content['field_event_date']);?>
	<p>From: <?php print $content['field_event_date']['#items'][0]['value'];?><br>
	To: <?php print $content['field_event_date']['#items'][0]['value2'];?>
	</p>
	<?php print render($content['body']);
	print render($content['field_event_image']);
	print render($content['field_register']);
?>


            <h2><a href="/drupal/?q=node/2">Drupal Event</a></h2>
            <p>From: 2014-07-31 18:15:00<br>
			To: 2014-08-01 18:15:00	</p>
	<p>test event</p>
<img width="220" height="110" alt="" src="http://localhost/drupal/sites/default/files/styles/medium/public/download.jpg?itok=soGA4v9h" typeof="foaf:Image">
<form accept-charset="UTF-8" id="button-field-dummy-form--2" method="post" action="/drupal/?q=goods"><input type="submit" value="Register" name="view-field-register-und-0-value" id="view-field-register-und-0-value" class="button_field form-submit ajax-processed"><div class="description"></div><input type="hidden" value="form-4lJfISDZGWt_GLO1nXQUTnIO-uxGlSxe2pIuYSZvmX8" name="form_build_id">
<input type="hidden" value="fhLYhFaP7LhsjRYsnJr-cWYM07TIYQH9yKcUVLLKzsU" name="form_token">
<input type="hidden" value="button_field_dummy_form" name="form_id">
</form>