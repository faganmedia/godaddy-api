<?php
include('../dbc.php');
$meta_title="NameGenDB";
$meta_desc="Used to get the lists of alternative domain names based on a given name (Domains Bot).";
include('header.php');
//get API login
$account = $_POST["account"];;
$password = $_POST['password'];
//get domain
$domain=$_POST['domain'];
require_once 'wapi.php'; 
try {
 $wapi = new Wapi(); 

 //set credential
 $credential = new Credential();
 $credential->Account = $account; 
 $credential->Password = $password;

 //set NameGenDB items
 $NameGenDB= new NameGenDB(); 
 $NameGenDBResponse = new NameGenDBResponse(); 

 //pass values to method
 $NameGenDB->sCLTRID = guid();
 $NameGenDB->credential = $credential;
 $NameGenDB->sKey = $domain;
 $NameGenDB->sTLDs = "COM,1.0|NET,1.0|ORG,1.0|INFO,1.0|BIZ,1.0|US,1.0";
 $NameGenDB->nMaxResults = 25;
 $NameGenDB->bExcludeTaken = "false";
 $NameGenDB->bAddPrefix = "false";
 $NameGenDB->bAddSuffix = "false";
 $NameGenDB->bAddDashes = "false";
 $NameGenDB->bAddRelated = "false";
 $NameGenDB->bAdvancedSplit = "false";
 $NameGenDB->bBaseOnTop = "true";
 

?> 
<div class="wrapper-grey">
<div class="header">
<h1><? echo $meta_title; ?></h1>
</div>
</div> 
<div class="wrapper">
<div class="block7 forms">
<form id="form1" name="form1" method="post" action="namegendb.php">
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
<td><label>Domain:</label></td>
<td><input type="text" name="domain" id="input" /></td>
</tr>
<tr>
<td colspan="2"><input type="submit" name="Submit" id="submit" value="Submit" /></td>
</tr>
</table>
</form>
<p>XML Request</p>
<textarea name="message" id="desc"><?php if($_POST["Submit"]){ print_r($NameGenDB); }?></textarea>
<p>XML Response</p>
<textarea name="Response" id="desc"><?php if($_POST["Submit"]){ print_r($wapi->NameGenDB($NameGenDB)); }
}catch (Exception $e){
    print_r($e);
} ?>
</textarea>
</div>
</div>
<? include('../footer.php'); ?>
</body>
</html>
                            