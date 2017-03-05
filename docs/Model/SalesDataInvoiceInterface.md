# SalesDataInvoiceInterface

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**base_currency_code** | **string** | Base currency code. | [optional] 
**base_discount_amount** | **float** | Base discount amount. | [optional] 
**base_grand_total** | **float** | Base grand total. | [optional] 
**base_discount_tax_compensation_amount** | **float** | Base discount tax compensation amount. | [optional] 
**base_shipping_amount** | **float** | Base shipping amount. | [optional] 
**base_shipping_discount_tax_compensation_amnt** | **float** | Base shipping discount tax compensation amount. | [optional] 
**base_shipping_incl_tax** | **float** | Base shipping including tax. | [optional] 
**base_shipping_tax_amount** | **float** | Base shipping tax amount. | [optional] 
**base_subtotal** | **float** | Base subtotal. | [optional] 
**base_subtotal_incl_tax** | **float** | Base subtotal including tax. | [optional] 
**base_tax_amount** | **float** | Base tax amount. | [optional] 
**base_total_refunded** | **float** | Base total refunded. | [optional] 
**base_to_global_rate** | **float** | Base-to-global rate. | [optional] 
**base_to_order_rate** | **float** | Base-to-order rate. | [optional] 
**billing_address_id** | **int** | Billing address ID. | [optional] 
**can_void_flag** | **int** | Can void flag value. | [optional] 
**created_at** | **string** | Created-at timestamp. | [optional] 
**discount_amount** | **float** | Discount amount. | [optional] 
**discount_description** | **string** | Discount description. | [optional] 
**email_sent** | **int** | Email-sent flag value. | [optional] 
**entity_id** | **int** | Invoice ID. | [optional] 
**global_currency_code** | **string** | Global currency code. | [optional] 
**grand_total** | **float** | Grand total. | [optional] 
**discount_tax_compensation_amount** | **float** | Discount tax compensation amount. | [optional] 
**increment_id** | **string** | Increment ID. | [optional] 
**is_used_for_refund** | **int** | Is-used-for-refund flag value. | [optional] 
**order_currency_code** | **string** | Order currency code. | [optional] 
**order_id** | **int** | Order ID. | 
**shipping_address_id** | **int** | Shipping address ID. | [optional] 
**shipping_amount** | **float** | Shipping amount. | [optional] 
**shipping_discount_tax_compensation_amount** | **float** | Shipping discount tax compensation amount. | [optional] 
**shipping_incl_tax** | **float** | Shipping including tax. | [optional] 
**shipping_tax_amount** | **float** | Shipping tax amount. | [optional] 
**state** | **int** | State. | [optional] 
**store_currency_code** | **string** | Store currency code. | [optional] 
**store_id** | **int** | Store ID. | [optional] 
**store_to_base_rate** | **float** | Store-to-base rate. | [optional] 
**store_to_order_rate** | **float** | Store-to-order rate. | [optional] 
**subtotal** | **float** | Subtotal. | [optional] 
**subtotal_incl_tax** | **float** | Subtotal including tax. | [optional] 
**tax_amount** | **float** | Tax amount. | [optional] 
**total_qty** | **float** | Total quantity. | 
**transaction_id** | **string** | Transaction ID. | [optional] 
**updated_at** | **string** | Updated-at timestamp. | [optional] 
**items** | [**\Swagger\Client\Model\SalesDataInvoiceItemInterface[]**](SalesDataInvoiceItemInterface.md) | Array of invoice items. | 
**comments** | [**\Swagger\Client\Model\SalesDataInvoiceCommentInterface[]**](SalesDataInvoiceCommentInterface.md) | Array of any invoice comments. Otherwise, null. | [optional] 
**extension_attributes** | [**\Swagger\Client\Model\SalesDataInvoiceExtensionInterface**](SalesDataInvoiceExtensionInterface.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


