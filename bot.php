<?php

// example: https://github.com/onlinetuts/line-bot-api/blob/master/php/example/chapter-01.php

include ('line-bot-api/php/line-bot.php');

$channelSecret = '1ce56e8d64d66d5ad38f79f4c973e1e8';
$access_token  = 'GisRbNPenbT2yUm8+AbDWIYgXZX17GoYa4FbBlia9cB7xMj87uzTTY7vVQO0/tHd/qZhdtT+AnOdurOvKaR4LM/PQpxkQsL+t7+msL1fE63c2RNyIIkufnpLjj0xxIObLXv1JhdXcq9Fw5Cy3ZOuFgdB04t89/1O/w1cDnyilFU=';

$bot = new BOT_API($channelSecret, $access_token);
	
if (!empty($bot->isEvents)) {
		
	$bot->replyMessageNew($bot->replyToken, json_encode($bot->message));

	if ($bot->isSuccess()) {
		echo 'Succeeded!';
		exit();
	}

	// Failed
	echo $bot->response->getHTTPStatus . ' ' . $bot->response->getRawBody(); 
	exit();

}
