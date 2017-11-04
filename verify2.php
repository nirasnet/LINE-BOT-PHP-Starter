<?php
$access_token = 'avME3fzE4pEizgQLBXWSVDOrgIpJBHDroI/RRC+vafeGvqBg9nlW5d2ajywSn5jY3TpUvOLw0ZUgqzLXNrIv/ffjrBEwWAeDjQB0P/3TQHi1Vo4+fiWIwyB585g4FinojhkAALbomQ58ZCGsEYYVKQdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
