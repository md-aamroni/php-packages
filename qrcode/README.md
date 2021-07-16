## [Chillerlan QRCode Generator](https://github.com/chillerlan/php-qrcode)


### Installation
Install through [composer](https://getcomposer.org/):

```bash
$ composer require chillerlan/php-qrcode
```

### [Usage](index.php)
```php
use chillerlan\QRCode\QRCode;

$qrCode = new QRCode;
$secret = 'otpauth://authentication/secret=B3JX4VCVJDVNXNZ5&issuer=php.net';
echo '<img src="' . $qrCode->render($secret) . '" alt="QR Code" />';

// Store in a Directory
$qrCode->render($secret, 'storage/qrcode.jpg');
```
