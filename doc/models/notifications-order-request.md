
# Notifications Order Request

## Structure

`NotificationsOrderRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `resource` | `string` | Required | - | getResource(): string | setResource(string resource): void |
| `userId` | `string` | Required | - | getUserId(): string | setUserId(string userId): void |
| `topic` | `string` | Required | - | getTopic(): string | setTopic(string topic): void |
| `applicationId` | `string` | Required | - | getApplicationId(): string | setApplicationId(string applicationId): void |
| `attempts` | `string` | Required | - | getAttempts(): string | setAttempts(string attempts): void |
| `sent` | `string` | Required | - | getSent(): string | setSent(string sent): void |
| `received` | `string` | Required | - | getReceived(): string | setReceived(string received): void |

## Example (as JSON)

```json
{
  "resource": "/orders/4450424746",
  "user_id": "246513922",
  "topic": "orders_v2",
  "application_id": "2155587983950867",
  "attempts": "1",
  "sent": "2020-05-19T16:33:18.111Z",
  "received": "2020-05-19T16:33:18.107Z"
}
```

