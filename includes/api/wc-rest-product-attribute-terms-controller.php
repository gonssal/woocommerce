<?php
/**
 * REST API Product Attribute Terms controller
 *
 * Handles requests to the products/attributes/(?P<attribute_id>[\d]+)/terms endpoint.
 *
 * @author   WooThemes
 * @category API
 * @package  WooCommerce/API
 * @since    2.6.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * REST API Product Attribute Terms controller class.
 *
 * @package WooCommerce/API
 * @extends WC_REST_Terms_Controller
 */
class WC_REST_Product_Attribute_Terms_Controller extends WC_REST_Terms_Controller {

	/**
	 * Route base.
	 *
	 * @var string
	 */
	protected $rest_base = 'products/attributes/(?P<attribute_id>[\d]+)/terms';

	/**
	 * Register the routes for coupons.
	 */
	public function register_routes() {

	}
}