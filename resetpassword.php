<?php 
include('../dbc.php');
$meta_title="Reset Password";
$meta_desc="Used for resetting the user's password in the WWD system.";
include('header.php');
//get API login
$account = $_POST["account"];;
$password = $_POST['password'];
//get user info
$user = $_POST["user"];
$pwd = $_POST["pwd"];
require_once 'wapi.php';
try{
$Wapi = new Wapi(); 
$ResetPassword = new ResetPassword();
//set credential
$credential = new Credential();
$credential->Account = $account; 
$credential->Password = $password;

//pass values to method
$ResetPassword->sCLTRID = guid();
$ResetPassword->credential = $credential;
$ResetPassword->sUser = $user;
$ResetPassword->sPwd = $pwd;
$ResetPassword->sEmail = 'jfagan@godaddy.com';
$ResetPassword->sPwdHint = ''; 

?> 
<div class="wrapper-grey">
<div class="header">
<h1><? echo $meta_title; ?></h1>
</div>
</div>
<div class="wrapper">
<div class="block7 forms">
<p>
<form id="form1" name="form1" method="post" action="resetpassword.php">
<table width="70%">
<tr>
<td width="30%"><label>API Login:</label></td>
<td width="70%"><input type="text" name="account" id="input"></td>
</tr>
<tr>
<td><label>API Password:</label></td>
<td><input type="text" name="password" id="input"></td>
</tr>
<tr>
<td><label>Shopper:</label></td>
<td><input type="text" name="user" id="input"></td>
</tr>
<tr>
<td><label>Shopper Password:</label></td>
<td><input type="text" name="pwd" id="input"></td>
</tr>
<tr>
<td colspan="2"><input type="submit" name="Submit" id="submit" value="Submit" /></td>
</tr>
</table>
</form>
<p>XML Message Sent</p>
<textarea name="message" id="desc"><? if($_POST["Submit"]=="Submit"){ print_r($ResetPassword); } ?></textarea>
<p>XML Response</p>
<textarea name="Response" id="desc"><?php if($_POST["Submit"]=="Submit"){ print_r($Wapi->ResetPassword($ResetPassword)); }
}catch (Exception $e){
   print_r($e);
}
?>
</textarea>
</div>
</div>
<? include('../footer.php'); ?>
</body>
</html>
                            
                            
                            
                  
                            