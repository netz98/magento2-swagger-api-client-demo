# SalesDataShipmentInterface

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**billing_address_id** | **int** | Billing address ID. | [optional] 
**created_at** | **string** | Created-at timestamp. | [optional] 
**customer_id** | **int** | Customer ID. | [optional] 
**email_sent** | **int** | Email-sent flag value. | [optional] 
**entity_id** | **int** | Shipment ID. | [optional] 
**increment_id** | **string** | Increment ID. | [optional] 
**order_id** | **int** | Order ID. | 
**packages** | [**\Swagger\Client\Model\SalesDataShipmentPackageInterface[]**](SalesDataShipmentPackageInterface.md) | Array of packages, if any. Otherwise, null. | [optional] 
**shipment_status** | **int** | Shipment status. | [optional] 
**shipping_address_id** | **int** | Shipping address ID. | [optional] 
**shipping_label** | **string** | Shipping label. | [optional] 
**store_id** | **int** | Store ID. | [optional] 
**total_qty** | **float** | Total quantity. | [optional] 
**total_weight** | **float** | Total weight. | [optional] 
**updated_at** | **string** | Updated-at timestamp. | [optional] 
**items** | [**\Swagger\Client\Model\SalesDataShipmentItemInterface[]**](SalesDataShipmentItemInterface.md) | Array of items. | 
**tracks** | [**\Swagger\Client\Model\SalesDataShipmentTrackInterface[]**](SalesDataShipmentTrackInterface.md) | Array of tracks. | 
**comments** | [**\Swagger\Client\Model\SalesDataShipmentCommentInterface[]**](SalesDataShipmentCommentInterface.md) | Array of comments. | 
**extension_attributes** | [**\Swagger\Client\Model\SalesDataShipmentExtensionInterface**](SalesDataShipmentExtensionInterface.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


