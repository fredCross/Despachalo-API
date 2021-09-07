
# Item

## Structure

`Item`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `identifier` | `string` | Required | - | getIdentifier(): string | setIdentifier(string identifier): void |
| `name` | `string` | Required | - | getName(): string | setName(string name): void |
| `qty` | `string` | Required | - | getQty(): string | setQty(string qty): void |
| `link` | `?string` | Optional | - | getLink(): ?string | setLink(?string link): void |
| `price` | `?int` | Optional | - | getPrice(): ?int | setPrice(?int price): void |

## Example (as JSON)

```json
{
  "identifier": "x",
  "name": "y",
  "qty": "1",
  "link": "https://simple.ripley.cl/coche-travel-system-bebesit-quantum-2000371599941p",
  "price": 10000
}
```

