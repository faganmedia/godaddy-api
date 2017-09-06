<?php
class ProcessRequest {
  public $sRequestXML; // string
}
class ProcessRequestResponse {
  public $ProcessRequestResult; // string
}
class Describe {
  public $sCLTRID; // string
  public $credential; // Credential
}
class Credential {
  public $Account; // string
  public $Password; // string
}
class DescribeResponse {
  public $meta_describeResult; // string
}
class CheckAvailability {
  public $sCLTRID; // string
  public $credential; // Credential
  public $sDomainArray; // ArrayOfString
  public $sHostArray; // ArrayOfString
  public $sNSArray; // ArrayOfString
}
class CheckAvailabilityResponse {
  public $CheckAvailabilityResult; // string
}
class CheckDomains {
  public $sCLTRID; // string
  public $credential; // Credential
  public $domainArray; // ArrayOfCheckDomain
}
class CheckDomain {
  public $name; // string
  public $idnScript; // string
}
class CheckDomainsResponse {
  public $CheckDomainsResult; // string
}
class Info {
  public $sCLTRID; // string
  public $credential; // Credential
  public $sResourceID; // string
  public $sType; // string
  public $sDomain; // string
  public $sOrderID; // string
}
class InfoResponse {
  public $InfoResult; // string
}
class NameGen {
  public $sCLTRID; // string
  public $credential; // Credential
  public $sSLD; // string
  public $sTLD; // string
  public $sTLDs; // string
  public $nRows; // unsignedShort
  public $bHypens; // boolean
  public $bNumbers; // boolean
  public $nMaxLen; // unsignedShort
  public $bIntelliSearch; // boolean
  public $nPage; // unsignedShort
  public $sTime; // string
}
class NameGenResponse {
  public $NameGenResult; // string
}
class NameGenDB {
  public $sCLTRID; // string
  public $credential; // Credential
  public $sKey; // string
  public $nMaxResults; // int
  public $bExcludeTaken; // boolean
  public $sTLDs; // string
  public $bAddPrefix; // boolean
  public $bAddSuffix; // boolean
  public $bAddDashes; // boolean
  public $bAddRelated; // boolean
  public $bAdvancedSplit; // boolean
  public $bBaseOnTop; // boolean
}
class NameGenDBResponse {
  public $NameGenDBResult; // string
}
class NameGenDBWithTimeLimit {
  public $sCLTRID; // string
  public $credential; // Credential
  public $sKey; // string
  public $nMaxResults; // int
  public $bExcludeTaken; // boolean
  public $sTLDs; // string
  public $bAddPrefix; // boolean
  public $bAddSuffix; // boolean
  public $bAddDashes; // boolean
  public $bAddRelated; // boolean
  public $bAdvancedSplit; // boolean
  public $bBaseOnTop; // boolean
  public $nMaxWaitSeconds; // int
}
class NameGenDBWithTimeLimitResponse {
  public $NameGenDBWithTimeLimitResult; // string
}
class Poll {
  public $sCLTRID; // string
  public $credential; // Credential
  public $sOp; // string
}
class PollResponse {
  public $PollResult; // string
}
class OrderCredits {
  public $sCLTRID; // string
  public $credential; // Credential
  public $shopper; // Shopper
  public $items; // ArrayOfOrderItem
  public $sROID; // string
}
class Shopper {
  public $user; // string
  public $pwd; // string
  public $pwdhint; // string
  public $email; // string
  public $firstname; // string
  public $lastname; // string
  public $phone; // string
  public $pin; // string
  public $dbpuser; // string
  public $dbppwd; // string
  public $dbppwdhint; // string
  public $dbpemail; // string
  public $dbppin; // string
  public $acceptOrderTOS; //string
}
class OrderItem {
  public $productid; // int
  public $parent_resource_id; // string
  public $quantity; // unsignedInt
  public $riid; // string
  public $duration; // double
}
class Order {
}
class OrderCreditsResponse {
  public $OrderCreditsResult; // string
}
class OrderDomains {
  public $sCLTRID; // string
  public $credential; // Credential
  public $shopper; // Shopper
  public $items; // ArrayOfDomainRegistration
  public $dbpItems; // ArrayOfDomainByProxy
  public $sROID; // string
}
class DomainRegistration {
  public $order; // OrderItem
  public $sld; // string
  public $tld; // string
  public $idnScript; // string
  public $period; // int
  public $registrant; // ContactInfo
  public $nexus; // Nexus
  public $nsArray; // ArrayOfNS
  public $admin; // ContactInfo
  public $billing; // ContactInfo
  public $tech; // ContactInfo
  public $autorenewflag; // int
}
class ContactInfo {
  public $fname; // string
  public $lname; // string
  public $org; // string
  public $email; // string
  public $sa1; // string
  public $sa2; // string
  public $city; // string
  public $sp; // string
  public $pc; // string
  public $cc; // string
  public $phone; // string
  public $fax; // string
}
class Nexus {
  public $category; // string
  public $use; // string
  public $country; // string
}
class NS {
  public $name; // string
}



class DomainByProxy {

  public $order; // OrderItem

  public $sld; // string

  public $tld; // string

  public $resourceid; // string

}



class OrderDomainsResponse {

  public $OrderDomainsResult; // string

}



class OrderDomainRenewals {

  public $sCLTRID; // string

  public $credential; // Credential

  public $shopper; // Shopper

  public $items; // ArrayOfDomainRenewal

  public $sROID; // string

}



class DomainRenewal {

  public $order; // OrderItem

  public $resourceid; // string

  public $sld; // string

  public $tld; // string

  public $period; // int

}



class OrderDomainRenewalsResponse {

  public $OrderDomainRenewalsResult; // string

}



class OrderPrivateDomainRenewals {

  public $sCLTRID; // string

  public $credential; // Credential

  public $shopper; // Shopper

  public $items; // ArrayOfDomainRenewal

  public $dbpItems; // ArrayOfResourceRenewal

  public $sROID; // string

}



class ResourceRenewal {

  public $order; // OrderItem

  public $resourceid; // string

}



class OrderPrivateDomainRenewalsResponse {

  public $OrderPrivateDomainRenewalsResult; // string

}



class OrderDomainTransfers {

  public $sCLTRID; // string

  public $credential; // Credential

  public $shopper; // Shopper

  public $items; // ArrayOfDomainTransfer

  public $sROID; // string

}



class DomainTransfer {

  public $order; // OrderItem

  public $sld; // string

  public $tld; // string

  public $authInfo; // string

  public $idnScript; // string

}



class OrderDomainTransfersResponse {

  public $OrderDomainTransfersResult; // string

}



class OrderDomainPrivacy {

  public $sCLTRID; // string

  public $credential; // Credential

  public $shopper; // Shopper

  public $items; // ArrayOfDomainByProxy

  public $sROID; // string

}



class OrderDomainPrivacyResponse {

  public $OrderDomainPrivacyResult; // string

}



class OrderResourceRenewals {

  public $sCLTRID; // string

  public $credential; // Credential

  public $shopper; // Shopper

  public $items; // ArrayOfResourceRenewal

  public $sROID; // string

}



class OrderResourceRenewalsResponse {

  public $OrderResourceRenewalsResult; // string

}



class OrderServiceRenewals {

  public $sCLTRID; // string

  public $credential; // Credential

  public $shopper; // Shopper

  public $items; // ArrayOfServiceRenewal

  public $sROID; // string

}



class ServiceRenewal {

  public $order; // OrderItem

  public $resourceid; // string

}



class OrderServiceRenewalsResponse {

  public $OrderServiceRenewalsResult; // string

}



class OrderServices {

  public $sCLTRID; // string

  public $credential; // Credential

  public $shopper; // Shopper

  public $ProductGroupArray; // ArrayOfProductGroup

  public $sROID; // string

}



class ProductGroup {

  public $OrderItem; // OrderItem

  public $OrderItemAddOnArray; // ArrayOfOrderItem

}



class OrderServicesResponse {

  public $OrderServicesResult; // string

}



class OrderDomainBackOrders {

  public $sCLTRID; // string

  public $credential; // Credential

  public $shopper; // Shopper

  public $items; // ArrayOfDomainBackOrder

  public $sROID; // string

}



class DomainBackOrder {

  public $order; // OrderItem

  public $privateBackOrder; // boolean

  public $sld; // string

  public $tld; // string

  public $registrant; // ContactInfo

  public $nexus; // Nexus

  public $admin; // ContactInfo

  public $billing; // ContactInfo

  public $tech; // ContactInfo

}



class OrderDomainBackOrdersResponse {

  public $OrderDomainBackOrdersResult; // string

}



class Cancel {

  public $sCLTRID; // string

  public $credential; // Credential

  public $sType; // string

  public $sIDArray; // ArrayOfString

}



class CancelResponse {

  public $CancelResult; // string

}



class UpdateDomainOwnership {

  public $sCLTRID; // string

  public $credential; // Credential

  public $sResourceID; // string

  public $sLosingOwner; // string

  public $gaining; // GainingOwner

}



class GainingOwner {

  public $shopperNoDBP; // ShopperNoDBP

  public $registrant; // ContactInfo

  public $admin; // ContactInfo

