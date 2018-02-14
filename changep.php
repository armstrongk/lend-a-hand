
<html><head>
<title>Lend A Hand - Forgot Password</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="css/design.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/designgo.css" rel="stylesheet" type="text/css">
</head>
<body>
<br>
<br>

<table class="graybox" align="center" border="0" cellpadding="0" cellspacing="1" width="900">
 <tbody><tr> 
  <td><img src="logo/complains.jpg" height="120" width="900"></td>
 </tr>
 <tr> 
  <td valign="top"> <table border="0" cellpadding="20" cellspacing="0" width="100%">
    <tbody><tr> 
     <td class="contentArea"> <form method="post" name="frmLogin" id="frmLogin">
       <p>&nbsp;</p>
       <table class="entryTable" align="center" bgcolor="#336699" border="0" cellpadding="5" cellspacing="1" width="350">
        <tbody><tr id="entryTableHeader"> 
         <td align="center"> User Login</td>
        </tr>
        <tr> 
         <td class="contentArea"> 
		 <div class="errorMessage" align="center"><!--?php echo $errorMessage; ?--></div>

		  <table class="text" border="0" cellpadding="2" cellspacing="1" width="100%">
           <tbody><tr align="center"> 
            <td colspan="3">&nbsp;</td>
           </tr>
           <tr class="text"> 
            <td align="right" width="100">User Name</td>
            <td align="center" width="10">:</td>
            <td><input name="username" class="box" id="username" size="30" maxlength="40" type="text"></td>
           </tr>
           <tr>
             <td align="right">Password</td>
             <td align="center">:</td>
             <td><input name="password" class="box" id="password" size="30" maxlength="40" type="password"></td>
           </tr>
           <tr>
             <td colspan="2">&nbsp;</td>
             
           </tr>
           <tr>
             <td align="right">New Customer</td>
			 <td align="center">:</td>
			 <td><a href="checkpassword.php">Register Here</a></td>
           </tr>
           <tr>
             <td colspan="3"><div align="center"><a href="forgotp.php">Forget Password</a> </div></td>
             </tr>
           <tr> 
            <td colspan="2">&nbsp;</td>
            <td><input name="btnLogin" id="btnLogin" value=" Login Now " style="font-size:14px;color:#0066FF;padding:5px 8px;" type="submit"></td>
           </tr>
          </tbody></table></td>
        </tr>
       </tbody></table>
       <p>&nbsp;</p>
	   <?php
$message="";
if(count($_POST)>0) {
$conn = mysql_connect("localhost","root","");
mysql_select_db("signup",$conn);
$result = mysql_query("SELECT * FROM register WHERE username='" . $_POST["username"] . "' and password = '". $_POST["password"]."'");
$count  = mysql_num_rows($result);
if($count==0) {
echo "<p>Invalid Username or Password...!!</p>";
} else {header("location:home.html");
}
}
?>
      </form>
	  </td>
    </tr>
   </tbody></table></td>
 </tr>
</tbody></table>
<p>Powered By: <a href="http://www.techzoo.org/">TechFai - Technology From Fai</a></p>


</body></html>