<?php
  $username = 'user';
  $password = 'pass';
  if (!($_SERVER['PHP_AUTH_USER'] === $username && $_SERVER['PHP_AUTH_PW'] === $password)) {
    header('WWW-Authenticate: Basic realm="Enter username and password."');
  } else {
    echo 'hello';
  }
?>
