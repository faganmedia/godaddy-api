<?php
include('../dbc.php');
$meta_title="Set Email Account";
include('header.php');
//get API login
$account = $_POST["account"];;
$password = $_POST['password'];
require_once('wapi.php');
try {
   $wapi = new WAPI();
   $SetEmailAccount = new SetEmailAccount();
   $cred = new Credential();
   $cred->Account = $account;
   $cred->Password = $password;
			
   $shopper = "772934";

   $sEmailAddress = $_POST['user']."@".$_POST['domain'];
   $sResourceID = "emailfwd:1204276";
   $sPassword = "password1";
   $nDiskSpace = 1000;
   $nCatchAll = 0;
   $sCC = "agordon@wildwestdomains.com";
   $nSMTPRelays = 250;
   $bSpamFilter = "false";
   $nAR_Status  = 0;
   $sAR_Message = "This auto responder is not setup";
   $sAR_Subject = "Auto Responder";
   $sAR_Start = "0000-00-00 00:00:00";
   $sAR_End = "0000-00-00 00:00:00";
   $sAR_From = "agordon@wildwestdomains.com";
   
   $SetEmailAccount->sCLTRID = guid();
   $SetEmailAccount->credential = $cred;
   $SetEmailAccount->sShopper = $shopper;
   $SetEmailAccount->sEmailAddress = $sEmailAddress;
   $SetEmailAccount->sResourceID = $sResourceID;
   $SetEmailAccount->sPassword = $sPassword;
   $SetEmailAccount->nDiskSpace = $nDiskSpace;
   $SetEmailAccount->nCatchAll = $nCatchAll;
   $SetEmailAccount->sCC = $sCC;
   $SetEmailAccount->nSMTPRelays = $nSMTPRelays;
   $SetEmailAccount->bSpamFilter = $bSpamFilter;
   $SetEmailAccount->nAR_Status = $nAR_Status;
   $SetEmailAccount->sAR_Message = $sAR_Message;
   $SetEmailAccount->sAR_Subject = $sAR_Subject;
   $SetEmailAccount->sAR_Start = $sAR_Start;
   $SetEmailAccount->sAR_End = $sAR_End;
   $SetEmailAccount->sAR_From = $sAR_From;
?>
<div class="wrapper-grey">
<div class="header">
<h1><? echo $meta_title; ?></h1>
</div>
</div>
<div class="wrapper">
<div class="block7 forms">
<form id="form1" name="form1" method="post" action="">
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
   <td><label>Username:</label></td>
   <td><input type="text" name="user" id="input" /></td>
</tr>
<tr>
   <td><label>Domain:</label></td>
   <td>@<select name="domain" id="domain"><option value="apirseller.com">apireseller.com</option></select></td>
</tr>
<tr>
<td colspan="2"><input type="submit" name="Submit" id="submit" value="Submit" /></td>
</tr>
</table>
</form>
<p>XML Request</p>
<textarea name="message2" id="desc"><? if($_POST["Submit"]){ print_r($SetEmailAccount); } ?></textarea>
<p>XML Response</p>
<textarea name="message" id="desc"><? if($_POST["Submit"]){ print_r($wapi->SetEmailAccount($SetEmailAccount)); }
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
                            