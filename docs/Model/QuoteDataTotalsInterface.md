# QuoteDataTotalsInterface

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**grand_total** | **float** | Grand total in quote currency | [optional] 
**base_grand_total** | **float** | Grand total in base currency | [optional] 
**subtotal** | **float** | Subtotal in quote currency | [optional] 
**base_subtotal** | **float** | Subtotal in base currency | [optional] 
**discount_amount** | **float** | Discount amount in quote currency | [optional] 
**base_discount_amount** | **float** | Discount amount in base currency | [optional] 
**subtotal_with_discount** | **float** | Subtotal in quote currency with applied discount | [optional] 
**base_subtotal_with_discount** | **float** | Subtotal in base currency with applied discount | [optional] 
**shipping_amount** | **float** | Shipping amount in quote currency | [optional] 
**base_shipping_amount** | **float** | Shipping amount in base currency | [optional] 
**shipping_discount_amount** | **float** | Shipping discount amount in quote currency | [optional] 
**base_shipping_discount_amount** | **float** | Shipping discount amount in base currency | [optional] 
**tax_amount** | **float** | Tax amount in quote currency | [optional] 
**base_tax_amount** | **float** | Tax amount in base currency | [optional] 
**weee_tax_applied_amount** | **float** | Item weee tax applied amount in quote currency. | 
**shipping_tax_amount** | **float** | Shipping tax amount in quote currency | [optional] 
**base_shipping_tax_amount** | **float** | Shipping tax amount in base currency | [optional] 
**subtotal_incl_tax** | **float** | Subtotal including tax in quote currency | [optional] 
**base_subtotal_incl_tax** | **float** | Subtotal including tax in base currency | [optional] 
**shipping_incl_tax** | **float** | Shipping including tax in quote currency | [optional] 
**base_shipping_incl_tax** | **float** | Shipping including tax in base currency | [optional] 
**base_currency_code** | **string** | Base currency code | [optional] 
**quote_currency_code** | **string** | Quote currency code | [optional] 
**coupon_code** | **string** | Applied coupon code | [optional] 
**items_qty** | **int** | Items qty | [optional] 
**items** | [**\Swagger\Client\Model\QuoteDataTotalsItemInterface[]**](QuoteDataTotalsItemInterface.md) | Totals by items | [optional] 
**total_segments** | [**\Swagger\Client\Model\QuoteDataTotalSegmentInterface[]**](QuoteDataTotalSegmentInterface.md) | Dynamically calculated totals | 
**extension_attributes** | [**\Swagger\Client\Model\QuoteDataTotalsExtensionInterface**](QuoteDataTotalsExtensionInterface.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


