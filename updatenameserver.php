<?php 
include('../dbc.php');
$meta_title="Update Name Server";
$meta_desc="Used to upate domain name servers";
include('header.php');
//get API login
$account = $_POST["account"];;
$password = $_POST['password'];
//get resource from user
$resourceid=$_POST['resourceid'];
$ns1=$_POST['ns1'];
$ns2=$_POST['ns2'];

require_once 'wapi.php'; 
$Wapi = new Wapi(); 
try{
 $UpdateNameServer= new UpdateNameServer(); 
 $UpdateNameServerResponse = new UpdateNameServerResponse();
 
 $credential = new Credential();
 $credential->Account = $account;
 $credential->Password = $password;
 
 $domainArray = array();
 $domainArray[0] = new Domain();
 $domainArray[0]->resourceid = $resourceid;
 $domainArray[0]->mngTRID = "wwd";
 
 $ns = array();
 $ns[0] = new NS();
 $ns[0]->name=$ns1;
 $ns[1] = new NS();
 $ns[1]->name=$ns2;

 //Pass values to method
 $UpdateNameServer->credential = $credential; 
 $UpdateNameServer->sCLTRID = guid();
 $UpdateNameServer->domainArray = $domainArray;
 $UpdateNameServer->nsArray = $ns;
?> 
<div class="wrapper-grey">
<div class="header">
<h1><? echo $meta_title; ?></h1>
</div>
</div> 
<div class="wrapper">
<div class="block7 forms">
<form id="form1" name="form1" method="post" action="updatenameserver.php">
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
<td><label>Resource ID:</label></td>
<td><input type="text" name="resourceid" id="input" /></td>
</tr>
<tr>
<td><label>Name Server 1:</label></td>
<td><input type="text" name="ns1" id="input" /></td>
</tr>
<tr>
<td><label>Name Server 2:</label></td>
<td><input type="text" name="ns2" id="input" /></td>
</tr>
<tr>
<td colspan="2"><input type="submit" name="Submit" id="submit" value="Submit" /></td>
</tr>
</table>
</form>
<p>XML Message Sent</p>
<textarea name="message" id="desc"><? if($_POST["Submit"]){ print_r($UpdateNameServer); }?></textarea>
<p>XML Response</p>
<textarea name="Response" id="desc"><? if($_POST["Submit"]){ print_r($Wapi->UpdateNameServer($UpdateNameServer)); }
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
                            