<?php

$title = '';
$author = '';
$status = '';
$score = '';
$summary = '';

while (true) {

  echo '1. 読書ログを登録' . PHP_EOL;
  echo '2. 読書ログを表示' . PHP_EOL;
  echo '9. アプリケーションを終了' . PHP_EOL;
  echo '番号を選択してください (1,2,9)：';
  $num = trim(fgets(STDIN));

  if ($num === '1') {
    echo '読書ログを登録してください' . PHP_EOL;
    echo '書籍名：';
    $title = trim(fgets(STDIN));
    echo '著者名：';
    $author = trim(fgets(STDIN));
    echo '読書状況(未読,読んでる,読了)：';
    $status = trim(fgets(STDIN));
    echo '評価(5点満点の整数)：';
    $score = trim(fgets(STDIN));
    echo '感想：';
    $summary = trim(fgets(STDIN));

    echo '登録が完了しました' . PHP_EOL . PHP_EOL;
  } elseif ($num === '2') {
    // 読書ログを表示する
    echo '読書ログを表示します' . PHP_EOL;
    echo '書籍名：' . $title . PHP_EOL;
    echo '著者名：' . $author . PHP_EOL;
    echo '読書状況：' . $status . PHP_EOL;
    echo '評価：' . $score . PHP_EOL;
    echo '感想：' . $summary . PHP_EOL;
  } elseif ($num === '9') {
    break;
  }
}

// echo '書籍名：銀河鉄道の夜' . PHP_EOL;
// echo '著者名：宮沢賢治' . PHP_EOL;
// echo '読書状況：読了' . PHP_EOL;
// echo '評価：5' . PHP_EOL;
// echo '感想：ほんとうの幸せとは何だろうかと考えさせられる作品だった。' . PHP_EOL;
