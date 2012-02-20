<?php

namespace Cheddar;

class Cheddar
{
	private static $cg;

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

		self::$cg = new CheddarGetter_Client($host, $email, $password, $product);
	}

	public static function __callStatic($method, $arguments)
	{
		return self::$cg->$method($arguments);
	}
}