
<?php
  $string_name = " testcookie";
  $string_value = "This is a test cookie";
  $expiry_info = time()+259200;
  $string_domain = "localhost.localdomain";

  setcookie($string_name, $string_value, $expiry_info, $string_domain);
?>
