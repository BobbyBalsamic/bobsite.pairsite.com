<?php
  $guest_file = "./guestbook.txt";
  $guests = fopen($guest_file, "r") or die("Unable to open file!");
  $contents = fread($guests,filesize($guest_file));
  echo "<textarea 
          class='bg-dark border border-secondary' 
          rows='10'
          style='width: 100%; 
                     overflow-y:scroll;
          	     height: 100%; 
           	     color: white; 
           	     padding: 5px' 
          readonly>$contents</textarea>";
?>
