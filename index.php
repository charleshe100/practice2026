<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>values</h1>
    <h2>成績判斷</h2>
    <h3>判斷成績及格學生</h3>
    <?php 
    $score=99;
    echo "分數：$score 分<br>";
    echo '判斷為：';
    if(100>=$score && $score>=60){
        echo "及格";
    }elseif(60>$score && $score>=0){
        echo "不及格";
    }else{
        echo '分數輸入錯誤，無法判斷';
    };
    ?>

    <h3>成績等級</h3>
    <?php 
    if (0<=$score && $score<60) {
        $level='E';
        echo '等級：E';
    }elseif(60<=$score && $score<70){
        $level='D';
        echo '等級：D';
    }elseif(70<=$score && $score<80){
        $level='C';
        echo '等級：C';
    }elseif(80<=$score && $score<90){
        $level='B';
        echo '等級：B';
    }elseif(90<=$score && $score<=100){
        $level='A';
        echo '等級：A';
    }else{
        $level='成績分數輸入錯誤';
        echo '成績分數輸入錯誤';
    };
    
    ?>

    <h3>依據學生成績等級給予評價</h3>
    <?php 
    switch ($level) {
        case 'E':
            echo '評價：需加努力';
            break;
        case 'D':
            echo '評價：進度落後';
            break;
        case 'C':
            echo '評價：需再加強';
            break;
        case 'B':
            echo '評價：表現良好';
            break;
        case 'A':
            echo '評價：學習優異';
            break;     
        case '成績分數輸入錯誤':
            echo '請輸入正確分數';
            break;
    }
    ?>
</body>
</html>