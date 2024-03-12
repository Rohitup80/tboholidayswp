<!DOCTYPE html>
<html>
<body>
<?php

$TBO = array("HOLIDAY" , "Academy" , "ZamZam", "paxes");
$company = "mmt";
switch($company){
case $TBO[0]:
echo "Matched with" . $TBO[0];
echo "<br>";
break;
case $TBO[1]:
echo "Matched with" . $TBO[1];
echo "<br>";
case $TBO[2]:
echo "Matched with" . $TBO[2];
echo "<br>";
case $TBO[3]:
echo "Matched with" . $TBO[3];
echo "<br>";
break;
default;
echo "Not Details are not Matching. Please check Your Company name" . implode('<br>' , $TBO) ;

}
?>
</html>