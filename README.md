# Simple and straightforward Blade directive to passe data to javascript


## Contents

- [Installation](#installation)
- [Usage](#usage)


## Installation

You can install the package using composer

``` bash
$ composer require tequilarapido/javascript-blade
```

Add to application providers :

```
Tequilarapido\JavascriptBlade\JavascriptBladeProvider::class
```


## Usage

```
@javascript('i18n', $translations)

// Produces

<script>
window.App || window.App = {}; App.i18n = '<json encoded translations>';
</script>
```


## Changelog
Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Testing

``` bash
$ composer test
```

## Security

If you discover any security related issues, please email :author_email instead of using the issue tracker.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Credits

- [Nassif Bourguig](https://github.com/nbourguig)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.






