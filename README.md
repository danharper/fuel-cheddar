# Cheddar Fuel

A FuelPHP package wrapping around the [CheddarGetter PHP API class](https://github.com/marcguyer/cheddargetter-client-php).

## Usage

Copy `config/cheddar.php` into your `app/config/` directory and set your email, password/secret key and product code.

You can now call any of the [API methods](https://cheddargetter.com/php-client/docs/) on the `Cheddar` object. For example:

```php
$plans = Cheddar::getPlans()->toArray();
print_r($plans);
```

__Important:__ It's recommended that you use the Secret Key found on your CheddarGetter Settings page as your API password so that your account password is not just sitting there in your codebase.