<?php 
include('../dbc.php');
//get API login
$account = $_POST["account"];;
$password = $_POST['password'];
$meta_title="Info Method";
$meta_desc="Gets information about items that have been previously ordered.";
include('header.php');

//get resource from user
$resource=$_POST["resource"];

require_once 'wapi.php'; 
$Wapi = new Wapi(); 
try{
//instantiate objects
$credential = new Credential(); 
$info= new info(); 
$infoResponse = new infoResponse();

//pass variables to method 
$info->credential = $credential;
$info->credential->Account = $account; 
$info->credential->Password = $password;
$info->sCLTRID = guid();
$info->sType = $_POST["stype"];
if ($resource=="sDomain"){
   $info->sDomain = $_POST["resource_value"];
}
if ($resource=="sResourceID"){
   $info->sResourceID = $_POST["resource_value"];
}
if ($resource=="sOrderID"){
   $info->sOrderID = $_POST["resource_value"];
}
?> 
<div class="wrapper-grey">
<div class="header">
<h1><? echo $meta_title; ?></h1>
</div>
</div>
<div class="wrapper">
<div class="block-full forms">
<form name="form1" method="post" action="info.php">
<table width="100%">
<tr>
<td width="20%"><label>API Login:</label></td>
<td width="80%"><input type="text" name="account" id="input"></td>
</tr>
<tr>
<td><label>API Password:</label></td>
<td><input type="text" name="password" id="input"></td>
</tr>
<tr>
	<td><label>Get info using:</label></td> 
	<td><input name="resource" type="radio" id="domain" value="sDomain" checked="checked" /><label>Domain Name</label>
        <input name="resource" type="radio" id="resourceid" value="sResourceID"><label>Resource ID</label> 
        <input type="radio" name="resource" id="orderid" value="sOrderID"><label>Order ID</label>
    </td>
</tr>
<tr>
	<td><label>Value:</label></td>
	<td><input type="text" name="resource_value" id="input"></td>
</tr>
<tr>
	<td><label>Return:</label></td>
	<td><select name="stype" id="stype">
        <option value="standard" selected>Standard</option>
        <option value="name">Name</option>
        <option value="createDate">Create Date</option>
        <option value="ownerID">Owner ID</option>
        <option value="expirationDate">Expiration Date</option>
        <option value="status">Status</option>
        <option value="maxRenewYears">Max Renew Years</option>
        <option value="dbpDuration">DBP Duration</option>
        <option value="access">Access</option>
        <option value="dns">DNS</option>
        <option value="contactEmails">Contact Emails</option>
        <option value="contacts">Contacts</option>
        <option value="nameservers">Name Servers</option>
        </select>
    </td>
</tr>
<tr>
<td colspan="2"><input type="submit" name="Submit" id="submit" value="Submit" /></td>
</tr>
</table>
</form>
<p>XML Message sent</p>
        <p>
          <label>
            <textarea name="message" id="desc"><? if($_POST["Submit"]=="Submit"){ print_r($info); }?>
            </textarea>
          </label>
        </p>
        <p>XML Response</p>
        <p>
          <label>
            <textarea name="Response" id="desc">
            <? if($_POST["Submit"]=="Submit"){ print_r($Wapi->info($info)); }
				 }catch (Exception $e){
            			print_r($e);

      			} 
			?>
            </textarea>
          </label>
        </p>
</div>
</div>
<? include('../footer.php'); ?>
</body>
</html>
                            
                            