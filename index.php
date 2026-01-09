<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            border-collapse: collapse;
        }        
    </style>
</head>
<body>
    <h1>PHP陣列</h1>
    <h2>建立一個學生成績陣列</h2>    
    
    <?php
    $subject=['國文','英文','數學','地理','歷史'];
    $judy=[95,64,70,90,84];
    $amo=[88,78,54,81,71];
    $john=[45,60,68,70,62];
    $peter=[59,32,77,54,42];
    $hebe=[71,62,80,62,64];
    ?>
    
    <table border="1" cellpadding="5">
    <tr>
        <th>學生</th>
        <?php
        foreach ($subject as $sub) {
            echo "<th>{$sub}</th>";
        }
        ?>
    </tr>
    <tr>
        <td>Judy</td>
        <?php foreach ($judy as $score) echo "<td>{$score}</td>"; ?>
    </tr>
    <tr>
        <td>Amo</td>
        <?php foreach ($amo as $score) echo "<td>{$score}</td>"; ?>
    </tr>
    <tr>
        <td>John</td>
        <?php foreach ($john as $score) echo "<td>{$score}</td>"; ?>
    </tr>
    <tr>
        <td>Peter</td>
        <?php foreach ($peter as $score) echo "<td>{$score}</td>"; ?>
    </tr>
    <tr>
        <td>Hebe</td>
        <?php foreach ($hebe as $score) echo "<td>{$score}</td>"; ?>
    </tr>
    </table>    

</body>
</html>