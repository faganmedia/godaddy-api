<?php
include('../dbc.php');
$meta_title="Order Domains";
$meta_desc="Used for registering new domain names.";
include('header.php');
//get API login
$account = $_POST["account"];;
$password = $_POST['password'];
//get domain from user
$sld=$_POST["sld"];
$dot = strpos($sld,'.');
$tld=substr($sld,-3);
$sld=substr($sld,0,$dot);
$period=$_POST["years"];
require_once('wapi.php');
      try {
            $wapi = new WAPI();
            $cred = new Credential();
            $cred->Account = $account;
            $cred->Password = $password;

            $shopper = new Shopper();
            $shopper->user = 772934;
            $shopper->pwd = "abcde";
            $shopper->email = "agordon@wildwestdomains.com";
            $shopper->firstname = "Artemus";
            $shopper->lastname = "Gordon";
            $shopper->phone = "+1.8885551212";
            $shopper->acceptOrderTOS="agree";

            $domainArray = array();

            $domainArray[0] = new DomainRegistration();
            $domainArray[0]->order = new OrderItem();
            $domainArray[0]->order->productid = 350001;
            $domainArray[0]->order->quantity = 1;
            $domainArray[0]->order->duration = 1;
            $domainArray[0]->order->riid = "FM";
            $domainArray[0]->sld = $sld;
            $domainArray[0]->tld = $tld;
            $domainArray[0]->period = $period;

            $registrant = new ContactInfo();
            $registrant->fname = "Artemus";
            $registrant->lname = "Gordon";
            $registrant->email = "agordon@wildwestdomains.com";
            $registrant->sa1 = "2 N. Main St.";
            $registrant->city = "Valdosta";
            $registrant->sp = "Georgia";
            $registrant->pc = "17123";
            $registrant->cc = "United States";
            $registrant->phone = "+1.8885551212";           

            $domainArray[0]->registrant = $registrant;
	        $domainArray[0]->admin = clone $registrant;
            $domainArray[0]->billing = clone $registrant;
            $domainArray[0]->tech = clone $registrant;            

            $ns = array();
            $ns[0] = new NS();
            $ns[0]->name = "ns01.ote.domaincontrol.com";
            $ns[1] = new NS();
            $ns[1]->name = "ns02.ote.domaincontrol.com";

            $domainArray[0]->nsArray = $ns;
            $domainArray[0]->autorenewflag = 1;
                      

            $orderDomainsRequest = new OrderDomains();
            $orderDomainsRequest->sCLTRID = guid();
            $orderDomainsRequest->credential = $cred;
            $orderDomainsRequest->shopper = $shopper;
            $orderDomainsRequest->items = $domainArray; 
?>
<div class="wrapper-grey">
<div class="header">
<h1><? echo $meta_title; ?></h1>
</div>
</div>
<div class="wrapper">
<div class="block7 forms">
<form id="form1" name="form1" method="post" action="orderdomains.php">
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
	<td><input type="text" name="sld" id="input" /></td>
</tr>
<tr>
	<td><label>Years:</label></td>
    <td><select name="years" id="years">
        <option value="1">1</option>
        </select>
	</td>
</tr>		
<tr>
	<td colspan="2"><input type="submit" name="Submit" id="submit" value="Submit" /></td>
</tr>
</table>
</form>
<p>XML Request</p>
<textarea name="message" id="desc"><? if($_POST["Submit"]){ print_r($orderDomainsRequest); } ?></textarea>
<p>XML Response</p>
<textarea name="Response" id="desc"><? if($_POST["Submit"]){ print_r($wapi->OrderDomains($orderDomainsRequest)); }
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
                            
                            