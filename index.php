<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>values</h1>
    <h2>三元運算字（Ternary Operator）</h2>
    <?php 
    $score=60;
    
    // if ($score>=60) {
    //     $level='及格';
    // }else{
    //     $level='不及格';
    // }
    $level=($score>=60)?'及格':'不及格';
    echo "分數：$score<br>判定：$level" ; 

    ?>
</body>
</html>