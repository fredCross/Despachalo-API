
# Order

## Structure

`Order`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `sizePackages` | `string` | Required | - | getSizePackages(): string | setSizePackages(string sizePackages): void |
| `amountSecure` | `int` | Required | - | getAmountSecure(): int | setAmountSecure(int amountSecure): void |
| `items` | [`Item[]`](/doc/models/item.md) | Required | - | getItems(): array | setItems(array items): void |

## Example (as JSON)

```json
{
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
```

