<?php
include('../dbc.php');
//get API login
$account = $_POST["account"];;
$password = $_POST['password'];
//get domain
$domain=$_POST["domain"];

require_once 'wapi.php'; 
$Wapi = new Wapi();
try{
//Instantiate classes
$credential = new Credential(); 
$CheckAvailability = new CheckAvailability(); 
$CheckAvailabilityResponse = new CheckAvailabilityResponse(); 
//set variables
$CheckAvailability->credential = $credential; 
$CheckAvailability->sDomainArray = $sDomainArray;
$CheckAvailability->sCLTRID = guid();
$CheckAvailability->credential->Account = $account; 
$CheckAvailability->credential->Password = $password; 
$CheckAvailability->sDomainArray = array($domain);

$meta_title="Check Availability";
include('header.php');
?>
<div class="wrapper-grey">
<div class="header">
<h1><? echo $meta_title; ?></h1>
</div>
</div> 
<div class="wrapper">
<div class="block7 forms">
<form id="form1" name="form1" method="post" action="checkavailability.php">
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
<td><label>Domain:</label></td>
<td><input type="text" name="domain" id="input"></td>
</tr>
<tr>
<td colspan="2"><input type="submit" name="Submit" id="submit" value="Submit" /></td>
</tr>
</table>
</form>

        <p>XML Message Sent</p>
        <p>
          <label>
            <textarea name="message" id="desc"><? if($_POST["Submit"]=="Submit"){  print_r($CheckAvailability); } ?></textarea>
          </label>
        </p>
        <p>XML Response</p>
        <p>
          <label>
            <textarea name="Response" id="desc">
            <? if($_POST["Submit"]=="Submit"){ print_r($Wapi->CheckAvailability($CheckAvailability)); }
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
                            
                            