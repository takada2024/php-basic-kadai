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
            // $orderが「昇順/降順」の場合は「TRUE/FALSE」
            // 引数$arrayを「昇順/降順」にソート
            if ($order) {
                echo '昇順にソートします。<br>';
                sort($array);

                foreach ($array as $num) {
                    echo $num . '<br>';
                }
            } else {
                echo "降順にソートします。<br>";
                rsort($array);

                foreach ($array as $num) {
                    echo $num . '<br>';
                }
            }
        }

        // 定義
        $nums = [15, 4, 18, 23, 10];

        // 出力(true/false)
        sort_2way($nums, true);
        sort_2way($nums, false);
        ?>
    </p>
</body>

</html>