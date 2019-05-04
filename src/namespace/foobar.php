<?php
  require_once 'foo.php';
  require_once 'bar.php';

  echo 'foobar.phpです。<br>';

  echo foo\GetStr();
  echo '<br>';
  echo bar\GetStr();
?>