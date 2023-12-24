<?php
declare(strict_types=1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function return</title>
</head>
<body>
    <?php
    function addingnumber(int $m,int $n,int $o){
        return $m+$n+$o;
    
    }
    echo addingnumber(30,40,60);
    echo "<br>";
    echo addingnumber(50,40,60);
    
    
    ?>
    <?php
     function numberadding($a,$b,$c,$d){
      return $a+$b+$c+$d;

     }
     echo  numberadding(10,20,30,40);

    ?>
    <?php
    function naimulhudanaim($nameofnaim,$nameofnazim){
      echo "Thi is ".$nameofnaim. "  "."This is"." ". $nameofnazim ."<br>";
    }
    naimulhudanaim("Naimul huda","Nazmul huda");
    naimulhudanaim("Ariful Islam","Sana huda");
 
    ?>
</body>
</html>