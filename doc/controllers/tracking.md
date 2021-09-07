# Tracking

```php
$trackingController = $client->getTrackingController();
```

## Class Name

`TrackingController`


# Seguimiento De Ordenes

```php
function seguimientoDeOrdenes(string $cacheControl): void
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `cacheControl` | `string` | Header, Required | - |

## Response Type

`void`

## Example Usage

```php
$cacheControl = 'no-cache';

$trackingController->seguimientoDeOrdenes($cacheControl);
```

