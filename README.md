# TigerRanger Barcode Generator and POS machine Integration for Laravel 6.*.* | 7.*.*

[![Laravel 6.x | 7.x](https://img.shields.io/badge/Laravel-4.2|5.x-orange.svg)](http://laravel.com)
[![Total Downloads](https://poser.pugx.org/yajra/laravel-datatables-oracle/downloads.png)](https://packagist.org/packages/tigerranger/barcodepos)
[![License](https://img.shields.io/github/license/mashape/apistatus.svg)](https://packagist.org/packages/tigerranger/barcodepos)

This package is created to handle Barcode Iamge and POS Machine Integration. 

## Requirements
- [PHP >= 7.0](http://php.net/)
- [Laravel 6.x | 7.x ](https://github.com/laravel/framework)

## Documentations
- [Github Docs](https://github.com/tigerranger/barcodepos-docs)
- [Official help](https://tigerranger.com/barcodepos/helper/)


## Quick Installation
```bash
$ composer require tigerranger/barcodepos"
```

#### Service Provider & Facade (Optional on Laravel 6.x)
Register provider and facade on your `config/app.php` file.
```php
'providers' => [
    ...,
    tigerranger\Barcode\Barcode::class,
	tigerranger\Barcode\POS::class
]

'aliases' => [
    ...,
    'Barcode' => tigerranger\Barcode\Barcode::class,
	'POS'=>tigerranger\Barcode\POS::class
]
```

And that's it! Start building out some awesome Barcode and POS Software!




## Use in Controller

```php
        $barcode = new \tigerranger\Barcode\Barcode;
        $pos = new \tigerranger\Barcode\POS;
        $image= 'abbas.jpg'; // Name of the image
        $code= '0001CLSK729237';
        $barcode->set_barcode($code)  // Barcode Data max 15
                ->set_basepath(base_path()) // base path
                ->set_image_path("/public/barcode/$image"); // image name with path
        return view('amp.test')->with(compact('barcode','code','pos'));

```

## Use in Blade Template

```php


<img src="{{ asset('').$barcode->getBarcodeImage() }}" width="200" height="auto" />
<p>{{$code}}</p>

{!! $pos->setPOS(asset('')) !!}

<script>
    var pos= new POS({"fire":kmyfn}); // fire is function which call when POS machine read data
	pos.get_barcode() /* Change data when POS machine read data ---------
     -----------------   only for vue js , angular js , react js etc similar FM */
    function kmyfn(barcode){
        alert(barcode);   // write your own function and enjoy
    }
</script>


```

## Security

If you discover any security related issues, please email [omerabba009@gmail.com](mailto:omerabba009@gmail.com) instead of using the issue tracker.

## Credits

- [Tigerranger](https://github.com/tigerranger)
- [Md.Nazmul Alam](https://nazmul-alam.com)
- [Official Site : https://tigerranger.com ](https://tigerranger.com)

## License

The MIT License (MIT). Please see [License File](https://github.com/tigerranger/barcodepos/blob/master/LICENSE.md) for more information.
