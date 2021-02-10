<!DOCTYPE html>
<html>
<body>

<?php
$var=array(
    //attenzione alle virgole
    array(20,18),   //riga 0     20=elemento 0    18=elemento 1
    array(32,50),   //riga 1     32=elemento 0    50=elemento 1
    array(10,75)    //riga 2     10=elemento 0    75=elemento 1
);

echo $var[0][0]." e ".$var[0][1];    //stamperà "20 e 18"


?>
 
</body>
</html>