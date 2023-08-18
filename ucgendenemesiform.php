<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $aci1=$_GET["aci1"];
    $aci2=$_GET["aci2"];
    $aci3=$_GET["aci3"];
    $toplam=$aci1+$aci2+$aci3;

    if ($toplam!=180) {
       echo"Hatalı değer girdiniz lütfen kontrol edip tekrar deneyiniz";
          
        
    }
    else{

        if($aci1==$aci3&&$aci1==$aci2){
            echo"Bu bir eşkenar üçgendir";
        }
        

        elseif($aci1==$aci2 or $aci1==$aci3 or $aci2==$aci3){

            if($aci1==90 or $aci2==90 or $aci3==90){
                echo"Bu bir ikizkenar dik üçgendir";
            }
            else{
                echo"Bu bir ikizkenar üçgendir";
            }    
        }


        elseif($aci1==90 or $aci2==90 or $aci3==90){
            echo"Bu bir dik üçgendir";

        }
        
      
        else{
            echo"Bu bir çeşitkenar üçgendir";
        }
    }   
        
    

    
    ?>


</body>
</html>