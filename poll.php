<?php
include('../dbc.php');
//get API login
$account = $_POST["account"];;
$password = $_POST['password'];
require_once 'wapi.php'; 
try{
//instantiate classes
$Wapi = new Wapi(); 
$credential = new Credential(); 
$poll= new Poll(); 
$pollresponse = new PollResponse(); 

//set sCLTRID
$poll->sCLTRID = guid();

//set credential 
$poll->credential = $credential; 
$poll->credential->Account = $account; 
$poll->credential->Password =$password;
$poll->sOp="req";
$meta_title="Poll";
$meta_desc="Used for checking the status of orders";
include('header.php');
?> 
<div class="wrapper-grey">
<div class="header">
<h1><? echo $meta_title; ?></h1>
</div>
</div> 
<div class="wrapper">
<div class="block7 forms">
<form id="form1" name="form1" method="post" action="poll.php">
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
<textarea name="message" id="desc"><?php if($_POST["Submit"]){ print_r($poll); }?></textarea>
<p>XML Response</p>
<textarea name="Response" id="desc"><?php if($_POST["Submit"]){ print_r($Wapi->Poll($poll)); }
}catch (Exception $e){
    print_r($e);
}?>
</textarea>
</div>
</div>
<? include('../footer.php'); ?>
</body>
</html>
                            
                            