  public $billing; // ContactInfo

  public $tech; // ContactInfo

}



class ShopperNoDBP {

  public $user; // string

  public $pwd; // string

  public $pwdhint; // string

  public $email; // string

  public $firstname; // string

  public $lastname; // string

  public $phone; // string

  public $pin; // string

}



class UpdateDomainOwnershipResponse {

  public $UpdateDomainOwnershipResult; // string

}



class ResetPassword {

  public $sCLTRID; // string

  public $credential; // Credential

  public $sUser; // string

  public $sPwd; // string

  public $sEmail; // string

  public $sPwdHint; // string

}



class ResetPasswordResponse {

  public $ResetPasswordResult; // string

}



class SetShopperInfo {

  public $sCLTRID; // string

  public $credential; // Credential

  public $sUser; // string

  public $sEmail; // string

  public $sFirstName; // string

  public $sLastName; // string

  public $sPhone; // string

  public $sFax; // string

  public $sCompany; // string

  public $sAddress; // string

  public $sCity; // string

  public $sState; // string

  public $sZip; // string

  public $sCountry; // string

  public $sShopperPin; // string

}



class SetShopperInfoResponse {

  public $SetShopperInfoResult; // string

}



class CreateNewShopper {

  public $sCLTRID; // string

  public $credential; // Credential

  public $sPwd; // string

  public $sEmail; // string

  public $sFirstName; // string

  public $sLastName; // string

  public $sPhone; // string

  public $sPwdHint; // string

  public $sFax; // string

  public $sCompany; // string

  public $sAddress; // string

  public $sCity; // string

  public $sState; // string

  public $sZip; // string

  public $sCountry; // string

  public $sShopperPin; // string

}



class CreateNewShopperResponse {

  public $CreateNewShopperResult; // string

}



class CheckUser {

  public $sCLTRID; // string

  public $credential; // Credential

  public $sType; // string

  public $sUser; // string

  public $sPwd; // string

}



class CheckUserResponse {

  public $CheckUserResult; // string

}



class SetupDomainAlert {

  public $sCLTRID; // string

  public $credential; // Credential

  public $domainAlert; // DomainAlert

  public $registrant; // ContactInfo

}



class DomainAlert {

  public $user; // string

  public $domain; // string

  public $email; // string

  public $tld; // string

  public $privateReg; // int

  public $backorder; // int

}



class SetupDomainAlertResponse {

  public $SetupDomainAlertResult; // string

}



class UpdateDomainAlert {

  public $sCLTRID; // string

  public $credential; // Credential

  public $domainAlert; // DomainAlert

  public $sDomainMonitorID; // string

  public $registrant; // ContactInfo

}



class UpdateDomainAlertResponse {

  public $UpdateDomainAlertResult; // string

}



class RemoveDomainAlert {

  public $sCLTRID; // string

  public $credential; // Credential

  public $sDomainMonitorID; // string

  public $sUser; // string

}



class RemoveDomainAlertResponse {

  public $RemoveDomainAlertResult; // string

}



class GetDomainAlertCredits {

  public $sCLTRID; // string

  public $credential; // Credential

  public $sUser; // string

}



class GetDomainAlertCreditsResponse {

  public $GetDomainAlertCreditsResult; // string

}



class GetMonitoredDomainList {

  public $sCLTRID; // string

  public $credential; // Credential

  public $sUser; // string

  public $nPage; // int

  public $nRowsPerPage; // int

}



class GetMonitoredDomainListResponse {

  public $GetMonitoredDomainListResult; // string

}



class GetExpiringNameList {

  public $sCLTRID; // string

  public $credential; // Credential

  public $sUser; // string

  public $nLength; // int

  public $sDashes; // string

  public $sNumbers; // string

  public $sWildCardSearch; // string

  public $sSearchCriteria; // string

  public $sTLDs; // string

  public $nPage; // int

  public $nRowsPerPage; // int

}



class GetExpiringNameListResponse {

  public $GetExpiringNameListResult; // string

}



class DomainForwarding {

  public $sCLTRID; // string

  public $credential; // Credential

  public $sUser; // string

  public $nDomainID; // int

  public $sForwardingURL; // string

  public $sMngTRID; // string

}



class DomainForwardingResponse {

  public $DomainForwardingResult; // string

}



class UpdateNameServer {

  public $sCLTRID; // string

  public $credential; // Credential

  public $domainArray; // ArrayOfDomain

  public $nsArray; // ArrayOfNS

}



class Domain {

  public $resourceid; // string

  public $mngTRID; // string

  public $transferKey; // string

  public $newAuthInfo; // string

}



class UpdateNameServerResponse {

  public $UpdateNameServerResult; // string

}



class UpdateDomainContact {

  public $sCLTRID; // string

  public $credential; // Credential

  public $domainArray; // ArrayOfDomain

  public $registrant; // ContactInfo

  public $admin; // ContactInfo

  public $billing; // ContactInfo

  public $tech; // ContactInfo

}



class UpdateDomainContactResponse {

  public $UpdateDomainContactResult; // string

}



class SetDomainLocking {

  public $sCLTRID; // string

  public $credential; // Credential

  public $domainArray; // ArrayOfDomain

  public $sLock; // string

}



class SetDomainLockingResponse {

  public $SetDomainLockingResult; // string

}



class ManageTransfer {

  public $sCLTRID; // string

  public $credential; // Credential

  public $domainArray; // ArrayOfDomain

  public $sAction; // string

}



class ManageTransferResponse {

  public $ManageTransferResult; // string

}



class UpdateDomainForwarding {

  public $sCLTRID; // string

  public $credential; // Credential

  public $domainArray; // ArrayOfDomain

  public $sAction; // string

  public $sForwardingURL; // string

}



class UpdateDomainForwardingResponse {

  public $UpdateDomainForwardingResult; // string

}



class UpdateDomainMasking {

  public $sCLTRID; // string

  public $credential; // Credential

  public $domainArray; // ArrayOfDomain

  public $sAction; // string

  public $sForwardingURL; // string

  public $sMaskingMetatagTitle; // string

  public $sMaskingMetatagDesc; // string

  public $sMaskingMetatagKeyword; // string

}



class UpdateDomainMaskingResponse {

  public $UpdateDomainMaskingResult; // string

}



class ModifyDNS {

  public $sCLTRID; // string

  public $credential; // Credential

  public $dnsRequestArray; // ArrayOfDNSRequest

  public $sDomain; // string

}



class DNSRequest {

  public $recType; // string

  public $action; // string

  public $key; // string

  public $ttl; // int

  public $recValue; // string

}



class ModifyDNSResponse {

  public $ModifyDNSResult; // string

}



class GetIDNLanguageList {

  public $sCLTRID; // string

  public $credential; // Credential

  public $sTld; // string

}



class GetIDNLanguageListResponse {

  public $GetIDNLanguageListResult; // string

}



class GetPunycodeIDN {

  public $sCLTRID; // string

  public $credential; // Credential

  public $sDomainArray; // ArrayOfString

}



class GetPunycodeIDNResponse {

  public $GetPunycodeIDNResult; // string

}



class GetUnicodeIDN {

  public $sCLTRID; // string

  public $credential; // Credential

  public $sDomainArray; // ArrayOfString

}



class GetUnicodeIDNResponse {

  public $GetUnicodeIDNResult; // string

}



class ValidateRegistration {

  public $sCLTRID; // string

  public $credential; // Credential

  public $domainContacts; // DomainContacts

  public $domainDataArray; // ArrayOfDomainData

}



class DomainContacts {

  public $registrant; // ContactInfo

  public $admin; // ContactInfo

  public $billing; // ContactInfo

  public $tech; // ContactInfo

}



class DomainData {

  public $sld; // string

  public $tld; // string

  public $period; // int

}



class ValidateRegistrationResponse {

  public $ValidateRegistrationResult; // string

}



class SetServiceAddOnQty {

  public $sCLTRID; // string

  public $credential; // Credential

  public $sResourceID; // string

  public $nProductID; // unsignedInt

  public $nQuantity; // unsignedInt

}



class SetServiceAddOnQtyResponse {

  public $SetServiceAddOnQtyResult; // string

}



class GetAutoResponderForEmail {

  public $sCLTRID; // string

  public $credential; // Credential

  public $returnCfg; // ReturnConfig

  public $sShopper; // string

  public $sEmailAddress; // string

}



class ReturnConfig {

  public $pageNumber; // unsignedInt

  public $resultsPerPage; // unsignedInt

  public $orderBy; // string

  public $sortOrder; // string

}



class GetAutoResponderForEmailResponse {

  public $GetAutoResponderForEmailResult; // string

}



class GetCatchallStatusForEmail {

  public $sCLTRID; // string

  public $credential; // Credential

  public $returnCfg; // ReturnConfig

  public $sShopper; // string

  public $sEmailAddress; // string

}



class GetCatchallStatusForEmailResponse {

  public $GetCatchallStatusForEmailResult; // string

}



class GetDiskUsageForEmail {

  public $sCLTRID; // string

  public $credential; // Credential

  public $returnCfg; // ReturnConfig

  public $sShopper; // string

  public $sEmailAddress; // string

}



