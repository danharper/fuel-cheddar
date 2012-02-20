<?php

namespace Cheddar;

class Cheddar
{
	/**
	 * Initialise FuelPHP package, load config values
	 * @return void
	 */
	public static function _init()
	{
		\Config::load('cheddar', true);

		$host     = \Config::get('cheddar.host');
		$email    = \Config::get('cheddar.email');
		$password = \Config::get('cheddar.password');
		$product  = \Config::get('cheddar.product');

		return new CheddarGetter_Client($host, $email, $password, $product);
	}
}