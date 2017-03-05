# DownloadableDataLinkInterface

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Sample(or link) id | [optional] 
**title** | **string** |  | [optional] 
**sort_order** | **int** |  | 
**is_shareable** | **int** | Shareable status | 
**price** | **float** | Price | 
**number_of_downloads** | **int** | Of downloads per user | [optional] 
**link_type** | **string** |  | 
**link_file** | **string** | relative file path | [optional] 
**link_file_content** | [**\Swagger\Client\Model\DownloadableDataFileContentInterface**](DownloadableDataFileContentInterface.md) |  | [optional] 
**link_url** | **string** | Link url or null when type is &#39;file&#39; | [optional] 
**sample_type** | **string** |  | 
**sample_file** | **string** | relative file path | [optional] 
**sample_file_content** | [**\Swagger\Client\Model\DownloadableDataFileContentInterface**](DownloadableDataFileContentInterface.md) |  | [optional] 
**sample_url** | **string** | file URL | [optional] 
**extension_attributes** | [**\Swagger\Client\Model\DownloadableDataLinkExtensionInterface**](DownloadableDataLinkExtensionInterface.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


