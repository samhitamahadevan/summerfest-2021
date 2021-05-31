
<?php
  
// Include the qrlib file
include 'phpqrcode/qrlib.php';
  
// $text variable has data for QR 
$text = "SummerFest2021";
  
// QR Code generation using png()
// When this function has only the
// text parameter it directly
// outputs QR in the browser
QRcode::png($text);
?>


