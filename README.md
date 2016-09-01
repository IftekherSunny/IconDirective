## Icon Directive

The icon directive provides @icon directive to use fontawesome icon in the blade template.

## Installation Process
 
Icon directive is available via Composer/Packagist.

```
composer require sun/country
```

Add the ServiceProvider to the providers array in config/app.php

```php
Sun\IconDirective\IconDirectiveServiceProvider::class,
```

## Basic Uses

Get fontawesome icon in the blade template.

```
@icon('github')
```

Added extra classes with the fontawesome icon.

```
@icon('github', 'fa-5x', 'blue')
```

## Example

In the blade template

```
<button class="btn btn-primary">
    @icon('save') Save
</button>
```

This code snippet will render as shown below

```
<button class="btn btn-primary">
    <i class="fa fa-save" aria-hidden="true"></i> Save
</button>
```

## License
This package is licensed under the [MIT License](https://github.com/iftekhersunny/IconDirective/blob/master/LICENSE)
