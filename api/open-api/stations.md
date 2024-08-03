# Fetch stations

This endpoint is used to fetch all stations, using route

```http
POST /api/weather/stations
```

| Parameter   | Type | Description                   |
|:------------| :--- |:------------------------------|
| `api_token` | `string` | **Required**. User auth token |

**Note**: This API is supported in sample version **(GET)**:

```http
GET /api/samples/weather/stations
```

## Status Codes

API returns the following status codes in its API:

| Status Code | Description                                    |
|:------------|:-----------------------------------------------|
| 0000        | **OK**                                         |
| 1000        | **Error**: Global error.                       |

## Example of success response

For input data given as:

| Key         | value       |
|:------------|:------------|
| `api_token` | SHA256-HASH |

```json
{
    "code": "0000",
    "message": "Success",
    "data": [
        {
            "id": 1,
            "title": "Velešići",
            "description": "Mjerna stanica ulica Muhameda ef. Pandže"
        },
        {
            "id": 2,
            "title": "Ilidža",
            "description": "Mjerna stanica Ilidža"
        },
        {
            "id": 3,
            "title": "Evropska kuća kulture i nacionalnih manjina",
            "description": "Mjerna stanica Evropska kuća kulture i nacionalnih manjina"
        }
    ]
}
```
