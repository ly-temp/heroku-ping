<?php
  $ping_url = substr($_SERVER['REQUEST_URI'], strpos($_SERVER['REQUEST_URI'], "/", 1)+1);
  exec('curl "'.$ping_url.'" >/dev/null 2>&1');
  echo "ping: ".$ping_url;
?>
