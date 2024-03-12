<?php
$msg = "Rohit kumar is a SEO Guy";
$slr = 50000;
$HGT = 5.6;
echo "here is the information about : $msg  and his salary is $slr";
echo "<br>";
echo "here is the data types of all used variables";
echo "<br>";
var_dump($msg);
echo "<br>";
var_dump($slr);
echo "<br>";
var_dump($HGT);

$A = $B = $C = "Your name";

echo $B;
echo $A;
echo $C;
echo "<br>";

function calculator(){
$arun = "love master";
   // echo "<h3>Calling outside declared variable inside the function : $msg" </h3>;
   echo "inside declared variable $arun";


}


calculator();
    echo "<h3>Calling outside declared variable inside the function : $msg </h3>";
    echo "<br>";

    echo "<h4> Globle Variable Example";
    echo "<br>";

    $PHLEARN = 60;

    function glo(){
    global $PHLEARN;
    echo $PHLEARN;
}
echo "Globle Variable <br>";
echo $PHLEARN;

$globalVar = 10;
echo "<br>";
function myFunction() {
    global $globalVar; // This will work
    $globalVar += 10;
    $localvarb = 10;
    echo "Locle variable <br>";

    echo $localvarb;
}
myFunction();
echo "<br>";

echo "Globle variable <br>";
echo $globalVar;
echo "<br>";

echo "<h4>Static Variable</h4>";
function rohit()
{
    static $g = "rohit kumar";
    echo $g;
    $g++;
}
rohit();
rohit();
rohit();
rohit();


?>
