<?php

  //入力値を取得
  $input_line = trim(fgets(STDIN));

  /** 単語リスト */
  $words = explode(" ", $input_line);
  /** 出力リスト */
  $data = array();

  //各単語の出現回数をカウント
  foreach($words as $word){
    $data[$word] = (array_key_exists ( $word , $data)) ? ++$data[$word] : 1;
  }

  //出力値
  $result = '';
  //出力用テキストを生成
  foreach($data as $word => $count){
     $result .= $word . " " . $count . "\n";
  }
  //出力
  echo $result;

?>
