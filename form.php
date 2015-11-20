<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>


<form id="form" name="form" method="post" action="">
name: <input type="text" name="fname"><br>
address: <input type="text" name="address"><br>
tp_number: <input type="float" name="tp_number"><br>
vehicle: <input type="text" name="vehicle"><br>
model: <input type="text" name="model"><br>
year: <input type="date" name="year"><br>
price: <input type="text" name="price"><br>
country: <input type="text" name="country"><br>
color: <input type="text" name="color"><br>
other: <input type="text" name="other"><br>
<br>

<input type="submit" value="submit">
</form>


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "daddb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

if ((isset($_POST["database"])) && ($_POST["database"] == "form")) {
  $insertSQL = sprintf("INSERT INTO usersnew (name, address, tp_number, vehicle, model, year, price, country, color, other");









</body>
</html>
