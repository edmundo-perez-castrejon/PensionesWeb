<?
require('php-captcha.inc.php');
$aFonts = array('fonts/VeraBI.ttf');
$oVisualCaptcha = new PhpCaptcha($aFonts, 200, 60);
$oVisualCaptcha->DisplayShadow(true);
$oVisualCaptcha->Create();
?>