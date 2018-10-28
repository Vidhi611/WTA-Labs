<html>
<head>
<style>
div {
    background-color: white;
    width: 600px;
    border: 2px solid black;
    padding: 25px;
    margin: 25px;
}
</style>
</head>
<body>
<div>
Hello <?php echo $_POST["first"] ; echo $_POST["last"]; ?><br>
T-shirts <?php  echo $_POST["size"] ?> -
 <?php
$number = $_POST["no"];

switch ($number) {
    case "one":
        $value=1;
        break;
    case "two":
        $value=2;
        break;
    case "three":
        $value=3;
        break;
    case "four":
        $value=4;
        break;
    default:
        echo "Your favorite color is neither red, blue, nor green!";
}
echo $value;
?>
<br>
Your bill amount is Rs <?php  echo $value*13.50*100 ?><br>
A confirmation mail has been sent to <?php echo $_POST["email"]; ?>
</div>
</body>
</html>