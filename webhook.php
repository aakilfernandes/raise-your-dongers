<?PHP

$webhookKey = 'xxxxxxxxxxxxxx'; // key from http://getredditalerts.com
$redditUsername = 'username'; //username of your bot
$redditPassword = 'password'; //password of your bot


//you shouldn't need to edit anything below this line, unless you want to customize the response

if(!isset($_POST['redditAlertJson'])){ 
	die('Missing redditAlertJson');
}

$redditAlert = json_decode($redditAlertJson);

if($redditAlert->webhookKey!==$webhookKey){ 
	die('Wrong webhookKey');
}

$reddit = new reddit($redditUsername,$redditPassword);

$reddit->addComment($redditAlert->reddit->name,'ヽ༼ຈل͜ຈ༽ﾉ');

exit;