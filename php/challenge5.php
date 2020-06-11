<?php
    //1行目取得
    $line = explode(" ", trim(fgets(STDIN)));
    //ログ取得
    $log = explode(" ", trim(fgets(STDIN)));
    
    /** 日数 */
    $days = (int)$line[0];
    /** 期間 */
    $range = (int)$line[1];
    
    //出力リスト生成
    $data = array();
    for($i = 0; $i <= $days - $range; $i++){
        $sum = 0;
        for($j = $i; $j < $i + $range; $j++) $sum += $log[$j];
        array_push($data, $sum / $range);
    }

    /** 最大値 */
    $max = max($data);
    $count = 0;
    $idx = '';
    foreach($data as $k => $v){
        if($v !== $max) continue;
        if($idx === '') $idx = $k + 1;
        $count++;
    }
    
    echo $count . " " . $idx;
?>