# Knet Payment Gateway (Laravel 5.6 to Laravel 8.x)
This package used to integrate with the new Knet payment gateway.

## Requirements
| PHP    | Laravel | Package |
|--------|---------|---------|
| 7.3+   | 8.x     | v1.3.0  |
| 7.2.5+ | 7.x     | v1.2.0  |
| <7.2.5 | 6.x     | v1.1.0  |
| <7.1   | 5.x     | v1.0.*  |

## Installation

1) Install the package by running this command in your terminal/cmd:
```
composer require o2one/knet_payment_gateway
```

2) Create this package's Knet to the tap option of your gateway in **config/knet.php**:

Optionally, you can import config file by running this command in your terminal/cmd:
```
php artisan vendor:publish --tag=knet-config
```

## Change Environment
you can change your environment from local to production in case you want to make sure that everything is working fine, to do that change `.env` file like this

```dotenv
APP_ENV=local // or production

KNET_TRANSPORT_ID=
KNET_TRANSPORT_PASSWORD=
KNET_RESOURCE_KEY=
KNET_DEBUG=true //or false in production
``` 

## Test cards
| Card Number | Expiry Date | PIN | Status |
| ---------------- | :----- | :---- | :------------ |
| 8888880000000001 | 09/21 | 1234 | CAPTURED |
| 8888880000000002 | 05/21 | 1234 | NOT CAPTURED |


## Authors

* [**Sanu Basak**](https://github.com/sanu-basak) - *Initial work*

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details


## Special Thanks to

* [Laravel](https://laravel.com) Community & [o2one Labs](https://www.o2onelabs.com/)
