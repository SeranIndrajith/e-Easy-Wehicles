<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
body {
	background-image: url();
	margin-left: 2.5in;
	margin-right: 2.5in;
}
</style>
</head>

<body>
<p> 
<img src="a2.jpg" width="900" height="150"> 
</p>
<p>
  <a href="wad.php">Home</a> &nbsp &nbsp &nbsp <a href="about_us.php">About Us</a> &nbsp &nbsp &nbsp <a href="comments.php">Comments</a> &nbsp &nbsp &nbsp <a href="contact_us.php">Contact Us</a> &nbsp &nbsp &nbsp <a href="help.php">Help</a>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp

<?php
$connect = @mysql_connect('localhost' , 'root' , ''); //connect is a variable
if(!$connect)
{
	die(mysql_error()); //if cannot create a connection with database, it shows error message 
}

mysql_select_db('waddb' , $connect) or die (mysql_error());


$mydata=mysql_query("SELECT * FROM EFriends") or die(mysql_error());//all data which are in the table in database, assign to the mydata variable

$tabledata="<table border='1'><tr><th>Name</th><th>Home_Town</th><th>E_Mail_Address</th></tr>";
if(mysql_num_rows($mydata)>0)//mysql_num_rows is a function and this will check number of rows in the database
{
	while($data=mysql_fetch_assoc($mydata))
	{
		$tabledata.="<tr><td>".$data['Name']."</td><td>".$data['Home_Town']."</td><td>".$data['E_Mail_Address']."</td></tr>";
	}
	$tabledata.="</table>";
	echo $tabledata;
}
?>
<p> 
<img src="footer.jpg" width="900" height="150"> 
</p>

</body>
</html>