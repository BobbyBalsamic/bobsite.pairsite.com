<?php

$fullname = $_GET['fname'];
if(empty($fullname)) {
  die('Full Name Required');
}

$bad_chars = array(";", ">", "<", "#", "&", "/", "~", "`", "$", "*", "\\", "|", "[", "]", "{", "}");

foreach($bad_chars as $char){
  if (strpos($fullname, $char) !== false) {
    exit("No Special Characters Allowed!");
  }
}
$sanatized_fullname = str_replace(" ", "\\ ", $fullname);

$guestbook = fopen("guestbook.txt", "a") or die("Unable to open this file!");
$today = date("F j, Y, g:i a");
fwrite($guestbook, "$today: $sanatized_fullname\n");
$txt = "Dingus Detected\n";
fwrite($guestbook, $txt);
fclose($guestbook);
header('Location: /');

?>
