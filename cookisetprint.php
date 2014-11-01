<?php
 setcookie( "vegetable", "artichoke", time()+3600, "/","java2s.com", 0 );
 ?>
 <html>
 <head>
 <title>Setting and Printing a Cookie Value</title>
 </head>
 <body>
 <?php
 if ( isset( $_COOKIE['vegetable'] ) ) {
     print "<p>Hello again, your chosen vegetable is ";
     print "{$_COOKIE['vegetable']}</p>";
 } else {
     print "<p>Hello you. This may be your first visit</p>";
 }
 ?>
 </body>
 </html>
