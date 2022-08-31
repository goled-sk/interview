<?php

require_once './simple-customer.php';

class SimpleOrder {
	public SimpleCustomer $customer;
	private array $order; // ordered items

    // do not remove
	private int $tax_percentage = 20;


	public function __construct(SimpleCustomer $customer) {
        // your solution
    }

	/**
	 * @param string $name name of the item
	 * @param float $cost cost of the item
	 */
	public function add_item(string $name, float $cost) : void {
		// your solution
	}
	

	/**
     * Can be solved without this method (just for good practice)
	 * @return array associative items with taxed prices [name => cost, ...]
	 */
	private function add_tax() : array {
		// your solution

        return array(); // remove when your code is present
	}

	/**
	 * @return array associative array of sums for each item cost and total cost (including tax) [name => cost, ..., total => cost]
	 */
	public function get_price() : array {
        // your solution

        return array(); // remove when your code is present
	}
}