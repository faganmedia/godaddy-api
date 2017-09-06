<?php 
include('../dbc.php');
//get API login
$account = $_POST["account"];;
$password = $_POST['password'];
$meta_title="Modify DNS";
$meta_desc="Gets information about items that have been previously ordered.";
include('header.php');

//include class definitions and SOAP conx
require_once 'wapi.php'; 
try{
$Wapi = new Wapi(); 

//set credential
$credential = new Credential();
$credential->Account = $account; 
$credential->Password = $password;

//get user input
$sDomain = $_POST['sDomain'];
$recType = $_POST['recType'];
$key = $_POST['key'];
$action = $_POST['action'];
$recValue = $_POST['recValue'];

//set ModifyDNS items
$ModifyDNS = new ModifyDNS();
$DNSRequest = array();
$DNSRequest[0] = new DNSRequest();
$DNSRequest[0]->recType = $recType;
$DNSRequest[0]->action = $action;
if($recType=="CNAME"){
	$DNSRequest[0]->key = $key;
}
$DNSRequest[0]->ttl = '3600';
$DNSRequest[0]->recValue = $recValue;
 
 
//pass values to method
$ModifyDNS->sCLTRID = guid();
$ModifyDNS->credential = $credential;
$ModifyDNS->dnsRequestArray = $DNSRequest;
$ModifyDNS->sDomain = $sDomain;
?> 
<div class="wrapper-grey">
<div class="header">
<h1><? echo $meta_title; ?></h1>
</div>
</div>
<div class="wrapper">
<div class="block7 forms">
<form name="form1" method="post" action="modifydns.php">
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
<td><label>Domain Name:</label></td>
<td><input type="text" name="sDomain" id="input"></td>
</tr>
<tr>
<td><label>Record Type:</label></td>
<td><select name="recType" id="recType">
    <option value="A" selected>A</option>
    <option value="CNAME">CNAME</option>
    <option value="MX">MX</option>
    <option value="SRV">SRV</option>
    <option value="TXT">TXT</option>
  </select>
</td>
</tr>
<tr>
<td><label>Key:</label></td>
<td><input type="text" name="key" id="input"></td>
</tr>
<tr>
<td><label>Action:</label></td>
<td><select name="action" id="action">
     <option value="set" selected>Set</option>
     <option value="remove">Remove</option>
   </select></td>
</tr>
<tr>
<td><label>Value:</label></td>
<td><input type="text" name="recValue" id="input"></td>
</tr>
<tr>
<td colspan="2"><input type="submit" name="Submit" id="submit" value="Submit" /></td>
</tr>
</table>
</form>
<p>XML Message sent</p>
<textarea name="message" id="desc"><? if($_POST["Submit"]){ print_r($ModifyDNS); }?></textarea>
<p>XML Response</p>
<textarea name="Response" id="desc"><? if($_POST["Submit"]){ print_r($Wapi->ModifyDNS($ModifyDNS)); }
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
                            
                            
                            