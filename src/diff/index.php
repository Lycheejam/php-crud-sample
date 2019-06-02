<?php
  $hoge = array(
    'key1' => 'hogeのkey1だよ！',
    'key2' => 'hogeのkey2だよ！'
  );
  $fuga = array(
    'key1' => 'fugaのkey1だよ！',
    'key2' => 'fugaのkey2だよ！'
  );

  if(sizeof(array_diff($hoge, $fuga)) < 1){
    echo '$hogeも$fugaも一緒だよ！';
  } else {
    echo '$hogeと$fugaは違うよ！';
  }
?>