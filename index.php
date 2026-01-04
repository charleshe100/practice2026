<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>values</h1>
    <h2>閏年判斷</h2>
    <h3>給定一個西元年份，判斷是否為閏年</h3>
    1. 地球對太陽的公轉一年的真實時間大約是365天5小時48分46秒，因此以365天定為一年 的狀況下，每年會多出近六小時的時間，所以每隔四年設置一個閏年來消除這多出來的一天。<br>
    2. 公元年分除以4不可整除，為平年。<br>
    3. 公元年分除以4可整除但除以100不可整除，為閏年。<br>
    4. 公元年分除以100可整除但除以400不可整除，為平年。<br><br>
    <?php 
    $year=2026;
    echo "西元：{$year} 年<br>";    
    
    if($year%4==0 && $year%100!=0){
        echo "判斷為：閏年";
    }elseif($year%400==0){
        echo "判斷為：閏年";
    }else{
        echo "判斷為：平年";
    }     
    
    
    // 2. 公元年分除以4不可整除，為平年。
    // if($year%4==0){
    //     echo "判斷為：閏年";
    // }else{
    //     echo "判斷為：平年";
    // }
    // echo "<br>";

    // 3. 公元年分除以4可整除但除以100不可整除，為閏年。
    // if($year%4==0 && $year%100!=0){
    //     echo "判斷為：閏年";
    // }else{
    //     echo "判斷為：平年";
    // }
    // echo "<br>";

    // 4. 公元年分除以100可整除但除以400不可整除，為平年。
    // →  可被400整除的是閏年。
    // if($year%100==0 && $year%400!=0){
    //     echo "判斷為：平年";
    // }else{
    //     echo "判斷為：閏年";
    // }

    ?>
</body>
</html>