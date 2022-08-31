<?php

class SimpleCustomer {
	public string $first_name;
	public string $last_name;
	
	public string $billing_addr;
	public string $billing_phone;
	public string $billing_city;
	public string $billing_zip;

	public string $shipping_addr;
	public string $shipping_phone;
	public string $shipping_city;
	public string $shipping_zip;


	public function __construct($first_name, $last_name) {
		// your code
	}


	/**
	 * @return string full name of the customer
	 */
	public function get_full_name() : string {
		// your code
		return ''; // remove when your code is present
	}


	/**
	 * @return array associative array of the billing info ['billing_addr' => ..., ...]
	 */
	public function get_billing() : array {
		// your code

		return array(); // remove when your code is present
	}


	/**
	 * @return array associative array of the shipping info ['shipping_addr' => ..., ...]
	 */
	public function get_shipping(){
		// your code

		return array(); // remove when your code is present
	}
}
