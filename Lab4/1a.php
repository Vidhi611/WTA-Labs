<html>

<body>

<?php

echo "The time is " . date("h:i:sa");
echo "<br>";
$a=array("Greetings 1","Greetings 2","Greetings 3","Greetings 4","Greetings 5","Greetings 6","Greetings 7");

$random_keys=array_rand($a,1);

echo $a[$random_keys];

//echo $a[$random_keys[1]]."<br>";

//echo $a[$random_keys[2]]."<br>";

//echo $a[$random_keys[3]]."<br>";

//echo $a[$random_keys[4]];

?>

</body>

</html>