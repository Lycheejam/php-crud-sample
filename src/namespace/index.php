<?php
  require_once "hoge.php";
  require_once "fuga.php";

  echo '/namespace/index.phpです。\n';

  $hoge = new HogeClass();
  $hoge->HogeHoge();
  echo '<br>';
  $hoge->HogeFuga();

  echo '<br>';

  $fuga = new FugaClass();
  $fuga->FugaFuga();
  echo '<br>';
  $fuga->HogeFuga();
?>