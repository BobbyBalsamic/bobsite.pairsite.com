<?php

$fullname = $_GET['fname'];
if(empty($fullname)) {
  echo 'Full Name Required';
  return;
}

$bad_chars = array(";", ">", "<", "#", "&", "/", "~", "`", "$", "*", "\\", "|", "[", "]", "{", "}");

foreach($bad_chars as $char){
  if (strpos($fullname, $char) !== false) {
    exit("No Special Characters Allowed!");
  }
}
$sanatized_fullname = str_replace(" ", "\\ ", $fullname);

$guestbook = fopen("guestbook.txt", "a") or die('No file detected');
$today = date("F j, Y, g:i a");
fwrite($guestbook, "$today: $sanatized_fullname\n");
$txt = "Dingus Detected\n";
fwrite($guestbook, $txt);
fclose($guestbook);
header('Location: /');

?>
