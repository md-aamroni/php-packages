<?php

// Autoload
require 'vendor/autoload.php';


// Vector based SVG
$generatorSVG = new Picqer\Barcode\BarcodeGeneratorSVG();
$generatorSVG->getBarcode('N9TT-9G0A-B7FQ-RANC', $generatorSVG::TYPE_CODE_128);
file_put_contents('storage/barcode.svg', $generatorSVG->getBarcode('N9TT-9G0A-B7FQ-RANC', $generatorSVG::TYPE_CODE_128));


// Pixel based PNG
$generatorPNG = new Picqer\Barcode\BarcodeGeneratorPNG();
$generatorPNG->getBarcode('N9TT-9G0A-B7FQ-RANC', $generatorPNG::TYPE_CODE_128);
file_put_contents('storage/barcode.png', $generatorPNG->getBarcode('N9TT-9G0A-B7FQ-RANC', $generatorPNG::TYPE_CODE_128));


// Pixel based JPG
$generatorJPG = new Picqer\Barcode\BarcodeGeneratorJPG();
$generatorJPG->getBarcode('N9TT-9G0A-B7FQ-RANC', $generatorJPG::TYPE_CODE_128);
file_put_contents('storage/barcode.jpg', $generatorPNG->getBarcode('N9TT-9G0A-B7FQ-RANC', $generatorPNG::TYPE_CODE_128));


// Pixel based HTML
$generatorHTML = new Picqer\Barcode\BarcodeGeneratorHTML();
$generatorHTML->getBarcode('N9TT-9G0A-B7FQ-RANC', $generatorHTML::TYPE_CODE_128);
file_put_contents('storage/barcode.html', $generatorPNG->getBarcode('N9TT-9G0A-B7FQ-RANC', $generatorPNG::TYPE_CODE_128));


// Vector based HTML
$generatorHTML = new Picqer\Barcode\BarcodeGeneratorDynamicHTML();
echo $generatorHTML->getBarcode('N9TT-9G0A-B7FQ-RANC', $generatorHTML::TYPE_CODE_128);
file_put_contents('storage/barcode.html', $generatorPNG->getBarcode('N9TT-9G0A-B7FQ-RANC', $generatorPNG::TYPE_CODE_128));
