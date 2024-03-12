<!DOCTYPE html>
<html>
<body>
<?php

$a = 129;
if ($a >= 20 && $a < 130)

{
    echo "You are Eligible to vote";
}

else if ($a == 0 ) {
    echo "Entered Age is Invalid";
}

else {
    echo "Sorry You are note Eligible to vote";
}
?>
<?php 
echo "<h2> Company Parking Check </h2>";
$Car = "HOLIDAY";
$Car1 = "ZamZam";
$car2 = "mmt";
$company = array("HOLIDAY" , "Academy" , "ZamZam", "paxes");
if (in_array($car2, $company))
{
    echo "You can go";
}
else
{
    echo "You are not Authorised to Enter in the Company primises";
    echo "<br>";
    echo "Please Make Sure you are from" . implode(',' , $company) ;
    echo "<br>";
    echo "It Seems you are from" . $car2;

}

?>




 </html>