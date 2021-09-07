
# Client Class Documentation

The following parameters are configurable for the API Client:

| Parameter | Type | Description |
|  --- | --- | --- |
| `environment` | Environment | The API environment. <br> **Default: `Environment.SERVIDORES`** |
| `timeout` | `int` | Timeout for API calls |

The API client can be initialized as follows:

```php
$client = new APIEXTERNALLib\APIEXTERNALClient([
    // Set authentication parameters
    'accessToken' => 'AccessToken',

    // Set the environment
    'environment' => 'Servidores',
]);
```

## API-EXTERNAL Client

The gateway for the SDK. This class acts as a factory for the Controllers and also holds the configuration of the SDK.

## Controllers

| Name | Description |
|  --- | --- |
| getWareHouseController() | Gets WareHouseController |
| getDeliveryController() | Gets DeliveryController |
| getTrackingController() | Gets TrackingController |

