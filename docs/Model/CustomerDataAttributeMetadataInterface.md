# CustomerDataAttributeMetadataInterface

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**frontend_input** | **string** | HTML for input element. | 
**input_filter** | **string** | Template used for input (e.g. \&quot;date\&quot;) | 
**store_label** | **string** | Label of the store. | 
**validation_rules** | [**\Swagger\Client\Model\CustomerDataValidationRuleInterface[]**](CustomerDataValidationRuleInterface.md) | Validation rules. | 
**multiline_count** | **int** | Of lines of the attribute value. | 
**visible** | **bool** | Attribute is visible on frontend. | 
**required** | **bool** | Attribute is required. | 
**data_model** | **string** | Data model for attribute. | 
**options** | [**\Swagger\Client\Model\CustomerDataOptionInterface[]**](CustomerDataOptionInterface.md) | Options of the attribute (key &#x3D;&gt; value pairs for select) | 
**frontend_class** | **string** | Class which is used to display the attribute on frontend. | 
**user_defined** | **bool** | Current attribute has been defined by a user. | 
**sort_order** | **int** | Attributes sort order. | 
**frontend_label** | **string** | Label which supposed to be displayed on frontend. | 
**note** | **string** | The note attribute for the element. | 
**system** | **bool** | This is a system attribute. | 
**backend_type** | **string** | Backend type. | 
**is_used_in_grid** | **bool** | It is used in customer grid | [optional] 
**is_visible_in_grid** | **bool** | It is visible in customer grid | [optional] 
**is_filterable_in_grid** | **bool** | It is filterable in customer grid | [optional] 
**is_searchable_in_grid** | **bool** | It is searchable in customer grid | [optional] 
**attribute_code** | **string** | Code of the attribute. | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


