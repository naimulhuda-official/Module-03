<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>module 03 /Task 11</title>
</head>
<body>
    

<?php
  
  $number=40;
  
  switch($number){

    case '90':
       echo "Golden A+";
       break;

    case '80':
        echo "A+";
        break;

    case'70': 
        echo "A";
        break;
        
    case'60' :
        echo "A-";
        break;
        
    case'50' :
        echo"B";
        break;
        
    case'40':
        echo"D";
        break;
        
    default:
    echo"Fail"; 
    break;  

    }
    echo "<br>";

?>



<?php
   
 echo "My all Subjects: ";
echo "<br>";
echo"Subject Number 01 : Bangla =" .  $s1=70;
echo "<br>";
echo"Subject Number 02 : English =" .  $s2=90;
echo "<br>";
echo"Subject Number 03 : ICT =" .  $s3=60;
echo "<br>";
echo"Subject Number 04 : Physic =" .  $s4=70;
echo "<br>";
echo"Subject Number 05 : Chamestrry =" .  $s5=80;
echo "<br>";
echo"Subject Number 06 : Biology =" .  $s6=88;
echo "<br>";
echo"Subject Number 07 : HigherMath =" .  $s7=78;
echo "<br>";
$Total=($s1+$s2+$s3+$s4+$s5+$s6+$s7);
echo "<br>";
echo "Total Marks = " . $Total;
echo "<br>";
$per=($Total/700)*100;
echo "<br>";
echo "Percentage = " . $per;
echo "<br>";
$marks=(105.6/10);
echo "<br>";
echo $marks;
echo "<br>";
switch( $per/10){
case($per>=90):
    echo "Grade Golden A+";
    break;
 
 case($per>=80):
    echo "Grade A+";
    break;
    
case($per>=70):
echo"Grade A";
break;

case($per>=60):
    echo"Grade A-";
    break;

 case($per>=50):
    echo"Grade B";
    break;
    
case($per>=40):
    echo"Grade D";
    break;

default:
echo "grade F";
break;

}

?>

</body>
</html>