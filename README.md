# Inline SVG

## File
```php
<?php
use Onvardgmbh\InlineSVG;
?>
<div>
<?= InlineSVG::file( __DIR__ .'/angle-right.svg')->get()?>
</div>
```

## Font Awesome
Icons: [http://fontawesome.io/icons/](http://fontawesome.io/icons/)
```php
<?php
use Onvardgmbh\InlineSVG;
?>
<div>
<?= InlineSVG::fontAwesome('angle-right')->get()?>
</div>
```

## ionicons
Icons: [http://ionicons.com/](http://ionicons.com/)
```php
<?php
use Onvardgmbh\InlineSVG;
?>
<div>
<?= InlineSVG::ionicons('ios-arrow-right')->get()?>
</div>
```

## width / height
```php
<?php
use Onvardgmbh\InlineSVG;
?>
<div>
<?= InlineSVG::ionicons('ios-search')->height('100')->width('100')->get()?>
</div>
```

## strokeColor
```php
<?php
use Onvardgmbh\InlineSVG;
?>
<div>
<?= InlineSVG::file( __DIR__ .'/angle-right.svg')->strokeColor('#545454')->get()?>
</div>
```

## License

This package is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).

The Font Awesome svg files are taken from [encharm/Font-Awesome-SVG-PNG](https://github.com/encharm/Font-Awesome-SVG-PNG) also licensed under the MIT license.