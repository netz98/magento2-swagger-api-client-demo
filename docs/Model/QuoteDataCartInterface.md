# QuoteDataCartInterface

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Cart/quote ID. | 
**created_at** | **string** | Cart creation date and time. Otherwise, null. | [optional] 
**updated_at** | **string** | Cart last update date and time. Otherwise, null. | [optional] 
**converted_at** | **string** | Cart conversion date and time. Otherwise, null. | [optional] 
**is_active** | **bool** | Active status flag value. Otherwise, null. | [optional] 
**is_virtual** | **bool** | Virtual flag value. Otherwise, null. | [optional] 
**items** | [**\Swagger\Client\Model\QuoteDataCartItemInterface[]**](QuoteDataCartItemInterface.md) | Array of items. Otherwise, null. | [optional] 
**items_count** | **int** | Number of different items or products in the cart. Otherwise, null. | [optional] 
**items_qty** | **float** | Total quantity of all cart items. Otherwise, null. | [optional] 
**customer** | [**\Swagger\Client\Model\CustomerDataCustomerInterface**](CustomerDataCustomerInterface.md) |  | 
**billing_address** | [**\Swagger\Client\Model\QuoteDataAddressInterface**](QuoteDataAddressInterface.md) |  | [optional] 
**reserved_order_id** | **int** | Reserved order ID. Otherwise, null. | [optional] 
**orig_order_id** | **int** | Original order ID. Otherwise, null. | [optional] 
**currency** | [**\Swagger\Client\Model\QuoteDataCurrencyInterface**](QuoteDataCurrencyInterface.md) |  | [optional] 
**customer_is_guest** | **bool** | For guest customers, false for logged in customers | [optional] 
**customer_note** | **string** | Notice text | [optional] 
**customer_note_notify** | **bool** | Customer notification flag | [optional] 
**customer_tax_class_id** | **int** | Customer tax class ID. | [optional] 
**store_id** | **int** | Store identifier | 
**extension_attributes** | [**\Swagger\Client\Model\QuoteDataCartExtensionInterface**](QuoteDataCartExtensionInterface.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


