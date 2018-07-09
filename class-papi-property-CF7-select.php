<?php

// Exit if accessed directly
defined( 'ABSPATH' ) || exit;

/**
 * Property Contact Form7_Select
 */

class Papi_Property_CF7_Select extends Papi_Property_Dropdown {
	/**
	 * Get dropdown items.
	 *
	 * @return array
	 */
	protected function get_items() {
		$forms = WPCF7_ContactForm::find();

		return array_reduce( $forms, function( $result, $form ) {
			$title = method_exists($form, 'title') ? $form->title() : $form->title;
			$result[$title] = method_exists($form, 'id') ? $form->id() : $form->id;
			return $result;
		}, array() );
	}
}
