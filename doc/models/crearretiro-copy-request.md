
# CREARRETIRO Copy Request

## Structure

`CREARRETIROCopyRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `idBusiness` | `string` | Required | - | getIdBusiness(): string | setIdBusiness(string idBusiness): void |
| `numOrder` | `string` | Required | - | getNumOrder(): string | setNumOrder(string numOrder): void |
| `fullName` | `string` | Required | - | getFullName(): string | setFullName(string fullName): void |
| `email` | `string` | Required | - | getEmail(): string | setEmail(string email): void |
| `cellphone` | `string` | Required | - | getCellphone(): string | setCellphone(string cellphone): void |
| `shippingType` | `string` | Required | - | getShippingType(): string | setShippingType(string shippingType): void |
| `region` | `string` | Required | - | getRegion(): string | setRegion(string region): void |
| `comuna` | `string` | Required | - | getComuna(): string | setComuna(string comuna): void |
| `street` | `string` | Required | - | getStreet(): string | setStreet(string street): void |
| `reference` | `string` | Required | - | getReference(): string | setReference(string reference): void |

## Example (as JSON)

```json
{
  "id_business": "7",
  "num_order": "01000002",
  "full_name": "Freddy Cruz",
  "email": "a@a.cl",
  "cellphone": "1111111111",
  "shipping_type": "S",
  "region": "Region Metropolitana",
  "comuna": "La Florida",
  "street": "Walker Martinez 3611, Casa 161",
  "reference": "Al frente del Tottus"
}
```

