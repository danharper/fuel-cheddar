# Cheddar Fuel

A FuelPHP package wrapping around the [CheddarGetter PHP API class](https://github.com/marcguyer/cheddargetter-client-php).

## Usage

Copy `config/cheddar.php` into your `app/config/` directory and set your email, password and product code.

You can now call any of the [API methods](https://cheddargetter.com/php-client/docs/) on the `Cheddar` object. For example:

```php
$plans = Cheddar::getPlans()->toArray();
print_r($plans);
```