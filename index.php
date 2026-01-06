<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .table1{
            border: 3px solid #ccc;
        }
        .tablewrap{
            display: inline-block;
            padding: 5px;
            border: 3px solid #aaa;
        }
        .table2{
            border-collapse: collapse;
        }
        tr, td {
            margin-right: auto;   
            padding:10px; 
            text-align: center;      
        }
        .td2{            
            border: 1px solid #ccc;
        }
        .bg{
            background: #ddd;
        }
    </style>
</head>
<body>
    <h1>PHP程式流程控制</h1>
    <h2>九九乘法表</h2>
    <h3>以表格排列的九九乘法表</h3>
    <table class="table1">             
    <?php     
    for ($i=1; $i <10 ; $i++) { 
        echo "<tr class='tr1'>";        
        for ($j=1; $j <10 ; $j++) { 
            echo "<td class='td1'>";
            $k=$i*$j;
            echo $i.'×'.$j.'='.$k;
            echo "</td>";
        }
        echo "</tr>";
    }
    ?>
    </table>

    <h3>以交叉計算結果呈現的九九乘法表</h3>
    <div class="tablewrap">
    <table class="table2">             
    <?php 
    // 第一列
    echo "<tr>";
    // 左上第一格
    echo "<td class='td2 bg'>";
    echo "</td>";
    
    for ($m=1; $m <10 ; $m++) {
        echo "<td class='td2 bg'>{$m}</td>";
    } 
    echo "</tr>";  
    
    for ($m=1; $m <10 ; $m++) {
        echo "<tr class='tr2'>"; 
        // 第一欄
        echo "<td class='td2 bg'>{$m}</td>";
        // 九九乘法
        for ($n=1; $n <10 ; $n++) { 
            $p=$m*$n;
            echo "<td class='td2'>{$p}</td>";
        }
        echo "</tr>";      
    }
    ?>
    </table>
    </div>
    <br>
    <br>
    <br>
</body>
</html>