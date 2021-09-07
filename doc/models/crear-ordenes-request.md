
# Crear Ordenes Request

## Structure

`CrearOrdenesRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `referenceNumber` | `string` | Required | - | getReferenceNumber(): string | setReferenceNumber(string referenceNumber): void |
| `customerEmail` | `string` | Required | - | getCustomerEmail(): string | setCustomerEmail(string customerEmail): void |
| `tags` | `string` | Required | - | getTags(): string | setTags(string tags): void |
| `address` | [`Address`](/doc/models/address.md) | Required | - | getAddress(): Address | setAddress(Address address): void |
| `order` | [`Order`](/doc/models/order.md) | Required | - | getOrder(): Order | setOrder(Order order): void |

## Example (as JSON)

```json
{
  "reference_number": null,
  "customer_email": null,
  "tags": null,
  "address": {
    "region": "Región Metropolitana",
    "city": "City",
    "full_address": "Full Address",
    "latlong": "3000,5111",
    "type_adress": "Type Adress",
    "notes": "asasasas"
  },
  "order": {
    "size_packages": null,
    "amount_secure": null,
    "items": {
      "identifier": "x",
      "name": "y",
      "qty": "1",
      "link": "https://simple.ripley.cl/coche-travel-system-bebesit-quantum-2000371599941p",
      "price": 10000
    }
  }
}
```

