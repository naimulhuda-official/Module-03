<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Argument pass</title>
</head>
<body>
    
<?php

function name($myname , $address ,$tellphone ){
    echo "welcome " . $myname."<br>" . "to". " ".$address ."<br >"."your phone number is"."  ".$tellphone;
}
name("Naimul huda","Chattogram" ,"01643002338")
    
?>

<?php
function parentsname($mother ,$father , $sister, $brother, ){
        echo "My mother name is " . $mother ."<br>". "My father name is"." ". $father 
        ."<br>"."my sister name is "." ". $sister."<br>"."My Brother name is".$brother;
}
        parentsname("Kohinur Begum","Bodiuz Zaman", "Momotaz Begum" , "Nazmul huda")


?>


<?php

 function booksname ($bangla,$english, $ict,$physi,){
    echo $bangla . " ".$english." " .$ict ;
 }
 booksname("Bangla book","english book","ict book" ,"Phsic book");
 echo "<br>";

 booksname("math book","biology book","history book" ,"Chemistry book");

?>
</body>
</html>