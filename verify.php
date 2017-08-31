<?php
$access_token = 'GisRbNPenbT2yUm8+AbDWIYgXZX17GoYa4FbBlia9cB7xMj87uzTTY7vVQO0/tHd/qZhdtT+AnOdurOvKaR4LM/PQpxkQsL+t7+msL1fE63c2RNyIIkufnpLjj0xxIObLXv1JhdXcq9Fw5Cy3ZOuFgdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
