<?php

/**
 * @file
 * template.php
 */

function drupalville_form_alter(&$form, &$form_state, $form_id){
	// dsm($form_id);
	if($form_id == 'webform_client_form_25') {
		// dsm($form);
		$form['submitted']['first_name']['#attributes']['placeholder'] = 'First Name';
		$form['submitted']['last_name']['#attributes']['placeholder'] = 'Last Name';
		$form['submitted']['email']['#attributes']['placeholder'] = 'Email';
		$form['submitted']['comment']['#attributes']['placeholder'] = 'Comment';
		$form['submitted']['phone']['#attributes']['placeholder'] = 'Phone Number';
		$form['actions']['submit']['#value'] = 'Send me a comment';
	}
	// if ($form_id == 'search_block_form') {
	// 	dsm($form);
	// 	 $form['search_block_form']['#attributes']['placeholder'] = t('Go'); 
	// }
}