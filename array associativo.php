<!DOCTYPE html>
<html>
<body>

<?php
$var=array("Francesco"=>"35", "Matteo"=>"25");

echo "Francesco ha " . $var['Francesco'] . "anni e Matteo " . $var['Matteo'] . " anni.";   //attenzione alla punteggiatura

//foreach
$var=array("Francesco"=>"35", "Matteo"=>"25");
foreach ($var as $x=>$z) {
    echo $x . " ha " . $z . " anni";
    echo "<br>";
}


?>
 
</body>
</html>