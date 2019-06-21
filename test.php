<?php
$amount=2;
$from_Currency='USD';
$to_Currency='INR';
 $amount = urlencode($amount);
  $from_Currency = urlencode($from_Currency);
  $to_Currency = urlencode($to_Currency);
  $get = file_get_contents("https://www.google.com/finance/converter?a=$amount&from=$from_Currency&to=$to_Currency");
  $get = explode("<span class=bld>",$get);
  $get = explode("</span>",$get[1]);  
  $converted_amount = preg_replace("/[^0-9\.]/", null, $get[0]);
echo  $converted_amount;

?>
