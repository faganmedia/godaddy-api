<?php
include('../dbc.php');
//get API login
$account = $_POST["account"];;
$password = $_POST['password'];
require_once 'wapi.php'; 
$meta_title="Process Request Method";
$meta_desc="Provide support for calling WWD services using legacy WAPI request XMLs.";
include('header.php');
//instantiate classes
$Wapi = new Wapi(); 
try{
	$ProcessRequest = new ProcessRequest(); 
	$ProcessRequestResponse = new ProcessRequestResponse(); 
//set sRequestXML
$ProcessRequest->sRequestXML = "<wapi clTRID=\"".guid()."\" account=\"$account\" pwd=\"$password\"><manage><script cmd=\"reset\"/></manage></wapi>";
?> 
<div class="wrapper-grey">
<div class="header">
<h1><? echo $meta_title; ?></h1>
</div>
</div> 
<div class="wrapper">
<div class="block7 forms">
<form id="form1" name="form1" method="post" action="reset.php">
<table width="70%">
<tr>
<td><label>API Login:</label></td>
<td><input type="text" name="account" id="input"></td>
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
<textarea name="message" id="desc"><? if($_POST["Submit"]){ print_r($ProcessRequest); } ?></textarea>
<p>XML Response</p>
<label>
<textarea name="Response" id="desc"><? if($_POST["Submit"]){ print_r($Wapi->ProcessRequest($ProcessRequest)); }
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
                            
                            