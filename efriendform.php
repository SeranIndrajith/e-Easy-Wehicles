<?php require_once('Connections/localhost.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form")) {
  $insertSQL = sprintf("INSERT INTO efriends (Name, Home_Town, E_Mail_Address) VALUES (%s, %s, %s)",
                       GetSQLValueString($_POST['Name'], "text"),
                       GetSQLValueString($_POST['Home_Town'], "text"),
                       GetSQLValueString($_POST['E_Mail_Address'], "text"));

  mysql_select_db($database_localhost, $localhost);
  $Result1 = mysql_query($insertSQL, $localhost) or die(mysql_error());

  $insertGoTo = "efriends.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}

mysql_select_db($database_localhost, $localhost);
$query_efriends = "SELECT * FROM efriends";
$efriends = mysql_query($query_efriends, $localhost) or die(mysql_error());
$row_efriends = mysql_fetch_assoc($efriends);
$totalRows_efriends = mysql_num_rows($efriends);
?>
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

<form id="form" name="form" method="POST" action="<?php echo $editFormAction; ?>">
Name: <input type="text" name="Name"><br>
Home Town: <input type="text" name="Home_Town"><br>
E Mail Address: <input type="float" name="E_Mail_Address"><br>

<br>

<input type="submit" value="submit">
<input type="hidden" name="MM_insert" value="form" />
</form>

</body>
</html>
<?php
mysql_free_result($efriends);
?>
<p> 
<img src="footer.jpg" width="900" height="150"> 
</p>

