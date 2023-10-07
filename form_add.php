<?php
    $bname = $_POST['bname'];
    $aname = $_POST['aname'];
    $pname = $_POST['pname'];
    $pyear = $_POST['pyear'];
    $price = $_POST['price'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>입력하신 데이터는 다음과 같습니다.</h3>
    <div>제목 : <?= $bname?></div>
    <div>저자 : <?= $aname?></div>
    <div>출판사 : <?= $pname?></div>
    <div>출판년도 : <?= $pyear?></div>
    <div>가격 : <?= $price?></div>
</body>
</html>