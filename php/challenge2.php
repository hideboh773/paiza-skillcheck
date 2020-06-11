<?php

    /** 検索ワードの数 */
    $num = trim(fgets(STDIN));
    //出力リストを生成
    $words = array();
    for($i = 0; $i < $num; $i++){
        //単語を取得
        $word = trim(fgets(STDIN));
        //キーが存在する場合、出力リストから削除
        $idx = array_search($word, $words, TRUE);
        if($idx !== FALSE) unset($words[$idx]);
        //単語を先頭に追加
        array_unshift($words, $word);
    }

    echo implode("\n", $words);