class GetDiskUsageForEmailResponse {

  public $GetDiskUsageForEmailResult; // string

}



class GetEmailAddressInfoForShopper {

  public $sCLTRID; // string

  public $credential; // Credential

  public $returnCfg; // ReturnConfig

  public $sShopper; // string

  public $sEmailAddress; // string

  public $nDynamicData; // int

  public $nType; // int

  public $bActive; // boolean

}



class GetEmailAddressInfoForShopperResponse {

  public $GetEmailAddressInfoForShopperResult; // string

}



class GetEmailAddressesForDomain {

  public $sCLTRID; // string

  public $credential; // Credential

  public $returnCfg; // ReturnConfig

  public $sShopper; // string

  public $sDomain; // string

  public $nType; // int

  public $bActive; // boolean

}



class GetEmailAddressesForDomainResponse {

  public $GetEmailAddressesForDomainResult; // string

}



class GetEmailAddressesForPlan {

  public $sCLTRID; // string

  public $credential; // Credential

  public $returnCfg; // ReturnConfig

  public $sShopper; // string

  public $sResourceID; // string

  public $bActive; // boolean

}



class GetEmailAddressesForPlanResponse {

  public $GetEmailAddressesForPlanResult; // string

}



class GetEmailAddressesForShopper {

  public $sCLTRID; // string

  public $credential; // Credential

  public $returnCfg; // ReturnConfig

  public $sShopper; // string

  public $nType; // int

  public $bActive; // boolean

}



class GetEmailAddressesForShopperResponse {

  public $GetEmailAddressesForShopperResult; // string

}



class GetEmailPlanInfoForShopper {

  public $sCLTRID; // string

  public $credential; // Credential

  public $returnCfg; // ReturnConfig

  public $sShopper; // string

  public $sResourceID; // string

  public $nType; // int

  public $nDynamicData; // int

}



class GetEmailPlanInfoForShopperResponse {

  public $GetEmailPlanInfoForShopperResult; // string

}



class GetEmailPlansForDomain {

  public $sCLTRID; // string

  public $credential; // Credential

  public $returnCfg; // ReturnConfig

  public $sShopper; // string

  public $sDomain; // string

  public $nType; // int

}



class GetEmailPlansForDomainResponse {

  public $GetEmailPlansForDomainResult; // string

}



class GetEmailPlansForShopper {

  public $sCLTRID; // string

  public $credential; // Credential

  public $returnCfg; // ReturnConfig

  public $sShopper; // string

  public $nType; // int

}



class GetEmailPlansForShopperResponse {

  public $GetEmailPlansForShopperResult; // string

}



class GetIMAPForEmail {

  public $sCLTRID; // string

  public $credential; // Credential

  public $returnCfg; // ReturnConfig

  public $sShopper; // string

  public $sEmailAddress; // string

}



class GetIMAPForEmailResponse {

  public $GetIMAPForEmailResult; // string

}



class GetPlanForEmail {

  public $sCLTRID; // string

  public $credential; // Credential

  public $returnCfg; // ReturnConfig

  public $sShopper; // string

  public $sEmailAddress; // string

}



class GetPlanForEmailResponse {

  public $GetPlanForEmailResult; // string

}



class GetRIMForEmail {

  public $sCLTRID; // string

  public $credential; // Credential

  public $returnCfg; // ReturnConfig

  public $sShopper; // string

  public $sEmailAddress; // string

}



class GetRIMForEmailResponse {

  public $GetRIMForEmailResult; // string

}



class GetSMTPRelayInfoForShopper {

  public $sCLTRID; // string

  public $credential; // Credential

  public $returnCfg; // ReturnConfig

  public $sShopper; // string

  public $sResourceID; // string

  public $nType; // int

}



class GetSMTPRelayInfoForShopperResponse {

  public $GetSMTPRelayInfoForShopperResult; // string

}



class GetSMTPRelayPlansForDomain {

  public $sCLTRID; // string

  public $credential; // Credential

  public $returnCfg; // ReturnConfig

  public $sShopper; // string

  public $sDomain; // string

}



class GetSMTPRelayPlansForDomainResponse {

  public $GetSMTPRelayPlansForDomainResult; // string

}



class GetSMTPRelayPlansForEmail {

  public $sCLTRID; // string

  public $credential; // Credential

  public $returnCfg; // ReturnConfig

  public $sShopper; // string

  public $sEmailAddress; // string

}



class GetSMTPRelayPlansForEmailResponse {

  public $GetSMTPRelayPlansForEmailResult; // string

}



class GetSMTPRelaysForEmail {

  public $sCLTRID; // string

  public $credential; // Credential

  public $returnCfg; // ReturnConfig

  public $sShopper; // string

  public $sEmailAddress; // string

}



class GetSMTPRelaysForEmailResponse {

  public $GetSMTPRelaysForEmailResult; // string

}



class GetSMTPRelaysForShopper {

  public $sCLTRID; // string

  public $credential; // Credential

  public $returnCfg; // ReturnConfig

  public $sShopper; // string

  public $nType; // int

}



class GetSMTPRelaysForShopperResponse {

  public $GetSMTPRelaysForShopperResult; // string

}



class GetStatusForEmail {

  public $sCLTRID; // string

  public $credential; // Credential

  public $returnCfg; // ReturnConfig

  public $sShopper; // string

  public $sEmailAddress; // string

}



class GetStatusForEmailResponse {

  public $GetStatusForEmailResult; // string

}



class MoveEmailAccount {

  public $sCLTRID; // string

  public $credential; // Credential

  public $sShopper; // string

  public $sEmailAddress; // string

  public $sResourceID; // string

  public $nDiskSpace; // int

}



class MoveEmailAccountResponse {

  public $MoveEmailAccountResult; // string

}



class RemoveEmailAddress {

  public $sCLTRID; // string

  public $credential; // Credential

  public $sShopper; // string

  public $sEmailAddress; // string

}



class RemoveEmailAddressResponse {

  public $RemoveEmailAddressResult; // string

}



class RemoveRIMAccount {

  public $sCLTRID; // string

  public $credential; // Credential

  public $sShopper; // string

  public $sEmailAddress; // string

  public $sSubscription; // string

}



class RemoveRIMAccountResponse {

  public $RemoveRIMAccountResult; // string

}



class RemoveSmtpRelay {

  public $sCLTRID; // string

  public $credential; // Credential

  public $sShopper; // string

  public $sEmailAddress; // string

  public $sResourceID; // string

}



class RemoveSmtpRelayResponse {

  public $RemoveSmtpRelayResult; // string

}



class RenameEmailPlan {

  public $sCLTRID; // string

  public $credential; // Credential

  public $sShopper; // string

  public $sResourceID; // string

  public $sName; // string

}



class RenameEmailPlanResponse {

  public $RenameEmailPlanResult; // string

}



class SetAutoResponder {

  public $sCLTRID; // string

  public $credential; // Credential

  public $sShopper; // string

  public $sEmailAddress; // string

  public $nAR_Status; // int

  public $sAR_Message; // string

  public $sAR_Subject; // string

  public $sAR_Start; // string

  public $sAR_End; // string

  public $sAR_From; // string

}



class SetAutoResponderResponse {

  public $SetAutoResponderResult; // string

}



class SetEmailAccount {

  public $sCLTRID; // string

  public $credential; // Credential

  public $sShopper; // string

  public $sEmailAddress; // string

  public $sResourceID; // string

  public $sPassword; // string

  public $nDiskSpace; // int

  public $nCatchAll; // int

  public $sCC; // string

  public $nSMTPRelays; // int

  public $bSpamFilter; // boolean

  public $nAR_Status; // int

  public $sAR_Message; // string

  public $sAR_Subject; // string

  public $sAR_Start; // string

  public $sAR_End; // string

  public $sAR_From; // string

}



class SetEmailAccountResponse {

  public $SetEmailAccountResult; // string

}



class SetRIMAccount {

  public $sCLTRID; // string

  public $credential; // Credential

  public $sShopper; // string

  public $sEmailAddress; // string

  public $sCallBack; // string

  public $sNotification; // string

}



class SetRIMAccountResponse {

  public $SetRIMAccountResult; // string

}



class SetSmtpRelays {

  public $sCLTRID; // string

  public $credential; // Credential

  public $sShopper; // string

  public $sEmailAddress; // string

  public $nSMTPRelays; // int

}



class SetSmtpRelaysResponse {

  public $SetSmtpRelaysResult; // string

}



class TestEmailPassword {

  public $sCLTRID; // string

  public $credential; // Credential

  public $sShopper; // string

  public $sEmailAddress; // string

  public $sPassword; // string

  public $bEncrypted; // boolean

}



class TestEmailPasswordResponse {

  public $TestEmailPasswordResult; // string

}





/**

 * WAPI class

 * 

 * 

 * 

 * @author    {author}

 * @copyright {copyright}

 * @package   {package}

 */

class WAPI extends SoapClient {



