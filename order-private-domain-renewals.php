<?php
include('../dbc.php');
//get API login
$result = mysql_query("SELECT * FROM api") or die(mysql_error());
while($row = mysql_fetch_array( $result )){
	$account = $row['account'];
	$password = $row['password'];
}
 require_once('wapi.php');
 try {
 	$Wapi = new WAPI();
    $cred = new Credential();
    $cred->Account = $account;
    $cred->Password = $password;
    $shopper = new Shopper();
    $shopper->user = "855312";
    $shopper->pwd = "abcde";
    $shopper->email = "agordon@wildwestdomains.com";
    $shopper->firstname = "Artemus";
    $shopper->lastname = "Gordon";
    $shopper->phone = "(888)555-1212";
    $shopper->acceptOrderTOS="agree";
	$shopper->dbpuser="855313";
	$shopper->dbppwd="defgh";
	$shopper->dbpemail="info@example.biz";
	
	$domainArray = array();
    $domainArray[0] = new DomainRenewal();
    $domainArray[0]->order = new OrderItem();
    $domainArray[0]->order->productid = 350137;
    $domainArray[0]->order->quantity = 1;
    $domainArray[0]->order->duration = 0;
	$domainArray[0]->resourceid = "domain:21251";
    $domainArray[0]->sld = "example";
    $domainArray[0]->tld = "us";
    $domainArray[0]->period = 1;

	$domainArray[1] = new DomainRenewal();
    $domainArray[1]->order = new OrderItem();
    $domainArray[1]->order->productid = 350087;
    $domainArray[1]->order->quantity = 1;
    $domainArray[1]->order->duration = 0;
	$domainArray[1]->resourceid = "domain:15568";
    $domainArray[1]->sld = "example";
    $domainArray[1]->tld = "biz";
    $domainArray[1]->period = 1;
    
	$resourceArray = array();
	$resourceArray[0] = new ResourceRenewal();
    $resourceArray[0]->order = new OrderItem();
    $resourceArray[0]->order->productid = 387001;
    $resourceArray[0]->order->quantity = 1;
    $resourceArray[0]->order->duration = 1;
    $resourceArray[0]->order->riid = "wwd";
	$resourceArray[0]->resourceid = "dbp:5";
    	
    $OrderPrivateDomainRenewals = new OrderPrivateDomainRenewals();
    $OrderPrivateDomainRenewals->sCLTRID = guid();
    $OrderPrivateDomainRenewals->credential = $cred;
    $OrderPrivateDomainRenewals->shopper = $shopper;
    $OrderPrivateDomainRenewals->items = $domainArray;
	$OrderPrivateDomainRenewals->dbpItems = $resourceArray;
	$OrderPrivateDomainRenewals->sROID = "wwd";
      
$meta_title="Order Domain Renewals";
$meta_desc="Used for renewing private domain names";
include('header.php');
?>
<table class="forms" width="1000" align="center">
  <tr>
    <td height="40" align="center">1. Check Availability</td>
    <td height="40" align="center">2. Order Domains</td>
    <td height="40" align="center">3. Order Domain Privacy</td>
    <td height="40" align="center">4. Check Availability</td>
    <td height="40" align="center">5. Query for Domain Information</td>
    <td height="40" align="center"><h1>6. <? echo $meta_title; ?></h1></td>
    <td height="40" align="center">7. Order Domain Transfer</td>
  </tr>
  <tr>
    <td colspan="7" valign="top">
        <form id="form1" name="form1" method="post" action="order-private-domain-renewals.php">
          <label>
            <input type="submit" name="Submit" id="Submit" value="Submit" />
          </label>
        </form>
        <p>XML Request</p>
    <textarea name="message2" id="message2" cols="100" rows="20">
	<? if($_POST["Submit"]=="Submit"){ print_r($OrderPrivateDomainRenewals); } ?>
    </textarea>
        <p>XML Response</p>
        <p>
          <label>
            <textarea name="message" id="message" cols="100" rows="20">
			<? if($_POST["Submit"]=="Submit"){ print_r($Wapi->OrderPrivateDomainRenewals($OrderPrivateDomainRenewals)); } 
			} catch (Exception $e) {
	           print_r($e);
		      }
			?>
            </textarea>
          </label>
        </p>
</td>
</tr>
<tr>
<td colspan="7"><a href="info.php"><img src="images/back.png" width="100" height="30" alt="back" /></a></td>
<td colspan="7"><a href="order-domain-transfers.php"><img src="images/next.png" width="100" height="30" alt="next" /></a></td>
</tr>
</table>
<? include('../footer.php'); ?>
</body>
</html>
                            