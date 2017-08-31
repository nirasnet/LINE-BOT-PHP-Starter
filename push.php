<?php
 
$strAccessToken = "GisRbNPenbT2yUm8+AbDWIYgXZX17GoYa4FbBlia9cB7xMj87uzTTY7vVQO0/tHd/qZhdtT+AnOdurOvKaR4LM/PQpxkQsL+t7+msL1fE63c2RNyIIkufnpLjj0xxIObLXv1JhdXcq9Fw5Cy3ZOuFgdB04t89/1O/w1cDnyilFU=";
 
$strUrl = "https://api.line.me/v2/bot/message/push";
 
$arrHeader = array();
$arrHeader[] = "Content-Type: application/json";
$arrHeader[] = "Authorization: Bearer {$strAccessToken}";
 
$arrPostData = array();
$arrPostData['to'] = "Uef838b89036889d3410cc7f61a942cae";
$arrPostData['messages'][0]['type'] = "text";
$arrPostData['messages'][0]['text'] = "นี้คือการทดสอบ Push Message";
 
 
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$strUrl);
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $arrHeader);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($arrPostData));
curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$result = curl_exec($ch);
curl_close ($ch);
 
?>
