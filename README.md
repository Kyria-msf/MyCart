# Backend -  Cart System API Project

## Introduction
This is a Cart Systems API that will help to authenticate different users by giving them a unique key or token to access the system.
The user will be able to perform the CRUD functionalities which are Create, Read, Update, Delete.
And a loging system will be implemented in order to allow only registered user to perfom certains tasks.
Every time a user log into the system a token or key will be generated automatically to verify the authenticity. 


## Tech Stac(Dependencies)

### Installing Dependencies for the Backend

- **Laravel Framework 8.61.0**
- **phpMyAdmin** as our database of choice

## Main Files: Project Structure
```

├── README.md
├── app
|     | ├── Console
|     | ├── Exceptions
|     | ├── Http
|     |       | ├── Controllers
|     |                 |     | ├── **AuthController**.php \*\*\_ authentication
|     |       |         |     | ├── Controller.php
|     |       |         |     | ├── **CartController**.php  \*\*\_ CRUD functionalities.
|     | ├── Models
├──Bootstrap 
├── database
|     ├── migrations
├── public
├── resources
├── routes
|     | ├── **api.php**.py \*\*\_ the main driver of the app.
├── tests
├── vendor
├──.editorconfig
├──.env
├──.env.example 
├── .gitattributes
├── .gitignore
├── .styleci.yml
├── artisan
├── composer.json
├── composer.lock
├── package.json
├── phpunit.xml
├── README.md
├──server.php
├──webpack.mix.js
|**
```

**Running the server**
In the backend directory, execute:

```
php artisan serve
```

## API

#### REGISTER AND LOGIN

POST `/api/register` Register to the API application

Request parameters: {name:string, email:string, password:string, confirm_password:string}
Example response:

```
{
    "user": {
        "name": "Fatuma",
        "email": "fatuma@gmail.com",
        "updated_at": "2021-09-25T15:53:02.000000Z",
        "created_at": "2021-09-25T15:53:02.000000Z",
        "id": 3
    },
    "token": "9|8kNcxk7fip9V00I80PKoeZDbg0oApinnUsddBPpv"
}
```

POST `/api/login` Login to the API application

Request parameters: {email:string, password:string}
Example response:

```
{
    "user": {
        "id": 2,
        "name": "Kyria",
        "email": "kyria@gmail.com",
        "email_verified_at": null,
        "created_at": "2021-09-25T08:40:18.000000Z",
        "updated_at": "2021-09-25T08:40:18.000000Z"
    },
    "token": "8|PB5MrH5cwo7SvWoi8qBvWjUq5lGVnA77NAsIhcRg"
}
```
#### CRUD (Create, Read, Update, Delete)

GET `\api\carts` Fetches all available carts

Request parameters: none
Example response:

```
{
   {
        "id": 1,
        "name": "Cart One",
        "slug": "cart-one",
        "description": "This is cart one",
        "price": "899.99",
        "created_at": "2021-09-24T19:52:06.000000Z",
        "updated_at": "2021-09-24T20:44:23.000000Z"
    },
}
```

GET `/api/carts/<cart_id>` Fetches a specific cart

Request arguments: cart_id:int
Example response:

```
 {
    "id": 2,
    "name": "Cart Two",
    "slug": "cart-two",
    "description": "This is cart two",
    "price": "499.99",
    "created_at": "2021-09-24T20:18:33.000000Z",
    "updated_at": "2021-09-24T20:18:33.000000Z"
}

```

DELETE `/api/carts/<cart_id>` Delete an existing cart from the repository of available carts

Request arguments: cart_id:int
Example response:

```
{
    "deleted": 1,
    "success": true
}
```

POST `/api/carts` Add a new cart to the repository of available carts

Request body: {name:string, slug:string, description:string, price:decimal}
Example response:

```
{
  "created": 3,
  "success": true
}

```

PUT `/api/carts/<cart_id>` modify an existing cart to the repository of available carts

Request body: {name:string, slug:string, description:string, price:decimal}
Example response:

```
{
    "updated": {
        "id": 4,
        "name": "Cart fOUR",
        "slug": "cart-two",
        "description": "This is cart two",
        "price": "499.99",
        "created_at": "2021-09-24T22:37:49.000000Z",
        "updated_at": "2021-09-25T11:06:08.000000Z"
    },
    "success": true
}


### LOGGING OUT

```

LOGOUT `/api/<logout>` logging out of the API application

Example response:

```
{
        "message": "Logged out",
     
},

```

