<?php
  if (!isset ($userdetails [0] ) ) {
     setcookie ("userdetails[0]", $username);
  }
  $userdetails[1]++;
  setcookie ("userdetails[1]", $userdetails[1]);
  echo ("Hello $userdetails[0], you've seen this page".$userdetails[1].($userdetails[1] == l?" time!": "times!"));
?>
