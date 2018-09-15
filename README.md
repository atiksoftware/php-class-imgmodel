# php-class-imgmodel

PHP Image editor. Create-resize-draw vs.

----------
## Installation

### Using Composer

```sh
composer require atiksoftware/php-class-imgmodel
```

```php
require __DIR__.'/../vendor/autoload.php';

use \Atiksoftware\IMGModel\IMGModel;
$img = new IMGModel();
```
#### _compress image_
```php
$img->load("input.png");
$img->maxarea(1280,720);
$img->save("output.png",false,70);
```
