<?php
echo "welcome associate array <br>";

/*$colour = array ('green','white','red','yellow');

echo "This is rohan's colour $colour[0]<br>";
echo "This is vijay's colour $colour[1]<br>";
echo "This is mahesh's colour $colour[2]<br>";
echo "This is saif's colour $colour[3]<br>";
*/

$favClr = array('shubham'=>'green','mahesh'=>'white','sarang'=>'red','vaibhav'=>'yellow','10'=>'voilet');

/*
echo $favClr['shubham'];
echo "<br>";
echo $favClr['mahesh'];
echo "<br>";
echo $favClr['sarang'];
echo "<br>";
echo $favClr['vaibhav'];
echo $favClr['10'];
*/

foreach ($favClr as $key => $value) {

    echo "<br> Favorite colour of $key is $value";
}

?>
