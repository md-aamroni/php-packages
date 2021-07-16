## [BarCode Generator](https://github.com/picqer/php-barcode-generator)

These barcode types are supported. All types support different character sets or have mandatory lengths. Please see [wikipedia](https://en.wikipedia.org/wiki/Barcode) for supported chars and lengths per type. Most used types are TYPE_CODE_128 and TYPE_CODE_39. Because of the best scanner support, variable length and most chars supported.


- TYPE_CODE_39
- TYPE_CODE_39_CHECKSUM
- TYPE_CODE_39E
- TYPE_CODE_39E_CHECKSUM
- TYPE_CODE_93
- TYPE_STANDARD_2_5
- TYPE_STANDARD_2_5_CHECKSUM
- TYPE_INTERLEAVED_2_5
- TYPE_INTERLEAVED_2_5_CHECKSUM
- TYPE_CODE_128
- TYPE_CODE_128_A
- TYPE_CODE_128_B
- TYPE_CODE_128_C
- TYPE_EAN_2
- TYPE_EAN_5
- TYPE_EAN_8
- TYPE_EAN_13
- TYPE_UPC_A
- TYPE_UPC_E
- TYPE_MSI
- TYPE_MSI_CHECKSUM
- TYPE_POSTNET
- TYPE_PLANET
- TYPE_RMS4CC
- TYPE_KIX
- TYPE_IMB
- TYPE_CODABAR
- TYPE_CODE_11
- TYPE_PHARMA_CODE
- TYPE_PHARMA_CODE_TWO_TRACKS

<br>

### Installation
Install through [composer](https://getcomposer.org/):
```bash
$ composer require picqer/php-barcode-generator
```
<br>

### [Usage](index.php)

```php 
require 'vendor/autoload.php';

$generator = new Picqer\Barcode\BarcodeGeneratorHTML();
echo $generator->getBarcode('N9TT-9G0A-B7FQ-RANC', $generator::TYPE_CODE_128);

// Stored in a Directory
file_put_contents('storage/barcode.jpg', $generator->getBarcode('N9TT-9G0A-B7FQ-RANC', $generator::TYPE_CODE_128));
```
<br>

### Available Types
```php
[Vector based SVG]:
$generatorSVG = new Picqer\Barcode\BarcodeGeneratorSVG();

[Pixel based PNG]:
$generatorPNG = new Picqer\Barcode\BarcodeGeneratorPNG();

[Pixel based JPG]:
$generatorJPG = new Picqer\Barcode\BarcodeGeneratorJPG();

[Pixel based HTML]:
$generatorHTML = new Picqer\Barcode\BarcodeGeneratorHTML();

[Vector based HTML]:
$generatorHTML = new Picqer\Barcode\BarcodeGeneratorDynamicHTML();
```
