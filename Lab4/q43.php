<!DOCTYPE html>
<html>
<head>
	<title>FORM</title>
</head>
<body>
<h1>EVENT REGISTRATION FORM</h1>
<form action="bill.php" method="post">
<h4>How many people are you buying tickets for? </h4>
<select name="no">
  <option  value="one">1</option>
  <option  value="two">2</option>
  <option  value="three">3</option>
  <option  value="four">4</option>
</select>
<h4>T-shirt size</h4>
  <input type="radio" name="size" value="S"> S
  <input type="radio" name="size" value="M"> M
  <input type="radio" name="size" value="L"> L
  <input type="radio" name="size" value="XL"> XL
<h4>Name</h4>
<input type="text" name="first" placeholder="first">
<input type="text" name="last" placeholder="last">
<h4>Email</h4>
<input type="text" name="email" placeholder="Email"><br>
<br>
<input type="Submit" name="submit">



</body>
</html>





</form>
</body>
</html>