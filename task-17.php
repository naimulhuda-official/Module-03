

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For each loop</title>
</head>
<body>
      <?php
         $FriendsName=array(

            "friendsone" => "Naimul huda",
            "friendstwo" => "Nazmul huda",
            "friendsthree" => "Momotaz Begum",
            "friendsfour" => "Kohinur Begum",
            "friendsfive" => "Bodiuz Zaman"
         );

         foreach($FriendsName as $friend ){
            echo  $friend . "<br>" ;
         }
      ?>

      <?php
       $FruitesName=array(
         "fruiteone" => "Orange",
         "fruitetwo" => "Banana",
         "fruitethree" => "Cucomber",
         "fruitefour" => "Grasp",
         "fruitefive" => "Fineapple"

       );

       foreach($FruitesName as $fruit){

        echo $fruit . "<br>";
       }
      ?>

      <?php
       $Device_Name=array(
        "deviceone" => "windows10",
        "devicetwo" => "Mack",
        "devicethree" => "Linux"
       );
       foreach($Device_Name as $device ){

        echo $device . "<br>";
       }
      ?>


    <?php
     $Phone_Naame=array(
          "phoneone" => "Nokia",
          "phonetwo" => "iPhone",
          "phonethree" => "Sansung A20",
          "phonefour" => "Readmee"

     );
     foreach($Phone_Naame as $phone ){

        echo $phone."<br>";
     }
    ?>

    <?php
     function naimulhuda (){
        echo "Naimul huda you are right";
       }
    ?>
</body>
</html>