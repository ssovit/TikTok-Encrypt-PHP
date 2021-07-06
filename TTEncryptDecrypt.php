<?php 
header("Content-Type: text/plain");
require('./TTEncrypt.php');
$startTime=microtime(true);
$dataToEncode=file_get_contents("./encrypted.bin");
$ttEncrypt = new TTEncrypt();
$decrypted = $ttEncrypt->decrypt($dataToEncode);
$endTime=microtime(true);
echo "\n =========================\n";
echo "\nDecryption Time Taken: \n";
echo ($endTime-$startTime)*1000 . "ms";
//echo "\nDecrypted Data:\n" . $decrypted . "\n";
$startTime=microtime(true);
echo "\n =========================\n";
$encrypted = $ttEncrypt->encrypt($decrypted);
$endTime=microtime(true);
echo "\nEncryption Time Taken: \n";
echo ($endTime-$startTime)*1000 . "ms";
//echo "\nEncrypted Data:\n" . base64_encode($encrypted) . "\n";
