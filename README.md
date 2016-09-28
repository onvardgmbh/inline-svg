# Inline SVG

## General Usage
```php
<?php
use Onvardgmbh\InlineSVG;

$img = InlineSVG::fontAwesome( $post_id );
?>
<img src="<?= $img->size( 'custom_size' ); ?>" alt="<?= $img->alt(); ?>">
```

