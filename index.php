<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .article{
            width: 500px;
        }
    </style>
</head>
<body>
    <h1>PHP程式流程控制</h1>
    <h2>尋找字元(使用while)</h2>    
    <ul>
        <li>定一個字串句子</li>
        <li>給定一個單字或字母</li>
        <li>尋找相符的內容</li>
        <li>印出尋找到的單字或字母所在句子中的位置</li>   
    </ul> 
    <?php
    $article= "<div class='article'>
    文章：<br>
    據觀光署統計，114年1到11月國人海外旅遊首選日本。<br>
    旅遊業者今天公布，114年海外旅遊最熱門目的地為大阪，其次為釜山、沖繩。<br>
    另有業者指出，團體旅遊搜尋量以紐澳增加最多。<br><br>
    
    According to the Tourism Bureau, Japan was the top overseas travel destination for Taiwanese tourists from January to November 2025.<br><br>
    Tourism operators announced today that Osaka was the most popular overseas travel destination in 2025, followed by Busan and Okinawa.<br><br>
    Other operators pointed out that searches for group tours saw the largest increase in Australia and New Zealand.<br><br>
    </div>";
    
    echo $article;
    
    $position=0;
    $target="Japan";
    $articleLen=mb_strlen($article);
    $targetLen  = mb_strlen($target);
    while ($position <= $articleLen-$targetLen) {
        $part=mb_substr($article, $position, $targetLen);
            if($part===$target){
                echo "搜尋到「{$target}」, 位置在第 {$position} 個字<br>";
            }
            $position++;
    }
    
    ?>
    </table>
    </div>
    
</body>
</html>