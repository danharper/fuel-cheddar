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
	'Cheddar\\CheddarGetter_Client_AdapterInterface' => __DIR__.'/classes/cheddar/Client/AdapterInterface.php',
	'Cheddar\\CheddarGetter_Client_CurlAdapter'      => __DIR__.'/classes/cheddar/Client/CurlAdapter.php',
	'Cheddar\\CheddarGetter_Client_Exception'        => __DIR__.'/classes/cheddar/Client/Exception.php',
	'Cheddar\\CheddarGetter_Client_ZendAdapter'      => __DIR__.'/classes/cheddar/Client/ZendAdapter.php',
	
	'Cheddar\\CheddarGetter_Http_AdapterInterface'   => __DIR__.'/classes/cheddar/Http/AdapterInterface.php',
	'Cheddar\\CheddarGetter_Http_NativeAdapter'      => __DIR__.'/classes/cheddar/Http/NativeAdapter.php',
	'Cheddar\\CheddarGetter_Http_ZendAdapter'        => __DIR__.'/classes/cheddar/Http/ZendAdapter.php',
	
	'Cheddar\\CheddarGetter_Response'                => __DIR__.'/classes/cheddar/Response.php',
	'Cheddar\\CheddarGetter_Response_Exception'      => __DIR__.'/classes/cheddar/Response/Exception.php',
));

/* End of file bootstrap.php */