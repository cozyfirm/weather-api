# Fetch all teams

This endpoint is used to fetch temperature samples, using route

```http
POST /api/weather/temperature
```

| Parameter   | Type | Description                                                |
|:------------| :--- |:-----------------------------------------------------------|
| `api_token` | `string` | **Required**. User auth token                              |
| `interval`  | `string` | **Optional**. Time interval; Default 15 minutes            |
| `hours`     | `string` | **Optional**. Period of time; Default 24 hours             |
| `station`   | `string` | **Optional**. Measuring station; Default gives all of them |

## Status Codes

API returns the following status codes in its API:

| Status Code | Description                                    |
|:------------|:-----------------------------------------------|
| 0000        | **OK**                                         |
| 2000        | **Error**: Global error.                       |


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
                "id": 43,
                "temperature": "38.00",
                "unit": "°C",
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
                "temperature": "37.00",
                "unit": "°C",
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