  private static $classmap = array(

                                    'ProcessRequest' => 'ProcessRequest',

                                    'ProcessRequestResponse' => 'ProcessRequestResponse',

                                    'Describe' => 'Describe',

                                    'Credential' => 'Credential',

                                    'DescribeResponse' => 'DescribeResponse',

                                    'CheckAvailability' => 'CheckAvailability',

                                    'CheckAvailabilityResponse' => 'CheckAvailabilityResponse',

                                    'CheckDomains' => 'CheckDomains',

                                    'CheckDomain' => 'CheckDomain',

                                    'CheckDomainsResponse' => 'CheckDomainsResponse',

                                    'Info' => 'Info',

                                    'InfoResponse' => 'InfoResponse',

                                    'NameGen' => 'NameGen',

                                    'NameGenResponse' => 'NameGenResponse',

                                    'NameGenDB' => 'NameGenDB',

                                    'NameGenDBResponse' => 'NameGenDBResponse',

                                    'NameGenDBWithTimeLimit' => 'NameGenDBWithTimeLimit',

                                    'NameGenDBWithTimeLimitResponse' => 'NameGenDBWithTimeLimitResponse',

                                    'Poll' => 'Poll',

                                    'PollResponse' => 'PollResponse',

                                    'OrderCredits' => 'OrderCredits',

                                    'Shopper' => 'Shopper',

                                    'OrderItem' => 'OrderItem',

                                    'Order' => 'Order',

                                    'OrderCreditsResponse' => 'OrderCreditsResponse',

                                    'OrderDomains' => 'OrderDomains',

                                    'DomainRegistration' => 'DomainRegistration',

                                    'ContactInfo' => 'ContactInfo',

                                    'Nexus' => 'Nexus',

                                    'NS' => 'NS',

                                    'DomainByProxy' => 'DomainByProxy',

                                    'OrderDomainsResponse' => 'OrderDomainsResponse',

                                    'OrderDomainRenewals' => 'OrderDomainRenewals',

                                    'DomainRenewal' => 'DomainRenewal',

                                    'OrderDomainRenewalsResponse' => 'OrderDomainRenewalsResponse',

                                    'OrderPrivateDomainRenewals' => 'OrderPrivateDomainRenewals',

                                    'ResourceRenewal' => 'ResourceRenewal',

                                    'OrderPrivateDomainRenewalsResponse' => 'OrderPrivateDomainRenewalsResponse',

                                    'OrderDomainTransfers' => 'OrderDomainTransfers',

                                    'DomainTransfer' => 'DomainTransfer',

                                    'OrderDomainTransfersResponse' => 'OrderDomainTransfersResponse',

                                    'OrderDomainPrivacy' => 'OrderDomainPrivacy',

                                    'OrderDomainPrivacyResponse' => 'OrderDomainPrivacyResponse',

                                    'OrderResourceRenewals' => 'OrderResourceRenewals',

                                    'OrderResourceRenewalsResponse' => 'OrderResourceRenewalsResponse',

                                    'OrderServiceRenewals' => 'OrderServiceRenewals',

                                    'ServiceRenewal' => 'ServiceRenewal',

                                    'OrderServiceRenewalsResponse' => 'OrderServiceRenewalsResponse',

                                    'OrderServices' => 'OrderServices',

                                    'ProductGroup' => 'ProductGroup',

                                    'OrderServicesResponse' => 'OrderServicesResponse',

                                    'OrderDomainBackOrders' => 'OrderDomainBackOrders',

                                    'DomainBackOrder' => 'DomainBackOrder',

                                    'OrderDomainBackOrdersResponse' => 'OrderDomainBackOrdersResponse',

                                    'Cancel' => 'Cancel',

                                    'CancelResponse' => 'CancelResponse',

                                    'UpdateDomainOwnership' => 'UpdateDomainOwnership',

                                    'GainingOwner' => 'GainingOwner',

                                    'ShopperNoDBP' => 'ShopperNoDBP',

                                    'UpdateDomainOwnershipResponse' => 'UpdateDomainOwnershipResponse',

                                    'ResetPassword' => 'ResetPassword',

                                    'ResetPasswordResponse' => 'ResetPasswordResponse',

                                    'SetShopperInfo' => 'SetShopperInfo',

                                    'SetShopperInfoResponse' => 'SetShopperInfoResponse',

                                    'CreateNewShopper' => 'CreateNewShopper',

                                    'CreateNewShopperResponse' => 'CreateNewShopperResponse',

                                    'CheckUser' => 'CheckUser',

                                    'CheckUserResponse' => 'CheckUserResponse',

                                    'SetupDomainAlert' => 'SetupDomainAlert',

                                    'DomainAlert' => 'DomainAlert',

                                    'SetupDomainAlertResponse' => 'SetupDomainAlertResponse',

                                    'UpdateDomainAlert' => 'UpdateDomainAlert',

                                    'UpdateDomainAlertResponse' => 'UpdateDomainAlertResponse',

                                    'RemoveDomainAlert' => 'RemoveDomainAlert',

                                    'RemoveDomainAlertResponse' => 'RemoveDomainAlertResponse',

                                    'GetDomainAlertCredits' => 'GetDomainAlertCredits',

                                    'GetDomainAlertCreditsResponse' => 'GetDomainAlertCreditsResponse',

                                    'GetMonitoredDomainList' => 'GetMonitoredDomainList',

                                    'GetMonitoredDomainListResponse' => 'GetMonitoredDomainListResponse',

                                    'GetExpiringNameList' => 'GetExpiringNameList',

                                    'GetExpiringNameListResponse' => 'GetExpiringNameListResponse',

                                    'DomainForwarding' => 'DomainForwarding',

                                    'DomainForwardingResponse' => 'DomainForwardingResponse',

                                    'UpdateNameServer' => 'UpdateNameServer',

                                    'Domain' => 'Domain',

                                    'UpdateNameServerResponse' => 'UpdateNameServerResponse',

                                    'UpdateDomainContact' => 'UpdateDomainContact',

                                    'UpdateDomainContactResponse' => 'UpdateDomainContactResponse',

                                    'SetDomainLocking' => 'SetDomainLocking',

                                    'SetDomainLockingResponse' => 'SetDomainLockingResponse',

                                    'ManageTransfer' => 'ManageTransfer',

                                    'ManageTransferResponse' => 'ManageTransferResponse',

                                    'UpdateDomainForwarding' => 'UpdateDomainForwarding',

                                    'UpdateDomainForwardingResponse' => 'UpdateDomainForwardingResponse',

                                    'UpdateDomainMasking' => 'UpdateDomainMasking',

                                    'UpdateDomainMaskingResponse' => 'UpdateDomainMaskingResponse',

                                    'ModifyDNS' => 'ModifyDNS',

                                    'DNSRequest' => 'DNSRequest',

                                    'ModifyDNSResponse' => 'ModifyDNSResponse',

                                    'GetIDNLanguageList' => 'GetIDNLanguageList',

                                    'GetIDNLanguageListResponse' => 'GetIDNLanguageListResponse',

                                    'GetPunycodeIDN' => 'GetPunycodeIDN',

                                    'GetPunycodeIDNResponse' => 'GetPunycodeIDNResponse',

                                    'GetUnicodeIDN' => 'GetUnicodeIDN',

                                    'GetUnicodeIDNResponse' => 'GetUnicodeIDNResponse',

                                    'ValidateRegistration' => 'ValidateRegistration',

                                    'DomainContacts' => 'DomainContacts',

                                    'DomainData' => 'DomainData',

                                    'ValidateRegistrationResponse' => 'ValidateRegistrationResponse',

                                    'SetServiceAddOnQty' => 'SetServiceAddOnQty',

                                    'SetServiceAddOnQtyResponse' => 'SetServiceAddOnQtyResponse',

                                    'GetAutoResponderForEmail' => 'GetAutoResponderForEmail',

                                    'ReturnConfig' => 'ReturnConfig',

                                    'GetAutoResponderForEmailResponse' => 'GetAutoResponderForEmailResponse',

                                    'GetCatchallStatusForEmail' => 'GetCatchallStatusForEmail',

                                    'GetCatchallStatusForEmailResponse' => 'GetCatchallStatusForEmailResponse',

                                    'GetDiskUsageForEmail' => 'GetDiskUsageForEmail',

                                    'GetDiskUsageForEmailResponse' => 'GetDiskUsageForEmailResponse',

                                    'GetEmailAddressInfoForShopper' => 'GetEmailAddressInfoForShopper',

                                    'GetEmailAddressInfoForShopperResponse' => 'GetEmailAddressInfoForShopperResponse',

                                    'GetEmailAddressesForDomain' => 'GetEmailAddressesForDomain',

                                    'GetEmailAddressesForDomainResponse' => 'GetEmailAddressesForDomainResponse',

                                    'GetEmailAddressesForPlan' => 'GetEmailAddressesForPlan',

                                    'GetEmailAddressesForPlanResponse' => 'GetEmailAddressesForPlanResponse',

                                    'GetEmailAddressesForShopper' => 'GetEmailAddressesForShopper',

                                    'GetEmailAddressesForShopperResponse' => 'GetEmailAddressesForShopperResponse',

                                    'GetEmailPlanInfoForShopper' => 'GetEmailPlanInfoForShopper',

                                    'GetEmailPlanInfoForShopperResponse' => 'GetEmailPlanInfoForShopperResponse',

                                    'GetEmailPlansForDomain' => 'GetEmailPlansForDomain',

                                    'GetEmailPlansForDomainResponse' => 'GetEmailPlansForDomainResponse',

                                    'GetEmailPlansForShopper' => 'GetEmailPlansForShopper',

                                    'GetEmailPlansForShopperResponse' => 'GetEmailPlansForShopperResponse',

                                    'GetIMAPForEmail' => 'GetIMAPForEmail',

                                    'GetIMAPForEmailResponse' => 'GetIMAPForEmailResponse',

                                    'GetPlanForEmail' => 'GetPlanForEmail',

                                    'GetPlanForEmailResponse' => 'GetPlanForEmailResponse',

                                    'GetRIMForEmail' => 'GetRIMForEmail',

                                    'GetRIMForEmailResponse' => 'GetRIMForEmailResponse',

                                    'GetSMTPRelayInfoForShopper' => 'GetSMTPRelayInfoForShopper',

                                    'GetSMTPRelayInfoForShopperResponse' => 'GetSMTPRelayInfoForShopperResponse',

                                    'GetSMTPRelayPlansForDomain' => 'GetSMTPRelayPlansForDomain',

                                    'GetSMTPRelayPlansForDomainResponse' => 'GetSMTPRelayPlansForDomainResponse',

                                    'GetSMTPRelayPlansForEmail' => 'GetSMTPRelayPlansForEmail',

                                    'GetSMTPRelayPlansForEmailResponse' => 'GetSMTPRelayPlansForEmailResponse',

                                    'GetSMTPRelaysForEmail' => 'GetSMTPRelaysForEmail',

                                    'GetSMTPRelaysForEmailResponse' => 'GetSMTPRelaysForEmailResponse',

                                    'GetSMTPRelaysForShopper' => 'GetSMTPRelaysForShopper',

                                    'GetSMTPRelaysForShopperResponse' => 'GetSMTPRelaysForShopperResponse',

                                    'GetStatusForEmail' => 'GetStatusForEmail',

                                    'GetStatusForEmailResponse' => 'GetStatusForEmailResponse',

                                    'MoveEmailAccount' => 'MoveEmailAccount',

                                    'MoveEmailAccountResponse' => 'MoveEmailAccountResponse',

                                    'RemoveEmailAddress' => 'RemoveEmailAddress',

                                    'RemoveEmailAddressResponse' => 'RemoveEmailAddressResponse',

                                    'RemoveRIMAccount' => 'RemoveRIMAccount',

                                    'RemoveRIMAccountResponse' => 'RemoveRIMAccountResponse',

                                    'RemoveSmtpRelay' => 'RemoveSmtpRelay',

                                    'RemoveSmtpRelayResponse' => 'RemoveSmtpRelayResponse',

                                    'RenameEmailPlan' => 'RenameEmailPlan',

                                    'RenameEmailPlanResponse' => 'RenameEmailPlanResponse',

                                    'SetAutoResponder' => 'SetAutoResponder',

                                    'SetAutoResponderResponse' => 'SetAutoResponderResponse',

                                    'SetEmailAccount' => 'SetEmailAccount',

                                    'SetEmailAccountResponse' => 'SetEmailAccountResponse',

                                    'SetRIMAccount' => 'SetRIMAccount',

                                    'SetRIMAccountResponse' => 'SetRIMAccountResponse',

                                    'SetSmtpRelays' => 'SetSmtpRelays',

                                    'SetSmtpRelaysResponse' => 'SetSmtpRelaysResponse',

                                    'TestEmailPassword' => 'TestEmailPassword',

                                    'TestEmailPasswordResponse' => 'TestEmailPasswordResponse',

                                   );



