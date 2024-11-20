Testing the Endpoints

You can use Postman or any API testing tool to test the endpoints.

Register User:

POST /api/register
Body:
{
    "name": "John Doe",
    "email": "john@example.com",
    "password": "password123"
}

Login User:

POST /api/login
Body:
{
    "email": "john@example.com",
    "password": "password123"
}

Fetch User Info:

GET /api/user
Headers: Authorization: Bearer {token}

Fetch Accessible Devices:

GET /api/devices
Headers: Authorization: Bearer {token}

Fetch Single Device:

GET /api/devices/{id}
Headers: Authorization: Bearer {token}

/******i have used wamp server with Laravel v11.32.0 (PHP v8.2.13)*********/
http://127.0.0.1:8000/api/devices/1