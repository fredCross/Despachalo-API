
# CREARCOMPLETEDEVREQUEST

## Structure

`CREARCOMPLETEDEVREQUEST`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `idBusiness` | `int` | Required | - | getIdBusiness(): int | setIdBusiness(int idBusiness): void |
| `idWarehouse` | `string` | Required | - | getIdWarehouse(): string | setIdWarehouse(string idWarehouse): void |
| `referenceNumber` | `string` | Required | - | getReferenceNumber(): string | setReferenceNumber(string referenceNumber): void |
| `shopId` | `string` | Required | - | getShopId(): string | setShopId(string shopId): void |
| `customerIdentifier` | `string` | Required | - | getCustomerIdentifier(): string | setCustomerIdentifier(string customerIdentifier): void |
| `customerName` | `string` | Required | - | getCustomerName(): string | setCustomerName(string customerName): void |
| `customerEmail` | `string` | Required | - | getCustomerEmail(): string | setCustomerEmail(string customerEmail): void |
| `customerPhone` | `string` | Required | - | getCustomerPhone(): string | setCustomerPhone(string customerPhone): void |
| `address` | [`Address1`](/doc/models/address-1.md) | Required | - | getAddress(): Address1 | setAddress(Address1 address): void |
| `order` | [`Order1`](/doc/models/order-1.md) | Required | - | getOrder(): Order1 | setOrder(Order1 order): void |
| `deliveryType` | `string` | Required | - | getDeliveryType(): string | setDeliveryType(string deliveryType): void |
| `tags` | `string` | Required | - | getTags(): string | setTags(string tags): void |

## Example (as JSON)

```json
{
  "id_business": 8,
  "id_warehouse": "BOD043",
  "reference_number": "10001",
  "shop_id": "ecommerce",
  "customer_identifier": "q@a.cl",
  "customer_name": "fasdf",
  "customer_email": "q@a.cl",
  "customer_phone": "992509021",
  "address": {
    "region": "Region",
    "city": "City",
    "full_address": "Full Address",
    "type_adress": "Type Adress",
    "note": "Note"
  },
  "order": {
    "number_packages": 1,
    "size_packages": "M",
    "amount_secure": 100,
    "items": [
      {
        "identifier": "x",
        "name": "y",
        "quantity": 1
      },
      {
        "identifier": "D",
        "name": "M",
        "quantity": 2
      }
    ]
  },
  "delivery_type": "flex",
  "tags": "eCommerce, Flex"
}
```

