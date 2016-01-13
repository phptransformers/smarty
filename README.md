# Smarty for PHPTransformers

[Smarty](http://www.smarty.net/) support for [PHPTransformers](http://github.com/phptransformers/phptransformer).

## Install

Via Composer

``` bash
$ composer require phptransformers/smarty
```

## Usage

``` php
$engine = new SmartyTransformer();
echo $engine->render('Hello, {$name}!', array('name' => 'phptransformers');
```

## Testing

``` bash
$ phpunit
```

## License

The MIT License (MIT). Please see [License File](LICENSE) for more information.