<?php

require 'vendor/autoload.php';


/**
 * QR Code Generate
 *
 * @package Chillerlan
 *
 * @param string
 * @return void
 */
$qrCode = new \chillerlan\QRCode\QRCode;
$secret = 'otpauth://authentication/secret=B3JX4VCVJDVNXNZ5&issuer=php.net';

echo '<img src="' . $qrCode->render($secret) . '" alt="QR Code" />';
$qrCode->render($secret, 'storage/qrcode.jpg');
