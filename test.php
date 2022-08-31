<?php

require_once './simple-customer.php';
require_once './simple-order.php';

$simple_customer = new SimpleCustomer('John', 'Doe');
$simple_order = new SimpleOrder($simple_customer);

$simple_customer->billing_addr		= 'addr_1';
$simple_customer->billing_phone		= 'phone_1';
$simple_customer->billing_city		= 'city_1';
$simple_customer->billing_zip		= 'zip_1';
$simple_customer->shipping_addr		= 'addr_2';
$simple_customer->shipping_phone	= 'phone_2';
$simple_customer->shipping_city		= 'city_2';
$simple_customer->shipping_zip		= 'zip_2';

$simple_order->add_item('led_1', 0.78);
$simple_order->add_item('led_2', 0.10);
$simple_order->add_item('led_3', 0.25);
$simple_order->add_item('led_3', 0.25);

print_r($simple_customer->get_full_name() . "\n");
print_r($simple_customer->get_billing());
print_r($simple_customer->get_shipping());
print_r($simple_order->customer);
print_r($simple_order->get_price());
