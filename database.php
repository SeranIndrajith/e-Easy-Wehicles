<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
$connect = @mysql_connect('localhost' , 'root' , ''); //connect is a variable
if(!$connect)
{
	die(mysql_error()); //if cannot create a connection with database, it shows error message 
}

mysql_select_db('waddb' , $connect) or die (mysql_error());


$mydata=mysql_query("SELECT * FROM client") or die(mysql_error());//all data which are in the table in database, assign to the mydata variable

$tabledata="<table border='1'><tr><th>name</th><th>address</th><th>tp_number</th><th>vehicle</th><th>model</th><th>year</th><th>price</th><th>country</th><th>color</th><th>other</th></tr>";
if(mysql_num_rows($mydata)>0)//mysql_num_rows is a function and this will check number of rows in the database
{
	while($data=mysql_fetch_assoc($mydata))
	{
		$tabledata.="<tr><td>".$data['name']."</td><td>".$data['address']."</td><td>".$data['tp_number']."</td><td>".$data['vehicle']."</td><td>".$data['model']."</td><td>".$data['year']."</td><td>".$data['price']."</td><td>".$data['country']."</td><td>".$data['color']."</td><td>".$data['other']."</td></tr>";
	}
	$tabledata.="</table>";
	echo $tabledata;
}
?>
</body>
</html>