  public function WAPI($wsdl = "https://api.ote.wildwestdomains.com/wswwdapi/wapi.asmx?wsdl", $options = array()) {

    foreach(self::$classmap as $key => $value) {

      if(!isset($options['classmap'][$key])) {

        $options['classmap'][$key] = $value;

      }

    }

    parent::__construct($wsdl, $options);

  }



  /**

   * Provide support for calling WWD services using legacy WAPI request XMLs.

   *

   * @param ProcessRequest $parameters

   * @return ProcessRequestResponse

   */

  public function ProcessRequest(ProcessRequest $parameters) {

    return $this->__soapCall('ProcessRequest', array($parameters),       array(

            'uri' => 'http://wildwestdomains.com/webservices/',

            'soapaction' => ''

           )

      );

  }



  /**

   * Returns activity timeout and version information from the server.

   *

   * @param Describe $parameters

   * @return DescribeResponse

   */

  public function Describe(Describe $parameters) {

    return $this->__soapCall('Describe', array($parameters),       array(

            'uri' => 'http://wildwestdomains.com/webservices/',

            'soapaction' => ''

           )

      );

  }



  /**

   * Checks the availability of domains, hosts and name servers.

   *

   * @param CheckAvailability $parameters

   * @return CheckAvailabilityResponse

   */

  public function CheckAvailability(CheckAvailability $parameters) {

    return $this->__soapCall('CheckAvailability', array($parameters),       array(

            'uri' => 'http://wildwestdomains.com/webservices/',

            'soapaction' => ''

           )

      );

  }



  /**

   * Checks the availability of domains, supports IDN domain checks.

   *

   * @param CheckDomains $parameters

   * @return CheckDomainsResponse

   */

  public function CheckDomains(CheckDomains $parameters) {

    return $this->__soapCall('CheckDomains', array($parameters),       array(

            'uri' => 'http://wildwestdomains.com/webservices/',

            'soapaction' => ''

           )

      );

  }



  /**

   * Gets information about items that have been previously ordered.

   *

   * @param Info $parameters

   * @return InfoResponse

   */

  public function Info(Info $parameters) {

    return $this->__soapCall('Info', array($parameters),       array(

            'uri' => 'http://wildwestdomains.com/webservices/',

            'soapaction' => ''

           )

      );

  }



  /**

   * Used to get the list of alternative domain names based on a given name.

   *

   * @param NameGen $parameters

   * @return NameGenResponse

   */

  public function NameGen(NameGen $parameters) {

    return $this->__soapCall('NameGen', array($parameters),       array(

            'uri' => 'http://wildwestdomains.com/webservices/',

            'soapaction' => ''

           )

      );

  }



  /**

   * Used to get the list of alternative domain names based on a given name (Domains Bot Service).

   *

   * @param NameGenDB $parameters

   * @return NameGenDBResponse

   */

  public function NameGenDB(NameGenDB $parameters) {

    return $this->__soapCall('NameGenDB', array($parameters),       array(

            'uri' => 'http://wildwestdomains.com/webservices/',

            'soapaction' => ''

           )

      );

  }



  /**

   * Used to get the list of alternative domain names based on a given name (Domains Bot Service).

   *

   * @param NameGenDBWithTimeLimit $parameters

   * @return NameGenDBWithTimeLimitResponse

   */

  public function NameGenDBWithTimeLimit(NameGenDBWithTimeLimit $parameters) {

    return $this->__soapCall('NameGenDBWithTimeLimit', array($parameters),       array(

            'uri' => 'http://wildwestdomains.com/webservices/',

            'soapaction' => ''

           )

      );

  }



  /**

   * Used to retrieve status notifications about pending orders.

   *

   * @param Poll $parameters

   * @return PollResponse

   */

  public function Poll(Poll $parameters) {

    return $this->__soapCall('Poll', array($parameters),       array(

            'uri' => 'http://wildwestdomains.com/webservices/Poll',

            'soapaction' => ''

           )

      );

  }



  /**

   * Used to place an order on items that do not require customization (non-domain).

   *

   * @param OrderCredits $parameters

   * @return OrderCreditsResponse

   */

  public function OrderCredits(OrderCredits $parameters) {

    return $this->__soapCall('OrderCredits', array($parameters),       array(

            'uri' => 'http://wildwestdomains.com/webservices/',

            'soapaction' => ''

           )

      );

  }



  /**

   * Used for registering new domain names.

   *

   * @param OrderDomains $parameters

   * @return OrderDomainsResponse

   */

  public function OrderDomains(OrderDomains $parameters) {

    return $this->__soapCall('OrderDomains', array($parameters),       array(

            'uri' => 'http://wildwestdomains.com/webservices/',

            'soapaction' => ''

           )

      );

  }



  /**

   * Used for renewing registration for existing public domain names.

   *

   * @param OrderDomainRenewals $parameters

   * @return OrderDomainRenewalsResponse

   */

  public function OrderDomainRenewals(OrderDomainRenewals $parameters) {

    return $this->__soapCall('OrderDomainRenewals', array($parameters),       array(

            'uri' => 'http://wildwestdomains.com/webservices/',

            'soapaction' => ''

           )

      );

  }



  /**

   * Used for renewing registration for existing private domain names.

   *

   * @param OrderPrivateDomainRenewals $parameters

   * @return OrderPrivateDomainRenewalsResponse

   */

  public function OrderPrivateDomainRenewals(OrderPrivateDomainRenewals $parameters) {

    return $this->__soapCall('OrderPrivateDomainRenewals', array($parameters),       array(

            'uri' => 'http://wildwestdomains.com/webservices/',

            'soapaction' => ''

           )

      );

  }



