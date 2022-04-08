<!DOCTYPE html>
<html>
<body>

<?php
$broj=$_POST['font'];
$nacin=$_POST['disc'];
$rezultat=0;

function vrati($broj,$nacin){
    if($nacin=="free"){
        $rezultat=$broj*0.9;
     }
     
     elseif($nacin=="classic"){
        $rezultat=$broj*0.85;
     }
     else{
        $rezultat=$broj*0.68;
     }
     return $rezultat;
}

echo vrati($broj,$nacin);



?>

</body>
</html>