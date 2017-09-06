<?php
include('../dbc.php'); 
$meta_title="Describe";
$meta_desc="Returns activity timeout and version information from the server.";
include('header.php');
//get API login
$account = $_POST["account"];;
$password = $_POST['password'];
require_once 'wapi.php'; 
$Wapi = new Wapi(); 
try{
$credential = new Credential(); 
$describe= new Describe(); 
$describeResponse = new DescribeResponse(); 

//set variable od type Credential 
$describe->credential = $credential; 
$describe->credential->Account = $account; 
$describe->credential->Password = $password; 
$describe->sCLTRID = guid(); 
?> 
<div class="wrapper-grey">
<div class="header">
<h1><? echo $meta_title; ?></h1>
</div>
</div>
<div class="wrapper">
<div class="block7 forms">
<form id="form1" name="form1" method="post" action="describe.php">
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
<td colspan="2"><input type="submit" name="Submit" id="submit" value="Submit" /></td>
</tr>
</table>
</form>
<p>XML Message Sent</p>
<p>
<label>
  <textarea name="message" id="desc"><? if($_POST["Submit"]=="Submit"){ print_r($describe); }?></textarea>
</label>
</p>
<p>XML Response</p>
<p><label>
<textarea name="Response" id="desc">
<?php if($_POST["Submit"]=="Submit"){ 
	print_r($Wapi->Describe($describe)); 
}
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
                            
                            
                            
                            