  /**

   * Used for transfering ownership of a domain from one user to another.

   *

   * @param OrderDomainTransfers $parameters

   * @return OrderDomainTransfersResponse

   */

  public function OrderDomainTransfers(OrderDomainTransfers $parameters) {

    return $this->__soapCall('OrderDomainTransfers', array($parameters),       array(

            'uri' => 'http://wildwestdomains.com/webservices/',

            'soapaction' => ''

           )

      );

  }



  /**

   * Used for adding privacy to a domain registration.

   *

   * @param OrderDomainPrivacy $parameters

   * @return OrderDomainPrivacyResponse

   */

  public function OrderDomainPrivacy(OrderDomainPrivacy $parameters) {

    return $this->__soapCall('OrderDomainPrivacy', array($parameters),       array(

            'uri' => 'http://wildwestdomains.com/webservices/',

            'soapaction' => ''

           )

      );

  }



  /**

   * Used for renewing non-domain items.

   *

   * @param OrderResourceRenewals $parameters

   * @return OrderResourceRenewalsResponse

   */

  public function OrderResourceRenewals(OrderResourceRenewals $parameters) {

    return $this->__soapCall('OrderResourceRenewals', array($parameters),       array(

            'uri' => 'http://wildwestdomains.com/webservices/',

            'soapaction' => ''

           )

      );

  }



  /**

   * Used for renewing service items.

   *

   * @param OrderServiceRenewals $parameters

   * @return OrderServiceRenewalsResponse

   */

  public function OrderServiceRenewals(OrderServiceRenewals $parameters) {

    return $this->__soapCall('OrderServiceRenewals', array($parameters),       array(

            'uri' => 'http://wildwestdomains.com/webservices/',

            'soapaction' => ''

           )

      );

  }



  /**

   * Used to place an order for services (e.g. email) and/or service add-ons.

   *

   * @param OrderServices $parameters

   * @return OrderServicesResponse

   */

  public function OrderServices(OrderServices $parameters) {

    return $this->__soapCall('OrderServices', array($parameters),       array(

            'uri' => 'http://wildwestdomains.com/webservices/',

            'soapaction' => ''

           )

      );

  }



  /**

   * Used for back ordering an existing (public or private) domain name.

   *

   * @param OrderDomainBackOrders $parameters

   * @return OrderDomainBackOrdersResponse

   */

  public function OrderDomainBackOrders(OrderDomainBackOrders $parameters) {

    return $this->__soapCall('OrderDomainBackOrders', array($parameters),       array(

            'uri' => 'http://wildwestdomains.com/webservices/',

            'soapaction' => ''

           )

      );

  }



  /**

   * Used for cancelling existing resources.

   *

   * @param Cancel $parameters

   * @return CancelResponse

   */

  public function Cancel(Cancel $parameters) {

    return $this->__soapCall('Cancel', array($parameters),       array(

            'uri' => 'http://wildwestdomains.com/webservices/',

            'soapaction' => ''

           )

      );

  }



  /**

   * Used for changing the ownership of a resource from one end user to another (both must be

   * end-users of the currently logged in reseller).

   *

   * @param UpdateDomainOwnership $parameters

   * @return UpdateDomainOwnershipResponse

   */

  public function UpdateDomainOwnership(UpdateDomainOwnership $parameters) {

    return $this->__soapCall('UpdateDomainOwnership', array($parameters),       array(

            'uri' => 'http://wildwestdomains.com/webservices/',

            'soapaction' => ''

           )

      );

  }



  /**

   * Used for resetting the user's password in the WWD system.

   *

   * @param ResetPassword $parameters

   * @return ResetPasswordResponse

   */

  public function ResetPassword(ResetPassword $parameters) {

    return $this->__soapCall('ResetPassword', array($parameters),       array(

            'uri' => 'http://wildwestdomains.com/webservices/',

            'soapaction' => ''

           )

      );

  }



  /**

   * Used for allowing the reseller to modify the user information for either their top-level

   * account or any of its sub-accounts.

   *

   * @param SetShopperInfo $parameters

   * @return SetShopperInfoResponse

   */

  public function SetShopperInfo(SetShopperInfo $parameters) {

    return $this->__soapCall('SetShopperInfo', array($parameters),       array(

            'uri' => 'http://wildwestdomains.com/webservices/',

            'soapaction' => ''

           )

      );

  }



  /**

   * Used for creating a new reseller sub-account.

   *

   * @param CreateNewShopper $parameters

   * @return CreateNewShopperResponse

   */

  public function CreateNewShopper(CreateNewShopper $parameters) {

    return $this->__soapCall('CreateNewShopper', array($parameters),       array(

            'uri' => 'http://wildwestdomains.com/webservices/',

            'soapaction' => ''

           )

      );

  }



  /**

   * Used for checking whether the account information for the specified user is valid or not.

   *

   * @param CheckUser $parameters

   * @return CheckUserResponse

   */

  public function CheckUser(CheckUser $parameters) {

    return $this->__soapCall('CheckUser', array($parameters),       array(

            'uri' => 'http://wildwestdomains.com/webservices/',

            'soapaction' => ''

           )

      );

  }



  /**

   * Used for setting domain alert credit or backorder a domain.

   *

   * @param SetupDomainAlert $parameters

   * @return SetupDomainAlertResponse

   */

  public function SetupDomainAlert(SetupDomainAlert $parameters) {

    return $this->__soapCall('SetupDomainAlert', array($parameters),       array(

            'uri' => 'http://wildwestdomains.com/webservices/',

            'soapaction' => ''

           )

      );

  }



  /**

   * Used for updating an existing domain alert record.

   *

   * @param UpdateDomainAlert $parameters

   * @return UpdateDomainAlertResponse

   */

  public function UpdateDomainAlert(UpdateDomainAlert $parameters) {

    return $this->__soapCall('UpdateDomainAlert', array($parameters),       array(

            'uri' => 'http://wildwestdomains.com/webservices/',

            'soapaction' => ''

           )

      );

  }



  /**

   * Used for removing an existing domain alert record.

   *

   * @param RemoveDomainAlert $parameters

   * @return RemoveDomainAlertResponse

   */

  public function RemoveDomainAlert(RemoveDomainAlert $parameters) {

    return $this->__soapCall('RemoveDomainAlert', array($parameters),       array(

            'uri' => 'http://wildwestdomains.com/webservices/',

            'soapaction' => ''

           )

      );

  }



  /**

   * Used for querying the number of domain alert, private backorder, and backorder credits.

   *

   * @param GetDomainAlertCredits $parameters

   * @return GetDomainAlertCreditsResponse

   */

  public function GetDomainAlertCredits(GetDomainAlertCredits $parameters) {

    return $this->__soapCall('GetDomainAlertCredits', array($parameters),       array(

            'uri' => 'http://wildwestdomains.com/webservices/',

            'soapaction' => ''

           )

      );

  }



  /**

   * Used for querying a list of monitored domains.

   *

   * @param GetMonitoredDomainList $parameters

   * @return GetMonitoredDomainListResponse

   */

  public function GetMonitoredDomainList(GetMonitoredDomainList $parameters) {

    return $this->__soapCall('GetMonitoredDomainList', array($parameters),       array(

            'uri' => 'http://wildwestdomains.com/webservices/',

            'soapaction' => ''

           )

      );

  }



  /**

   * This method is used to get the list of expiring domain names for users that have an Investors

   * Edge subscription.

   *

   * @param GetExpiringNameList $parameters

   * @return GetExpiringNameListResponse

   */

  public function GetExpiringNameList(GetExpiringNameList $parameters) {

    return $this->__soapCall('GetExpiringNameList', array($parameters),       array(

            'uri' => 'http://wildwestdomains.com/webservices/',

            'soapaction' => ''

           )

      );

  }



  /**

   * This method is used for forwarding a domain to a specified URL.

   *

   * @param DomainForwarding $parameters

   * @return DomainForwardingResponse

   */

  public function DomainForwarding(DomainForwarding $parameters) {

    return $this->__soapCall('DomainForwarding', array($parameters),       array(

            'uri' => 'http://wildwestdomains.com/webservices/',

            'soapaction' => ''

           )

      );

  }



  /**

   * This method is used for modifying associated name servers for the given domains.

   *

   * @param UpdateNameServer $parameters

   * @return UpdateNameServerResponse

   */

  public function UpdateNameServer(UpdateNameServer $parameters) {

    return $this->__soapCall('UpdateNameServer', array($parameters),       array(

            'uri' => 'http://wildwestdomains.com/webservices/',

            'soapaction' => ''

           )

      );

  }



  /**

   * This method is used for modifying associated contact information for the given domains.

   *

   * @param UpdateDomainContact $parameters

   * @return UpdateDomainContactResponse

   */

  public function UpdateDomainContact(UpdateDomainContact $parameters) {

    return $this->__soapCall('UpdateDomainContact', array($parameters),       array(

            'uri' => 'http://wildwestdomains.com/webservices/',

            'soapaction' => ''

           )

      );

  }



