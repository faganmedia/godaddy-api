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
    $shopper->phone = "+1.8885551212";
    $shopper->acceptOrderTOS="agree";
    $shopper->dbpuser="createNew";
    $shopper->dbppwd="defgh";
    $shopper->dbpemail="info@example.biz";
    
    $domainArray = array();
    $domainArray[0] = new DomainByProxy();
    $domainArray[0]->order = new OrderItem();
    $domainArray[0]->order->productid = 377001;
    $domainArray[0]->order->quantity = 1;
    $domainArray[0]->order->duration = 2;
    $domainArray[0]->order->riid = "wwd";
    $domainArray[0]->sld = "example";
    $domainArray[0]->tld = "biz";
    $domainArray[0]->period = 2;
    $domainArray[0]->resourceid = "domain:15568";

    $OrderDomainPrivacy = new OrderDomainPrivacy();
    $OrderDomainPrivacy->sCLTRID = guid();
    $OrderDomainPrivacy->credential = $cred;
    $OrderDomainPrivacy->shopper = $shopper;
    $OrderDomainPrivacy->items = $domainArray;
      
$meta_title="Order Domain Privacy";
$meta_desc="Used for ordering private registrations";
include('header.php');
?>
<table class="forms" width="1000" align="center">
  <tr>
    <td height="40" align="center">1. Check Availability</td>
    <td height="40" align="center">2. Order Domains</td>
    <td height="40" align="center"><h1>3. <? echo $meta_title; ?></h1></td>
    <td height="40" align="center">4. Check Availability</td>
    <td height="40" align="center">5. Query for Domain Information</td>
    <td height="40" align="center">6. Order Domain Renewal</td>
    <td height="40" align="center">7. Order Domain Transfer</td>
  </tr>
  <tr>
    <td colspan="7" valign="top">
        <form id="form1" name="form1" method="post" action="order-domain-privacy.php">
          <label>
            <input type="submit" name="Submit" id="Submit" value="Submit" />
          </label>
        </form>
        <p>XML Request</p>
    <textarea name="message2" id="message2" cols="100" rows="20"><? if($_POST["Submit"]=="Submit"){ print_r($OrderDomainPrivacy); } ?></textarea>
        <p>XML Response</p>
        <p>
          <label>
            <textarea name="message" id="message" cols="100" rows="20">
			<? if($_POST["Submit"]=="Submit"){ print_r($Wapi->OrderDomainPrivacy($OrderDomainPrivacy)); } 
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
<td colspan="7"><a href="order-domains.php"><img src="images/back.png" width="100" height="30" alt="back" /></a></td>
<td colspan="7"><a href="checkavailability-2.php"><img src="images/next.png" width="100" height="30" alt="next" /></a></td>
</tr>
</table>
<? include('../footer.php'); ?>
</body>
</html>
                            