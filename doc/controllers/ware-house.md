# Ware House

```php
$wareHouseController = $client->getWareHouseController();
```

## Class Name

`WareHouseController`

## Methods

* [Listar](/doc/controllers/ware-house.md#listar)
* [CREAR](/doc/controllers/ware-house.md#crear)
* [DELETE](/doc/controllers/ware-house.md#delete)
* [EDITAR Copy](/doc/controllers/ware-house.md#editar-copy)


# Listar

```php
function listar(): void
```

## Response Type

`void`

## Example Usage

```php
$wareHouseController->listar();
```


# CREAR

```php
function cREAR(string $cacheControl, CREARREQUEST $body): void
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `cacheControl` | `string` | Header, Required | - |
| `body` | [`CREARREQUEST`](/doc/models/crearrequest.md) | Body, Required | - |

## Response Type

`void`

## Example Usage

```php
$cacheControl = 'no-cache';
$body_idBusiness = 116;
$body_name = 'priuena';
$body_code = 'BOD0473';
$body_adress = 'juan pinto';
$body_adressNumber = '112';
$body_reference = 'casa f';
$body_city = 'la grnaj';
$body_region = 'region metro';
$body = new Models\CREARREQUEST(
    $body_idBusiness,
    $body_name,
    $body_code,
    $body_adress,
    $body_adressNumber,
    $body_reference,
    $body_city,
    $body_region
);

$wareHouseController->cREAR($cacheControl, $body);
```


# DELETE

```php
function dELETE(string $cacheControl, DELETEREQUEST $body): void
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `cacheControl` | `string` | Header, Required | - |
| `body` | [`DELETEREQUEST`](/doc/models/deleterequest.md) | Body, Required | - |

## Response Type

`void`

## Example Usage

```php
$cacheControl = 'no-cache';
$body_idBusiness = 8;
$body_name = 'priuenassss';
$body_code = 'BOD043';
$body_adress = 'juan pinto';
$body_adressNumber = '112';
$body_reference = 'casa f';
$body_city = '320';
$body_region = '13';
$body_country = 'CL';
$body_idContact = 1;
$body_idCreator = '1';
$body_dateUp = '2021-03-16 04:11:33';
$body_dateLastUpdate = '2021-08-10 12:23:19';
$body = new Models\DELETEREQUEST(
    $body_idBusiness,
    $body_name,
    $body_code,
    $body_adress,
    $body_adressNumber,
    $body_reference,
    $body_city,
    $body_region,
    $body_country,
    $body_idContact,
    $body_idCreator,
    $body_dateUp,
    $body_dateLastUpdate
);
$body->setDateDown('date_down4');

$wareHouseController->dELETE($cacheControl, $body);
```


# EDITAR Copy

```php
function eDITARCopy(string $cacheControl, EDITARCopyRequest $body): void
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `cacheControl` | `string` | Header, Required | - |
| `body` | [`EDITARCopyRequest`](/doc/models/editar-copy-request.md) | Body, Required | - |

## Response Type

`void`

## Example Usage

```php
$cacheControl = 'no-cache';
$body_idBusiness = 116;
$body_name = 'priuena';
$body_code = 'BOD0473';
$body_adress = 'juan pinto';
$body_adressNumber = '112';
$body_reference = 'casa f';
$body_city = 'la grnaj';
$body_region = 'region metro';
$body = new Models\EDITARCopyRequest(
    $body_idBusiness,
    $body_name,
    $body_code,
    $body_adress,
    $body_adressNumber,
    $body_reference,
    $body_city,
    $body_region
);

$wareHouseController->eDITARCopy($cacheControl, $body);
```

