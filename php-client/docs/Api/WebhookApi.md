# ChannelEngine\Merchant\ApiClient\WebhookApi

All URIs are relative to https://demo.channelengine.net/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**webhooksCreate()**](WebhookApi.md#webhooksCreate) | **POST** /v2/webhooks | Create Webhook. |
| [**webhooksDelete()**](WebhookApi.md#webhooksDelete) | **DELETE** /v2/webhooks/{webhookName} | Delete Webhook. |
| [**webhooksGetAll()**](WebhookApi.md#webhooksGetAll) | **GET** /v2/webhooks | Get Webhooks. |
| [**webhooksUpdate()**](WebhookApi.md#webhooksUpdate) | **PUT** /v2/webhooks | Update Webhook. |


## `webhooksCreate()`

```php
webhooksCreate($merchantWebhookRequest): \ChannelEngine\Merchant\ApiClient\Model\ApiResponse
```

Create Webhook.

Create a new webhook in the ChannelEngine.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = ChannelEngine\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChannelEngine\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new ChannelEngine\Merchant\ApiClient\Api\WebhookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchantWebhookRequest = new \ChannelEngine\Merchant\ApiClient\Model\MerchantWebhookRequest(); // \ChannelEngine\Merchant\ApiClient\Model\MerchantWebhookRequest

try {
    $result = $apiInstance->webhooksCreate($merchantWebhookRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookApi->webhooksCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchantWebhookRequest** | [**\ChannelEngine\Merchant\ApiClient\Model\MerchantWebhookRequest**](../Model/MerchantWebhookRequest.md)|  | [optional] |

### Return type

[**\ChannelEngine\Merchant\ApiClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `webhooksDelete()`

```php
webhooksDelete($webhookName): \ChannelEngine\Merchant\ApiClient\Model\ApiResponse
```

Delete Webhook.

Delete a webhook based on the webhook name.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = ChannelEngine\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChannelEngine\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new ChannelEngine\Merchant\ApiClient\Api\WebhookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhookName = 'webhookName_example'; // string | The unique name of a webhook you want to delete.

try {
    $result = $apiInstance->webhooksDelete($webhookName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookApi->webhooksDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhookName** | **string**| The unique name of a webhook you want to delete. | |

### Return type

[**\ChannelEngine\Merchant\ApiClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `webhooksGetAll()`

```php
webhooksGetAll(): \ChannelEngine\Merchant\ApiClient\Model\CollectionOfMerchantWebhookResponse
```

Get Webhooks.

Get all webhooks created in the ChannelEngine.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = ChannelEngine\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChannelEngine\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new ChannelEngine\Merchant\ApiClient\Api\WebhookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->webhooksGetAll();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookApi->webhooksGetAll: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ChannelEngine\Merchant\ApiClient\Model\CollectionOfMerchantWebhookResponse**](../Model/CollectionOfMerchantWebhookResponse.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `webhooksUpdate()`

```php
webhooksUpdate($merchantWebhookRequest): \ChannelEngine\Merchant\ApiClient\Model\ApiResponse
```

Update Webhook.

Update a webhook in the ChannelEngine.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = ChannelEngine\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChannelEngine\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new ChannelEngine\Merchant\ApiClient\Api\WebhookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchantWebhookRequest = new \ChannelEngine\Merchant\ApiClient\Model\MerchantWebhookRequest(); // \ChannelEngine\Merchant\ApiClient\Model\MerchantWebhookRequest

try {
    $result = $apiInstance->webhooksUpdate($merchantWebhookRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookApi->webhooksUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchantWebhookRequest** | [**\ChannelEngine\Merchant\ApiClient\Model\MerchantWebhookRequest**](../Model/MerchantWebhookRequest.md)|  | [optional] |

### Return type

[**\ChannelEngine\Merchant\ApiClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
