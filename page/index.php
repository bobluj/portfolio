<?php ob_start(); 
include '../utile/format.php';
echo("ok utile");
require 'carousel.php';
echo("ok carousel");
require 'callToAction.php';
echo("ok callToaction");
require 'video.php';
echo("ok video");
require 'skills.php';
echo("ok skills");
require 'cards.php';
echo("ok cards");
require 'testimony.php';
echo("ok testimony");
$content = ob_get_clean();
require '../commons/template.php';

?>