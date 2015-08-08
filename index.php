<?php 


include('webbotchecker.php');







/**
 * [$botObject Check it is by sending a bot]
 * @var WebBotChecker
 */
//$_SERVER['HTTP_USER_AGENT'] = 'Googlebot/2.1 (+http://www.googlebot.com/bot.html)';




$botObject = new WebBotChecker();
echo '<b>User Agent Name : </b>' . $_SERVER['HTTP_USER_AGENT'];
echo '<br><b>Is user bot / spider? : </b>' . $boolIsBot = $botObject->isThatBot();
echo '<br><b>Bot User Agent Name : </b>' . $strBot = $botObject->getMyBot();

?>

