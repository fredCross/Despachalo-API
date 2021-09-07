
# Order 1

## Structure

`Order1`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `numberPackages` | `int` | Required | - | getNumberPackages(): int | setNumberPackages(int numberPackages): void |
| `sizePackages` | `string` | Required | - | getSizePackages(): string | setSizePackages(string sizePackages): void |
| `amountSecure` | `int` | Required | - | getAmountSecure(): int | setAmountSecure(int amountSecure): void |
| `items` | [`Item1[]`](/doc/models/item-1.md) | Required | - | getItems(): array | setItems(array items): void |

## Example (as JSON)

```json
{
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
}
```

