<?PHP

ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);
echo "<pre>";

$webhookKey = 'xxxxxxxx'; // key from http://getredditalerts.com
$redditUsername = 'xxxxxxxx'; //username of your bot
$redditPassword = 'xxxxxxxx'; //password of your bot

//you shouldn't need to edit anything below this line, unless you want to customize the response
if(!isset($_POST['redditAlertJson'])){ 
	die('Missing redditAlertJson');
}

$redditAlertJson = $_POST['redditAlertJson'];

$redditAlert = json_decode($redditAlertJson);

if($redditAlert->webhookKey!=$webhookKey){
	die('Wrong webhookKey');
}

require 'reddit.php';
$reddit = new reddit($redditUsername,$redditPassword);

$response = $reddit->addComment($redditAlert->reddit->name,'ヽ༼ຈل͜ຈ༽ﾉ');
var_dump($response);

exit;