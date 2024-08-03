# Fetch humidity data

This endpoint is used to fetch humidity samples, using route

```http
POST /api/weather/humidity
```

| Parameter   | Type | Description                                                |
|:------------| :--- |:-----------------------------------------------------------|
| `api_token` | `string` | **Required**. User auth token                              |
| `interval`  | `string` | **Optional**. Time interval; Default 15 minutes            |
| `hours`     | `string` | **Optional**. Period of time; Default 24 hours             |
| `station`   | `string` | **Optional**. Measuring station; Default gives all of them |

**Note**: This API is supported in sample version **(No authorisation needed!)**:

```http
GET /api/samples/weather/humidity
```

with default params: 

| Key         | value |
|:------------|:------|
| `interval`  | `15`  |
| `hours`     | `2`   |
| `station`   | `ALL` |

## Status Codes

API returns the following status codes in its API:

| Status Code | Description                                    |
|:------------|:-----------------------------------------------|
| 0000        | **OK**                                         |
| 2100        | **Error**: Global error.                       |

## Example of success response

For input data given as:

| Key         | value       |
|:------------|:------------|
| `api_token` | SHA256-HASH |
| `interval`  | `5`         |
| `hours`     | `1`         |
| `station`   | `1`         |

```json
{
    "code": "0000",
    "message": "Success",
    "data": [
        {
            "date": "2024-08-03",
            "time": "17:15:00",
            "temperature": {
                "id": 41,
                "humidity": "33.00",
                "unit": "%",
                "date": "2024-08-03",
                "time": "17:15:00",
                "station": 1,
                "station_rel": {
                    "id": 1,
                    "title": "Velešići",
                    "description": "Mjerna stanica ulica Muhameda ef. Pandže"
                }
            }
        },
        {
            "date": "2024-08-03",
            "time": "16:45:00",
            "temperature": {
                "id": 11,
                "humidity": "34.00",
                "unit": "%",
                "date": "2024-08-03",
                "time": "16:45:00",
                "station": 1,
                "station_rel": {
                    "id": 1,
                    "title": "Velešići",
                    "description": "Mjerna stanica ulica Muhameda ef. Pandže"
                }
            }
        }
    ]
}
```