  /**

   * This method is used for setting or clearing the lock on a list of domains.

   *

   * @param SetDomainLocking $parameters

   * @return SetDomainLockingResponse

   */

  public function SetDomainLocking(SetDomainLocking $parameters) {

    return $this->__soapCall('SetDomainLocking', array($parameters),       array(

            'uri' => 'http://wildwestdomains.com/webservices/',

            'soapaction' => ''

           )

      );

  }



  /**

   * This method is used for managing the transfer of domains.

   *

   * @param ManageTransfer $parameters

   * @return ManageTransferResponse

   */

  public function ManageTransfer(ManageTransfer $parameters) {

    return $this->__soapCall('ManageTransfer', array($parameters),       array(

            'uri' => 'http://wildwestdomains.com/webservices/',

            'soapaction' => ''

           )

      );

  }



  /**

   * This method is used for performing multiple domain forwarding.

   *

   * @param UpdateDomainForwarding $parameters

   * @return UpdateDomainForwardingResponse

   */

  public function UpdateDomainForwarding(UpdateDomainForwarding $parameters) {

    return $this->__soapCall('UpdateDomainForwarding', array($parameters),       array(

            'uri' => 'http://wildwestdomains.com/webservices/',

            'soapaction' => ''

           )

      );

  }



  /**

   * This method is used for performing multiple domain masking.

   *

   * @param UpdateDomainMasking $parameters

   * @return UpdateDomainMaskingResponse

   */

  public function UpdateDomainMasking(UpdateDomainMasking $parameters) {

    return $this->__soapCall('UpdateDomainMasking', array($parameters),       array(

            'uri' => 'http://wildwestdomains.com/webservices/',

            'soapaction' => ''

           )

      );

  }



  /**

   * This method is used for modifying DNS settings for a given domain.

   *

   * @param ModifyDNS $parameters

   * @return ModifyDNSResponse

   */

  public function ModifyDNS(ModifyDNS $parameters) {

    return $this->__soapCall('ModifyDNS', array($parameters),       array(

            'uri' => 'http://wildwestdomains.com/webservices/',

            'soapaction' => ''

           )

      );

  }



  /**

   * This method is used for modifying DNS settings for a given domain.

   *

   * @param GetIDNLanguageList $parameters

   * @return GetIDNLanguageListResponse

   */

  public function GetIDNLanguageList(GetIDNLanguageList $parameters) {

    return $this->__soapCall('GetIDNLanguageList', array($parameters),       array(

            'uri' => 'http://wildwestdomains.com/webservices/',

            'soapaction' => ''

           )

      );

  }



  /**

   * This method encodes a Unicode (UTF-8) domain to Punycode format.

   *

   * @param GetPunycodeIDN $parameters

   * @return GetPunycodeIDNResponse

   */

  public function GetPunycodeIDN(GetPunycodeIDN $parameters) {

    return $this->__soapCall('GetPunycodeIDN', array($parameters),       array(

            'uri' => 'http://wildwestdomains.com/webservices/',

            'soapaction' => ''

           )

      );

  }



  /**

   * This method decodes a Punycode domain to Unicode (UTF-8) format.

   *

   * @param GetUnicodeIDN $parameters

   * @return GetUnicodeIDNResponse

   */

  public function GetUnicodeIDN(GetUnicodeIDN $parameters) {

    return $this->__soapCall('GetUnicodeIDN', array($parameters),       array(

            'uri' => 'http://wildwestdomains.com/webservices/',

            'soapaction' => ''

           )

      );

  }



  /**

   * This method is used for validating a domain's period and contacts.

   *

   * @param ValidateRegistration $parameters

   * @return ValidateRegistrationResponse

   */

  public function ValidateRegistration(ValidateRegistration $parameters) {

    return $this->__soapCall('ValidateRegistration', array($parameters),       array(

            'uri' => 'http://wildwestdomains.com/webservices/',

            'soapaction' => ''

           )

      );

  }



  /**

   * Sets a service add-on's quantity, which either downgrades or submit new add-on orders.

   *

   * @param SetServiceAddOnQty $parameters

   * @return SetServiceAddOnQtyResponse

   */

  public function SetServiceAddOnQty(SetServiceAddOnQty $parameters) {

    return $this->__soapCall('SetServiceAddOnQty', array($parameters),       array(

            'uri' => 'http://wildwestdomains.com/webservices/',

            'soapaction' => ''

           )

      );

  }



  /**

   * Retrieve the Auto Response/Vacation settings for an email address.

   *

   * @param GetAutoResponderForEmail $parameters

   * @return GetAutoResponderForEmailResponse

   */

  public function GetAutoResponderForEmail(GetAutoResponderForEmail $parameters) {

    return $this->__soapCall('GetAutoResponderForEmail', array($parameters),       array(

            'uri' => 'http://wildwestdomains.com/webservices/',

            'soapaction' => ''

           )

      );

  }



  /**

   * Determine if an email address is a catchall for its domain.

   *

   * @param GetCatchallStatusForEmail $parameters

   * @return GetCatchallStatusForEmailResponse

   */

  public function GetCatchallStatusForEmail(GetCatchallStatusForEmail $parameters) {

    return $this->__soapCall('GetCatchallStatusForEmail', array($parameters),       array(

            'uri' => 'http://wildwestdomains.com/webservices/',

            'soapaction' => ''

           )

      );

  }



  /**

   * Retrieve the Disk Space Used and Quota for an email address.

   *

   * @param GetDiskUsageForEmail $parameters

   * @return GetDiskUsageForEmailResponse

   */

  public function GetDiskUsageForEmail(GetDiskUsageForEmail $parameters) {

    return $this->__soapCall('GetDiskUsageForEmail', array($parameters),       array(

            'uri' => 'http://wildwestdomains.com/webservices/',

            'soapaction' => ''

           )

      );

  }



  /**

   * Get detailed information about a single, or all email addresses associated with the given

   * shopper.

   *

   * @param GetEmailAddressInfoForShopper $parameters

   * @return GetEmailAddressInfoForShopperResponse

   */

  public function GetEmailAddressInfoForShopper(GetEmailAddressInfoForShopper $parameters) {

    return $this->__soapCall('GetEmailAddressInfoForShopper', array($parameters),       array(

            'uri' => 'http://wildwestdomains.com/webservices/',

            'soapaction' => ''

           )

      );

  }



  /**

   * Get a list of email addresses associated with a domain ordered by username.

   *

   * @param GetEmailAddressesForDomain $parameters

   * @return GetEmailAddressesForDomainResponse

   */

  public function GetEmailAddressesForDomain(GetEmailAddressesForDomain $parameters) {

    return $this->__soapCall('GetEmailAddressesForDomain', array($parameters),       array(

            'uri' => 'http://wildwestdomains.com/webservices/',

            'soapaction' => ''

           )

      );

  }



  /**

   * Get a list of email addresses associated with a resource id.

   *

   * @param GetEmailAddressesForPlan $parameters

   * @return GetEmailAddressesForPlanResponse

   */

  public function GetEmailAddressesForPlan(GetEmailAddressesForPlan $parameters) {

    return $this->__soapCall('GetEmailAddressesForPlan', array($parameters),       array(

            'uri' => 'http://wildwestdomains.com/webservices/',

            'soapaction' => ''

           )

      );

  }



  /**

   * Get email addresses associated with the given shopper.

   *

   * @param GetEmailAddressesForShopper $parameters

   * @return GetEmailAddressesForShopperResponse

   */

  public function GetEmailAddressesForShopper(GetEmailAddressesForShopper $parameters) {

    return $this->__soapCall('GetEmailAddressesForShopper', array($parameters),       array(

            'uri' => 'http://wildwestdomains.com/webservices/',

            'soapaction' => ''

           )

      );

  }



  /**

   * Get detailed information about a single, or all email/forwarding plans associated with the

   * given shopper.

   *

   * @param GetEmailPlanInfoForShopper $parameters

   * @return GetEmailPlanInfoForShopperResponse

   */

  public function GetEmailPlanInfoForShopper(GetEmailPlanInfoForShopper $parameters) {

    return $this->__soapCall('GetEmailPlanInfoForShopper', array($parameters),       array(

            'uri' => 'http://wildwestdomains.com/webservices/',

            'soapaction' => ''

           )

      );

  }



  /**

   * Get a list of email and email forwarding resource ids associated with the given domain name.

   *

   * @param GetEmailPlansForDomain $parameters

   * @return GetEmailPlansForDomainResponse

   */

  public function GetEmailPlansForDomain(GetEmailPlansForDomain $parameters) {

    return $this->__soapCall('GetEmailPlansForDomain', array($parameters),       array(

            'uri' => 'http://wildwestdomains.com/webservices/',

            'soapaction' => ''

           )

      );

  }



  /**

   * Get a list of email and email forwarding resource ids associated with the given shopper.

   *

   * @param GetEmailPlansForShopper $parameters

   * @return GetEmailPlansForShopperResponse

   */

  public function GetEmailPlansForShopper(GetEmailPlansForShopper $parameters) {

    return $this->__soapCall('GetEmailPlansForShopper', array($parameters),       array(

            'uri' => 'http://wildwestdomains.com/webservices/',

            'soapaction' => ''

           )

      );

  }



