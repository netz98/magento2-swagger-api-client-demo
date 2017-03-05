# CatalogInventoryDataStockItemInterface

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**item_id** | **int** |  | [optional] 
**product_id** | **int** |  | [optional] 
**stock_id** | **int** | Stock identifier | [optional] 
**qty** | **float** |  | 
**is_in_stock** | **bool** | Stock Availability | 
**is_qty_decimal** | **bool** |  | 
**show_default_notification_message** | **bool** |  | 
**use_config_min_qty** | **bool** |  | 
**min_qty** | **float** | Minimal quantity available for item status in stock | 
**use_config_min_sale_qty** | **int** |  | 
**min_sale_qty** | **float** | Minimum Qty Allowed in Shopping Cart or NULL when there is no limitation | 
**use_config_max_sale_qty** | **bool** |  | 
**max_sale_qty** | **float** | Maximum Qty Allowed in Shopping Cart data wrapper | 
**use_config_backorders** | **bool** |  | 
**backorders** | **int** | Backorders status | 
**use_config_notify_stock_qty** | **bool** |  | 
**notify_stock_qty** | **float** | Notify for Quantity Below data wrapper | 
**use_config_qty_increments** | **bool** |  | 
**qty_increments** | **float** | Quantity Increments data wrapper | 
**use_config_enable_qty_inc** | **bool** |  | 
**enable_qty_increments** | **bool** | Whether Quantity Increments is enabled | 
**use_config_manage_stock** | **bool** |  | 
**manage_stock** | **bool** | Can Manage Stock | 
**low_stock_date** | **string** |  | 
**is_decimal_divided** | **bool** |  | 
**stock_status_changed_auto** | **int** |  | 
**extension_attributes** | [**\Swagger\Client\Model\CatalogInventoryDataStockItemExtensionInterface**](CatalogInventoryDataStockItemExtensionInterface.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


