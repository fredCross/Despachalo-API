# Delivery

```php
$deliveryController = $client->getDeliveryController();
```

## Class Name

`DeliveryController`

## Methods

* [Listar Ordenes](/doc/controllers/delivery.md#listar-ordenes)
* [Crear Ordenes](/doc/controllers/delivery.md#crear-ordenes)


# Listar Ordenes

```php
function listarOrdenes(string $cacheControl): void
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

$deliveryController->listarOrdenes($cacheControl);
```


# Crear Ordenes

```php
function crearOrdenes(string $cacheControl, CrearOrdenesRequest $body): void
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `cacheControl` | `string` | Header, Required | - |
| `body` | [`CrearOrdenesRequest`](/doc/models/crear-ordenes-request.md) | Body, Required | - |

## Response Type

`void`

## Example Usage

```php
$cacheControl = 'no-cache';
$body_referenceNumber = 'reference_number2';
$body_customerEmail = 'customer_email0';
$body_tags = 'tags6';
$body_address_region = 'Región Metropolitana';
$body_address_city = 'City';
$body_address_fullAddress = 'Full Address';
$body_address_latlong = '3000,5111';
$body_address_typeAdress = 'Type Adress';
$body_address_notes = 'asasasas';
$body_address = new Models\Address(
    $body_address_region,
    $body_address_city,
    $body_address_fullAddress,
    $body_address_latlong,
    $body_address_typeAdress,
    $body_address_notes
);
$body_order_sizePackages = 'size_packages2';
$body_order_amountSecure = 202;
$body_order_items = [];

$body_order_items_0_identifier = 'x';
$body_order_items_0_name = 'y';
$body_order_items_0_qty = '1';
$body_order_items[0] = new Models\Item(
    $body_order_items_0_identifier,
    $body_order_items_0_name,
    $body_order_items_0_qty
);
$body_order_items[0]->setLink('https://simple.ripley.cl/coche-travel-system-bebesit-quantum-2000371599941p');
$body_order_items[0]->setPrice(10000);

$body_order_items_1_identifier = 'x';
$body_order_items_1_name = 'y';
$body_order_items_1_qty = '1';
$body_order_items[1] = new Models\Item(
    $body_order_items_1_identifier,
    $body_order_items_1_name,
    $body_order_items_1_qty
);
$body_order_items[1]->setLink('https://simple.ripley.cl/coche-travel-system-bebesit-quantum-2000371599941p');
$body_order_items[1]->setPrice(10000);

$body_order_items_2_identifier = 'x';
$body_order_items_2_name = 'y';
$body_order_items_2_qty = '1';
$body_order_items[2] = new Models\Item(
    $body_order_items_2_identifier,
    $body_order_items_2_name,
    $body_order_items_2_qty
);
$body_order_items[2]->setLink('https://simple.ripley.cl/coche-travel-system-bebesit-quantum-2000371599941p');
$body_order_items[2]->setPrice(10000);

$body_order = new Models\Order(
    $body_order_sizePackages,
    $body_order_amountSecure,
    $body_order_items
);
$body = new Models\CrearOrdenesRequest(
    $body_referenceNumber,
    $body_customerEmail,
    $body_tags,
    $body_address,
    $body_order
);

$deliveryController->crearOrdenes($cacheControl, $body);
```

