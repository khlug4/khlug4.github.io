<?php
    function draw($num) {
        if (rand(0,$num)/$num == 0){
            $res = '당첨';
        }
        else {
            $res = '꽝';
        }
        return $res;
    }
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>제비뽑기</title>
</head>
<body>
    <h2><?php 
        $num = $_GET['num'];
        $_SESSION['num'] = $num;
        $res = draw($num);
        echo $res; 
    ?></h2>
    <form>
        <input type="button" value="다시뽑기" onClick="window.location.reload()">
    </form>
</body>
</html>


