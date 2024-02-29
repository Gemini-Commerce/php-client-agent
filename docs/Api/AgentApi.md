# GeminiCommerce\Agent\AgentApi

All URIs are relative to https://agent.api.gogemini.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**agentCreateAgent()**](AgentApi.md#agentCreateAgent) | **POST** /v1/{tenantId}/agent/create |  |
| [**agentGetAgent()**](AgentApi.md#agentGetAgent) | **GET** /v1/{tenantId}/agent/{id} |  |
| [**agentListAgents()**](AgentApi.md#agentListAgents) | **POST** /v1/{tenantId}/agent/list/page-size/{pageSize} |  |
| [**agentUpdateAgent()**](AgentApi.md#agentUpdateAgent) | **PUT** /v1/{tenantId}/agent/{id} |  |


## `agentCreateAgent()`

```php
agentCreateAgent($tenant_id, $body): \GeminiCommerce\Agent\Model\AgentAgentEntity
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = GeminiCommerce\Agent\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GeminiCommerce\Agent\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new GeminiCommerce\Agent\Api\AgentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$body = new \GeminiCommerce\Agent\Model\AgentCreateAgentRequest(); // \GeminiCommerce\Agent\Model\AgentCreateAgentRequest

try {
    $result = $apiInstance->agentCreateAgent($tenant_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentApi->agentCreateAgent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **body** | [**\GeminiCommerce\Agent\Model\AgentCreateAgentRequest**](../Model/AgentCreateAgentRequest.md)|  | |

### Return type

[**\GeminiCommerce\Agent\Model\AgentAgentEntity**](../Model/AgentAgentEntity.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `agentGetAgent()`

```php
agentGetAgent($tenant_id, $id): \GeminiCommerce\Agent\Model\AgentAgentEntity
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = GeminiCommerce\Agent\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GeminiCommerce\Agent\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new GeminiCommerce\Agent\Api\AgentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$id = 'id_example'; // string

try {
    $result = $apiInstance->agentGetAgent($tenant_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentApi->agentGetAgent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **id** | **string**|  | |

### Return type

[**\GeminiCommerce\Agent\Model\AgentAgentEntity**](../Model/AgentAgentEntity.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `agentListAgents()`

```php
agentListAgents($tenant_id, $page_size, $body): \GeminiCommerce\Agent\Model\AgentListResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = GeminiCommerce\Agent\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GeminiCommerce\Agent\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new GeminiCommerce\Agent\Api\AgentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$page_size = 56; // int
$body = new \GeminiCommerce\Agent\Model\AgentListAgentsRequest(); // \GeminiCommerce\Agent\Model\AgentListAgentsRequest

try {
    $result = $apiInstance->agentListAgents($tenant_id, $page_size, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentApi->agentListAgents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **page_size** | **int**|  | |
| **body** | [**\GeminiCommerce\Agent\Model\AgentListAgentsRequest**](../Model/AgentListAgentsRequest.md)|  | |

### Return type

[**\GeminiCommerce\Agent\Model\AgentListResponse**](../Model/AgentListResponse.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `agentUpdateAgent()`

```php
agentUpdateAgent($tenant_id, $id, $body): \GeminiCommerce\Agent\Model\AgentAgentEntity
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = GeminiCommerce\Agent\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GeminiCommerce\Agent\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new GeminiCommerce\Agent\Api\AgentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$id = 'id_example'; // string
$body = new \GeminiCommerce\Agent\Model\AgentUpdateAgentRequest(); // \GeminiCommerce\Agent\Model\AgentUpdateAgentRequest

try {
    $result = $apiInstance->agentUpdateAgent($tenant_id, $id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentApi->agentUpdateAgent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **id** | **string**|  | |
| **body** | [**\GeminiCommerce\Agent\Model\AgentUpdateAgentRequest**](../Model/AgentUpdateAgentRequest.md)|  | |

### Return type

[**\GeminiCommerce\Agent\Model\AgentAgentEntity**](../Model/AgentAgentEntity.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
