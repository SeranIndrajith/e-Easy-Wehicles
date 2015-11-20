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

<p>
 <h1>Login</h1>
        <form name="login">
            Username<input type="text" name="userid"/><br>
            Password<input type="password" name="pswrd"/><br>
            <input type="button" onclick="check(this.form)" value="Login"/><br>
            <input type="reset" value="Cancel"/><br>
        </form>
        <script language="javascript">
            function check(form) { /*function to check userid & password*/
                /*the following code checkes whether the entered userid and password are matching*/
                if(form.userid.value == "seran" && form.pswrd.value == "seran") {
                    window.open('administrator.php')/*opens the target page while Id & password matches*/
                }
                else {
                    alert("Error Password or Username")/*displays error message*/
                }
            }
        </script>
        
     <p> 
<img src="footer.jpg" width="900" height="150"> 
</p>
   
</body>
</html>