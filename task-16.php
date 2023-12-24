<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array with for loop</title>
</head>
<body>
     <?php
     $books= array("Bangla","English","Higher Math","Physic","Chemistry","Biology");
     echo $books[0]."<br>";
     $AllBooks=count($books);
     for($i=0;$i<$AllBooks;$i++){
      echo  $books[$i]."<br>";
     }
      ?>

      <?php
      
      $friendsName=array("Naimul huda","Ariful Islam","karim Uddin","Rahim Uddin","Aubdul Khalek");
      $All_Firends_Name=count($friendsName);
      echo $friendsName[0];
      for($a=0;$a<$All_Firends_Name;$a++){
       echo $friendsName[$a];
      }
      ?>

      

     <?php
      $Bangladeshi_Friends=array("Rafiq","Shafiq","Jobber","Motin","Korim","Rahim");
      $My_All_Bngladeshiu_Friends=count($Bangladeshi_Friends);
      echo $Bangladeshi_Friends[0];

      for($n=0;$n<$My_All_Bngladeshiu_Friends;$n++){
        echo $Bangladeshi_Friends[$n];

      }
     
     ?>

     <?php
        $Book_List=array("english book","Bangla book","ict book");
        echo $Book_List[0];
        $All_Of_My_bOOKS=count($Book_List);
        for($a=0;$a<$All_Of_My_bOOKS;$a++)
        echo $Book_List[$a] ."<br>";

        $neigbours=array(

            "neigbourone" => "Arif",
            "neigbourtwo" => "Karim",
            "Neigbourthree" => "Rahim",
            "Neigbourfour" => "Abir"
        );

        foreach($neigbours as $neig){
            echo $neig . "<br>";
        }

        
    ?>

</body>
</html>