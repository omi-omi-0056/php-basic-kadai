<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>PHP基礎編</title>
</head>

<body>
  <p>
    <?php
    function sort_2way($array, $order)
    {
      if ($order) {
        echo '昇順にソートします';

        sort($array);

        foreach ($array as $ary) {
          echo $ary . '<br>';
        }
      } else {
        echo '降順でソートします<br>';

        sort($array);

        foreach ($array as $ary) {
          echo $ary . '<br>';
        }
      }
    }

    // 配列の設定
    $nums = [15, 4, 18, 23, 10];

    // 配列を後順位ソート
    sort_2way($nums, true);

    // 配列を降順にソート
    sort_2way($nums, false);
    ?>
  </p>
</body>

</html>