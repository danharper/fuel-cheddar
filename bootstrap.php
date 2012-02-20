<?php

/**
 * A FuelPHP package wrapping around the CheddarGetter PHP API class
 *
 * @package    Fuel-Cheddar
 * @version    1.0
 * @author     Dan Harper
 * @link       http://github.com/Radweb/fuel-cheddar
 */

Autoloader::add_core_namespace('Cheddar');

Autoloader::add_classes(array(
	'Cheddar\\Cheddar'                               => __DIR__.'/classes/cheddar.php',
	
	'Cheddar\\CheddarGetter_Client'                  => __DIR__.'/classes/cheddar/Client.php',
	'Cheddar\\CheddarGetter_Client_AdapterInterface' => __DIR__.'/classes/cheddar/Client/CheddarGetter_Client_AdapterInterface.php',
	'Cheddar\\CheddarGetter_Client_CurlAdapter'      => __DIR__.'/classes/cheddar/Client/CheddarGetter_Client_CurlAdapter.php',
	'Cheddar\\CheddarGetter_Client_Exception'        => __DIR__.'/classes/cheddar/Client/CheddarGetter_Client_Exception.php',
	'Cheddar\\CheddarGetter_Client_ZendAdapter'      => __DIR__.'/classes/cheddar/Client/CheddarGetter_Client_ZendAdapter.php',
	
	'Cheddar\\CheddarGetter_Response'                => __DIR__.'/classes/cheddar/Response.php',
	'Cheddar\\CheddarGetter_Response_Exception'      => __DIR__.'/classes/cheddar/Response/CheddarGetter_Response_Exception.php',
	
	'Cheddar\\CheddarGetter_Http_AdapterInterface'   => __DIR__.'/classes/cheddar/Http/CheddarGetter_Http_AdapterInterface.php',
	'Cheddar\\CheddarGetter_Http_NativeAdapter'      => __DIR__.'/classes/cheddar/Http/CheddarGetter_Http_NativeAdapter.php',
	'Cheddar\\CheddarGetter_Http_ZendAdapter'        => __DIR__.'/classes/cheddar/Http/CheddarGetter_Http_ZendAdapter.php',
));

/* End of file bootstrap.php */