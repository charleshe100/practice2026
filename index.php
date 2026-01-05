<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>PHP程式流程控制</h1>
    <h2>使用for迴圈來產生以下的數列</h2>
    1,3,5,7,9……n<br>
    10,20,30,40,50,60……n<br>
    3,5,7,11,13,17……97
    
    <h3>1,3,5,7,9……n</h3>
    <?php 
    for ($oddnumber=1; $oddnumber < 101; $oddnumber++) { 
        echo "{$oddnumber}, ";
        if ($oddnumber%10==0) {
            echo "<br>";
        }
    }
    ?>

    <h3>10,20,30,40,50,60……n</h3>
    <?php 
    for ($tennumber=10; $tennumber < 101; $tennumber+=10) { 
        echo "{$tennumber}, ";        
    }
    
    ?>

    <h3>3,5,7,11,13,17……97</h3>
    質數<br>
    1. 必須是 > 1<br>
    2. 只有兩個因數：1 和它自己。<br><br>
    <?php 
    // for ($primenumbers=2; $primenumbers < 101; $primenumbers++) { 
    //     if ($primenumbers==2 || $primenumbers==3 || $primenumbers==5 || $primenumbers==7 || 
    //         ($primenumbers%2!=0 && $primenumbers%3!=0 && $primenumbers%5!=0 && $primenumbers%7!=0)) {
    //         echo "{$primenumbers}, ";
    //     }
    // }
    
    $count = 0;
    for ($num = 2; $num <= 200; $num++) {

        $isPrime = true;

        for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            $isPrime = false;
            break;
        }
        }

        if ($isPrime) {
        echo "{$num}, ";
        $count++;

        if ($count % 10 == 0) {
            echo "<br>";
        }
        }
    }




    ?>

</body>
</html>