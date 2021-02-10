<!DOCTYPE html>
<html>
<body>

<?php
$var=array(
    array("Ferrari",20,18),  
    array("Maserati",32,50),   
    array("Lamborghini",10,75)    
);

for ($num=0; $num<3; $num++) {
    echo "<p><b>Array N.$num</b></p>";
    echo "<ul>";
    for ($obj=0; $obj<3; $obj++) {
      echo "<li>" .$var[$num][$obj] . "</li>";
    }
    echo "</ul>";
}

?>
 
</body>
</html>