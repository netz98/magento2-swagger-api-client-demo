# CustomerDataAddressInterface

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | ID | [optional] 
**customer_id** | **int** | Customer ID | [optional] 
**region** | [**\Swagger\Client\Model\CustomerDataRegionInterface**](CustomerDataRegionInterface.md) |  | [optional] 
**region_id** | **int** | Region ID | [optional] 
**country_id** | **string** | Country code in ISO_3166-2 format | [optional] 
**street** | **string[]** | Street | [optional] 
**company** | **string** | Company | [optional] 
**telephone** | **string** | Telephone number | [optional] 
**fax** | **string** | Fax number | [optional] 
**postcode** | **string** | Postcode | [optional] 
**city** | **string** | City name | [optional] 
**firstname** | **string** | First name | [optional] 
**lastname** | **string** | Last name | [optional] 
**middlename** | **string** | Middle name | [optional] 
**prefix** | **string** | Prefix | [optional] 
**suffix** | **string** | Suffix | [optional] 
**vat_id** | **string** | Vat id | [optional] 
**default_shipping** | **bool** | If this address is default shipping address. | [optional] 
**default_billing** | **bool** | If this address is default billing address | [optional] 
**extension_attributes** | [**\Swagger\Client\Model\CustomerDataAddressExtensionInterface**](CustomerDataAddressExtensionInterface.md) |  | [optional] 
**custom_attributes** | [**\Swagger\Client\Model\FrameworkAttributeInterface[]**](FrameworkAttributeInterface.md) | Custom attributes values. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


