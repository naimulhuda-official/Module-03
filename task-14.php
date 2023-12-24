<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DO While loop</title>
</head>
<body>
<h2>Multiplication-table of 2</h2>

     <?php
     $n=2;
     $e=1;
     do{
        echo $n."x".$e."=".$n*$e."<br>";
        $e++;
     }
        while($e<=20)
     
     
     ?>
         <h2>Multiplication-table of 40</h2>
      <?php
      
      $namta=40;
      $gooo=1;
do{
    echo $namta."x".$gooo."=".$namta*$gooo."<br>";
    $gooo++;
}
while($gooo<=500)

      ?>

</body>
</html>