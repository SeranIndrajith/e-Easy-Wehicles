<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

</head>

<body>
<style type="text/css">
body {
	background-image: url();
	margin-left: 2.5in;
	margin-right: 2.2in;
}
</style>
</head>

<body>

<p>  
<img src="a2.jpg" width="900" height="150"> 
</p>
<p><img src="line1.jpg" width="900" height="10"></p>

<p>
  <a href="wad.php">Home</a> &nbsp &nbsp &nbsp <a href="about_us.php">About Us</a> &nbsp &nbsp &nbsp <a href="comments.php">Comments</a> &nbsp &nbsp &nbsp <a href="contact_us.php">Contact Us</a> &nbsp &nbsp &nbsp <a href="help.php">Help</a>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp

<?php 
echo "Today is  ".date("d-m-Y")."<br>";
?>
</p>

<p><img src="line2.jpg" width="900" height="10"></p>

<marquee><strong><em>e Easy Vehicles</em></strong><br></marquee>

<?php
if (!isset($_POST["login"]) || ($_POST["login"]!="Login")){
?>

<form name ="formal" method="post" action="ssss.php">
User name:<input name="uname" type="text" /><br/>
E-mail:<input name="E-mail" type"E-mail" /><br/>
<input type="submit" name="Fill Form" value="Fill Form"/>
</form>
<?php
}else{
?>
<strong>Username:</strong>strong><?php echo $_POST["name"]?><br />
<strong>e-Mail:</strong><?php echo $_POST["name"];
}
?>
<p>
<a href="adminpage.php">Administrator</a>
</p>
<p>
<a href="wad.php">Back</a>
</p>

<p> 
<img src="footer.jpg" width="900" height="150"> 
</p>
</body>
</html>