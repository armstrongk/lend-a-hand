<html><head>
<title>Lend A Hand - Signup</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="css/design.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/designgo.css" rel="stylesheet" type="text/css">

</head>
<style>
h1,h2{
color:0a126d;
}
h3{
color:66cccc;
}
p,li{
color:ffffff;
}
a{
color: #FF0000;
}
</style>
<body>

<br><br>
<form name="form1" action="#" method="post">
<table class="graybox" align="center" border="0" cellpadding="0" cellspacing="1" width="900">
 <tbody><tr> 
  <td><img src="logo/pic6.png" height="120" width="900"></td>
 </tr>
 <tr> 
  <td valign="top">
   <table align="center" border="0" cellpadding="20" cellspacing="0" width="100%">
    <tbody><tr> 
     <td class="contentArea"> 
	 <!--<form name="form1" action="#" method="post">-->
       <p>&nbsp;</p>
       <table class="entryTable" align="center" bgcolor="#336699" border="0" cellpadding="5" cellspacing="1" width="600">
        <tbody><tr id="entryTableHeader"> 
         <td align="center"> User Registration </td>
        </tr>
        <tr> 
         <td class="contentArea"> 
		 <div class="errorMessage" align="center"><!--?php echo $errorMessage; ?--></div>
		 
		  <table class="text" border="0" cellpadding="2" cellspacing="1" width="100%">
           <tbody><tr align="center"> 
            <td colspan="2"><div align="right"><a href="loggit.php">Back</a></div></td>
           </tr>
           <tr class="entryTable">
             <td class="label">&nbsp;First Name</td>
             <td class="content"><input name="fname" class="box" id="fname" size="30" maxlength="20" type="text"></td>
           </tr>
		   <tr class="entryTable">
             <td class="label">&nbsp;Last Name</td>
             <td class="content"><input name="lname" class="box" id="lname" size="30" maxlength="20" type="text"></td>
           </tr>
		   <tr class="entryTable">
             <td class="label"> &nbsp;E-mail</td>
            <td class="content"><input name="Email" class="box" id="Email" value="" size="30" maxlength="60" type="text"></td>
           </tr>
		   <tr class="entryTable">
             <td class="label">&nbsp;Phone Number</td>
             <td class="content"><input name="phonenumber" class="box" id="phonenumber" value="" size="30" maxlength="20" type="text"></td>
           </tr>
		   <form  name="form1" method="post" action="#" >
           <tr class="entryTable">
             <td class="label">&nbsp;Password</td>
             <td class="content"><input name="password" class="box" id="password" value="" size="30" maxlength="20" type="password"></td>
           </tr>
		   <tr class="entryTable">
             <td class="label">&nbsp;Confirm Password</td>
             <td class="content"><input name="confirmpassword" class="box" id="confirmpassword" value="" size="30" maxlength="20" type="password"></td>
           </tr>
		   </form>
		   <script>
var password = document.getElementById("password")
  , confirmpassword = document.getElementById("confirmpassword");

function validatePassword(){
  if(password.value != confirmpassword.value) {
    confirmpassword.setCustomValidity("Passwords Don't Match");
  } else {
    confirmpassword.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirmpassword.onkeyup = validatePassword;
</script>
		   <tr class="entryTable">
             <td class="label">&nbsp;User Name</td>
             <td class="content"><input name="username" class="box" id="username" value="" size="30" maxlength="20" type="text"></td>
           </tr>
           
           <tr>
             <td width="200">&nbsp;</td>
             <td width="372">&nbsp;</td>
           </tr>
           <tr> 
            <td>&nbsp;</td>
            <td><input name="submit" id="submit" value=" Register Now " type="submit"></td>
           </tr>
          </tbody></table></td>
        </tr>
       </tbody></table>
       <p>&nbsp;</p>
</td>
    </tr>
   </tbody></table></td>
 </tr>
</tbody></table>
<p>&nbsp;</p>
<?php
	//Establishing Connection with Server
	$connection = mysql_connect("localhost", "root", "");
	//Selecting Database from Server
	$db = mysql_select_db("signup", $connection);		

	$sql = "SELECT * FROM register";
	if(isset($_POST['submit'])){
   
	//Fetching variables of the form which travels in URL
    
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $Email = $_POST['Email'];
    $phonenumber = $_POST['phonenumber'];
	$password = $_POST['password'];
    $confirmpassword = $_POST['confirmpassword'];
    $username = $_POST['username'];
    if($fname !='' && $lname !='' && $Email !=''&& $password !='' && $confirmpassword !='' && $username !=''){
	//Insert Query of SQL
    $query = mysql_query("insert into register(fname,lname,Email,phonenumber,password,confirmpassword,username) values ('$fname', '$lname', '$Email', '$phonenumber','$password', '$confirmpassword', '$username')");
	echo "<br/><br/><span>Signup completed successfully...!!</span>";
	header("location:loggit.php");
    }
    else{
    echo "<p>Signup Failed <br/> Some Fields are Blank....!!</p>";   
    }
	}
	//Closing Connection with Server
	mysql_close($connection);
?>
  </form>
  
  
  
</body></html>