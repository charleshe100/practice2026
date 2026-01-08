<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .font{
            font-family: monospace;
        }
    </style>
</head>
<body>
    <h1>PHP程式流程控制</h1>
    <h2>以 * 符號為基礎在網頁上排列出下列圖形</h2>    
    <ul>
        <li>直角三角形</li>
        <li>倒直角三角形</li>
        <li>正三角形</li>
        <li>菱形</li>   
        <li>矩形</li>   
        <li>內含對角線的矩形</li>   
    </ul> 
    <div class="font">
    <h3>直角三角形</h3>
    <?php
    for ($i=1; $i <6 ; $i++) { 
        for ($j=1; $j <=$i ; $j++) { 
            echo '*';
        }
        echo "<br>";
    }
    ?>

    <h3>倒直角三角形</h3>
    <?php
    for ($i=1; $i <6 ; $i++) { 
        for ($j=5; $j >=$i ; $j--) { 
            echo '*';
        }
        echo "<br>";
    }
    ?>

    <h3>正三角形</h3>
    
    <?php
    for ($i=1; $i <=5 ; $i++) { 
        for ($k=1; $k <=(5-$i) ; $k++) { 
            echo "&nbsp;";
        }
        
        for ($j=1; $j <=(2*$i-1) ; $j++) { 
            echo '*';
        }
        echo "<br>";
    }
    ?>    
    
    <h3>菱形</h3>
    
    <?php
    $temp=0;
    for($i=1;$i<=9;$i++){
 
    if($i>5){
        $temp=$temp-1;
    }else{
        $temp=$i;
    }
    
    for($j=1;$j<=(4+$temp);$j++){
        if($j<=(5-$temp)){
        echo "&nbsp;";
        }else{
        echo "*";
        }
    }
    echo "<br>";
    }
    ?>    

    <h3>矩形</h3>
    
    <?php
    for($i=1 ; $i<=9 ; $i++){
    for( $j=1 ; $j<=9 ; $j++ ){        
        if($i==1 || $i==9){        
        echo "*";        
        }else if($j==1 || $j==9){          
        echo "*";        
        }else{        
        echo "&nbsp;";        
        }        
    }    
    echo "<br>";
    }
    ?>    
    
    <h3>內含對角線的矩形</h3>
    
    <?php
    for($i=1 ; $i<=9 ; $i++){
    for( $j=1 ; $j<=9 ; $j++ ){    
        if($i==1 || $i==9){        
        echo "*";        
        }else if($j==1 || $j==9 || $j==$i || $j==(9-$i+1)){            
        echo "*";        
        }else{        
        echo "&nbsp;";        
        }
    }    
    echo "<br>";
    }
    ?>
    </div>
</body>
</html>