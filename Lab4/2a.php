<?php
$cookie_name1 = "user1";
$cookie_value1 = "VIDHI";
$cookie_name2 = "user2";
$cookie_value2 = "WTA";
$cookie_name3 = "user3";
$cookie_value3 = "LAB";
setcookie($cookie_name1, $cookie_value1, time() + (86400 * 30), "/"); // 86400 = 1 day
setcookie($cookie_name2, $cookie_value2, time() + (86400 * 30), "/");
setcookie($cookie_name3, $cookie_value3, time() + (86400 * 30), "/");
?>
<html>
<body>

<?php
if(!isset($_COOKIE[$cookie_name1])) {
    echo "Cookie named '" . $cookie_name1 . "' is not set!"."<br>";
} else {
    echo "Cookie '" . $cookie_name1 . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$cookie_name1]."<br>";
}
if(!isset($_COOKIE[$cookie_name2])) {
    echo "Cookie named '" . $cookie_name2 . "' is not set!"."<br>";
} else {
    echo "Cookie '" . $cookie_name2 . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$cookie_name2]."<br>";
}
if(!isset($_COOKIE[$cookie_name3])) {
    echo "Cookie named '" . $cookie_name3 . "' is not set!";
} else {
    echo "Cookie '" . $cookie_name3 . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$cookie_name3];
}
?>

</body>
</html>
<?php
// set the expiration date to one hour ago
setcookie("user1", "", time() - 3600);
setcookie("user2", "", time() - 3600);
?>
<html>
<body>

<?php
//	echo "<br>"." Cookie 'user' is deleted."."<br>";
?>