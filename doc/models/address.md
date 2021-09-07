
# Address

## Structure

`Address`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `region` | `string` | Required | - | getRegion(): string | setRegion(string region): void |
| `city` | `string` | Required | - | getCity(): string | setCity(string city): void |
| `fullAddress` | `string` | Required | - | getFullAddress(): string | setFullAddress(string fullAddress): void |
| `latlong` | `string` | Required | - | getLatlong(): string | setLatlong(string latlong): void |
| `typeAdress` | `string` | Required | - | getTypeAdress(): string | setTypeAdress(string typeAdress): void |
| `notes` | `string` | Required | - | getNotes(): string | setNotes(string notes): void |

## Example (as JSON)

```json
{
  "region": "Región Metropolitana",
  "city": "City",
  "full_address": "Full Address",
  "latlong": "3000,5111",
  "type_adress": "Type Adress",
  "notes": "asasasas"
}
```