  /**

   * Get a list of email and email forwarding resource ids associated with the given shopper.

   *

   * @param GetIMAPForEmail $parameters

   * @return GetIMAPForEmailResponse

   */

  public function GetIMAPForEmail(GetIMAPForEmail $parameters) {

    return $this->__soapCall('GetIMAPForEmail', array($parameters),       array(

            'uri' => 'http://wildwestdomains.com/webservices/',

            'soapaction' => ''

           )

      );

  }



  /**

   * Retrieve the resource id for the email plan to which an email address is assigned.

   *

   * @param GetPlanForEmail $parameters

   * @return GetPlanForEmailResponse

   */

  public function GetPlanForEmail(GetPlanForEmail $parameters) {

    return $this->__soapCall('GetPlanForEmail', array($parameters),       array(

            'uri' => 'http://wildwestdomains.com/webservices/',

            'soapaction' => ''

           )

      );

  }



  /**

   * Retrieve the RIM status for an email address.

   *

   * @param GetRIMForEmail $parameters

   * @return GetRIMForEmailResponse

   */

  public function GetRIMForEmail(GetRIMForEmail $parameters) {

    return $this->__soapCall('GetRIMForEmail', array($parameters),       array(

            'uri' => 'http://wildwestdomains.com/webservices/',

            'soapaction' => ''

           )

      );

  }



  /**

   * Get detailed info about a single SMTP relay product, or for every SMTP relay products

   * associated with the given shopper.

   *

   * @param GetSMTPRelayInfoForShopper $parameters

   * @return GetSMTPRelayInfoForShopperResponse

   */

  public function GetSMTPRelayInfoForShopper(GetSMTPRelayInfoForShopper $parameters) {

    return $this->__soapCall('GetSMTPRelayInfoForShopper', array($parameters),       array(

            'uri' => 'http://wildwestdomains.com/webservices/',

            'soapaction' => ''

           )

      );

  }



  /**

   * Get a list of SMTP relay resource ids associated with the given domain.

   *

   * @param GetSMTPRelayPlansForDomain $parameters

   * @return GetSMTPRelayPlansForDomainResponse

   */

  public function GetSMTPRelayPlansForDomain(GetSMTPRelayPlansForDomain $parameters) {

    return $this->__soapCall('GetSMTPRelayPlansForDomain', array($parameters),       array(

            'uri' => 'http://wildwestdomains.com/webservices/',

            'soapaction' => ''

           )

      );

  }



  /**

   * Get a list of SMTP relay resource ids associated with the given email address.

   *

   * @param GetSMTPRelayPlansForEmail $parameters

   * @return GetSMTPRelayPlansForEmailResponse

   */

  public function GetSMTPRelayPlansForEmail(GetSMTPRelayPlansForEmail $parameters) {

    return $this->__soapCall('GetSMTPRelayPlansForEmail', array($parameters),       array(

            'uri' => 'http://wildwestdomains.com/webservices/',

            'soapaction' => ''

           )

      );

  }



  /**

   * Retrieve the SMTP relays allotted and used for the given email address.

   *

   * @param GetSMTPRelaysForEmail $parameters

   * @return GetSMTPRelaysForEmailResponse

   */

  public function GetSMTPRelaysForEmail(GetSMTPRelaysForEmail $parameters) {

    return $this->__soapCall('GetSMTPRelaysForEmail', array($parameters),       array(

            'uri' => 'http://wildwestdomains.com/webservices/',

            'soapaction' => ''

           )

      );

  }



  /**

   * Get a list of SMTP relays associated with the given shopper.

   *

   * @param GetSMTPRelaysForShopper $parameters

   * @return GetSMTPRelaysForShopperResponse

   */

  public function GetSMTPRelaysForShopper(GetSMTPRelaysForShopper $parameters) {

    return $this->__soapCall('GetSMTPRelaysForShopper', array($parameters),       array(

            'uri' => 'http://wildwestdomains.com/webservices/',

            'soapaction' => ''

           )

      );

  }



  /**

   * Retrieve the current status of an email.

   *

   * @param GetStatusForEmail $parameters

   * @return GetStatusForEmailResponse

   */

  public function GetStatusForEmail(GetStatusForEmail $parameters) {

    return $this->__soapCall('GetStatusForEmail', array($parameters),       array(

            'uri' => 'http://wildwestdomains.com/webservices/',

            'soapaction' => ''

           )

      );

  }



  /**

   * Reassign an email address to a different email plan.

   *

   * @param MoveEmailAccount $parameters

   * @return MoveEmailAccountResponse

   */

  public function MoveEmailAccount(MoveEmailAccount $parameters) {

    return $this->__soapCall('MoveEmailAccount', array($parameters),       array(

            'uri' => 'http://wildwestdomains.com/webservices/',

            'soapaction' => ''

           )

      );

  }



  /**

   * Deletes an email address.

   *

   * @param RemoveEmailAddress $parameters

   * @return RemoveEmailAddressResponse

   */

  public function RemoveEmailAddress(RemoveEmailAddress $parameters) {

    return $this->__soapCall('RemoveEmailAddress', array($parameters),       array(

            'uri' => 'http://wildwestdomains.com/webservices/',

            'soapaction' => ''

           )

      );

  }



  /**

   * Unsubscribe an email address from RIM.

   *

   * @param RemoveRIMAccount $parameters

   * @return RemoveRIMAccountResponse

   */

  public function RemoveRIMAccount(RemoveRIMAccount $parameters) {

    return $this->__soapCall('RemoveRIMAccount', array($parameters),       array(

            'uri' => 'http://wildwestdomains.com/webservices/',

            'soapaction' => ''

           )

      );

  }



  /**

   * Remove a specific SMTP relay fom an email address by the given resource id.

   *

   * @param RemoveSmtpRelay $parameters

   * @return RemoveSmtpRelayResponse

   */

  public function RemoveSmtpRelay(RemoveSmtpRelay $parameters) {

    return $this->__soapCall('RemoveSmtpRelay', array($parameters),       array(

            'uri' => 'http://wildwestdomains.com/webservices/',

            'soapaction' => ''

           )

      );

  }



  /**

   * Change the customer facing description of an email or email forwarding plan.

   *

   * @param RenameEmailPlan $parameters

   * @return RenameEmailPlanResponse

   */

  public function RenameEmailPlan(RenameEmailPlan $parameters) {

    return $this->__soapCall('RenameEmailPlan', array($parameters),       array(

            'uri' => 'http://wildwestdomains.com/webservices/',

            'soapaction' => ''

           )

      );

  }



  /**

   * Create/Update and email/forwarding account’s Auto Responder.

   *

   * @param SetAutoResponder $parameters

   * @return SetAutoResponderResponse

   */

  public function SetAutoResponder(SetAutoResponder $parameters) {

    return $this->__soapCall('SetAutoResponder', array($parameters),       array(

            'uri' => 'http://wildwestdomains.com/webservices/',

            'soapaction' => ''

           )

      );

  }



  /**

   * Create/Update and email/forwarding account.

   *

   * @param SetEmailAccount $parameters

   * @return SetEmailAccountResponse

   */

  public function SetEmailAccount(SetEmailAccount $parameters) {

    return $this->__soapCall('SetEmailAccount', array($parameters),       array(

            'uri' => 'http://wildwestdomains.com/webservices/',

            'soapaction' => ''

           )

      );

  }



  /**

   * Email products management method.

   *

   * @param SetRIMAccount $parameters

   * @return SetRIMAccountResponse

   */

  public function SetRIMAccount(SetRIMAccount $parameters) {

    return $this->__soapCall('SetRIMAccount', array($parameters),       array(

            'uri' => 'http://wildwestdomains.com/webservices/',

            'soapaction' => ''

           )

      );

  }



  /**

   * Email products management method.

   *

   * @param SetSmtpRelays $parameters

   * @return SetSmtpRelaysResponse

   */

  public function SetSmtpRelays(SetSmtpRelays $parameters) {

    return $this->__soapCall('SetSmtpRelays', array($parameters),       array(

            'uri' => 'http://wildwestdomains.com/webservices/',

            'soapaction' => ''

           )

      );

  }



  /**

   * Email products management method.

   *

   * @param TestEmailPassword $parameters

   * @return TestEmailPasswordResponse

   */

  public function TestEmailPassword(TestEmailPassword $parameters) {

    return $this->__soapCall('TestEmailPassword', array($parameters),       array(

            'uri' => 'http://wildwestdomains.com/webservices/',

            'soapaction' => ''

           )

      );

  }



}

//generate guid

function guid(){

    if (function_exists('com_create_guid')){

        return com_create_guid();

    }else{

        mt_srand((double)microtime()*10000);//optional for php 4.2.0 and up.

        $charid = strtoupper(md5(uniqid(rand(), true)));

        $hyphen = chr(45);// "-"

        $uuid = chr(123)// "{"

                .substr($charid, 0, 8).$hyphen

                .substr($charid, 8, 4).$hyphen

                .substr($charid,12, 4).$hyphen

                .substr($charid,16, 4).$hyphen

                .substr($charid,20,12)

                .chr(125);// "}"

        return $uuid;

    }

}





?>