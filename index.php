<!DOCTYPE html>
<html lang="zh-Hant">
<head>
    <meta charset="UTF-8">
    <title>字串處理</title>
    <style>
        .highlight {
            color: red;
            font-size: 28px;
            font-weight: bold;
        }
    </style>    
</head>
<body>

<h1>尋找字串與HTML、css整合應用</h1>
<h2>
    <ul>
        <li>給定一個句子，將指定的關鍵字放大</li>
        <li>“學會PHP網頁程式設計，薪水會加倍，工作會好找”</li>
        <li>請將上句中的 “程式設計” 放大字型或變色.</li>
    </ul>
</h2>
<?php 
$string="學會PHP網頁程式設計，薪水會加倍，工作會好找";
echo "原本的句子是：".$string."<br>";

$keyword = "程式設計";

$result = str_replace(
    $keyword,
    "<span class='highlight'>{$keyword}</span>",
    $string);

echo "變更後的句子是：".$result."<br>";
?>

</body>
</html>
