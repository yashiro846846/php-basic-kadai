<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        $nums = [15, 4, 18, 23, 10];
        function sort_2way(array $array, bool $order): array {
            if ($order) {
                echo "昇順にソートします。<br>";
                sort($array); 
            } else {
                echo "降順にソートします。<br>";
                rsort($array);
            }
            return $array;
        }
        $sortedArrayAsc = sort_2way($nums, TRUE);
        foreach ($sortedArrayAsc as $num) {
        echo $num . '<br>';
        }
        $sortedArrayDesc = sort_2way($nums, FALSE);
        foreach ($sortedArrayDesc as $num) {
         echo $num . '<br>';
        }
        ?>
    </p>
</body>

</html>
