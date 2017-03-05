# TaxDataOrderTaxDetailsItemInterface

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | Type (shipping, product, weee, gift wrapping, etc) | [optional] 
**item_id** | **int** | Item id if this item is a product | [optional] 
**associated_item_id** | **int** | Associated item id if this item is associated with another item, null otherwise | [optional] 
**applied_taxes** | [**\Swagger\Client\Model\TaxDataOrderTaxDetailsAppliedTaxInterface[]**](TaxDataOrderTaxDetailsAppliedTaxInterface.md) | Applied taxes | [optional] 
**extension_attributes** | [**\Swagger\Client\Model\TaxDataOrderTaxDetailsItemExtensionInterface**](TaxDataOrderTaxDetailsItemExtensionInterface.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


