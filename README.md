# Backend -  Cart Systems API Project

## Introduction
This is a Cart Systems API that will help to authenticate different users by giving them a unique key or token to access the system.
The user will be able to perform the CRUD functionalities which are Create, Read, Update, Delete.
And a loging system will be implemented in order to allow only registered user to perfom certains tasks.
Every time a user login a token or key will be generated automatically to verify the authenticity. 


## Tech Stac(Dependencies)

### Installing Dependencies for the Backend

- **Laravel Framework 8.61.0**
- **phpMyAdmin** as our database of choice

## Main Files: Project Structure
```

├── README.md
├── [backend]
| ├── flaskr
| | ├── **init**.py \*\*\_ the main driver of the app.
| |  
| ├── models.py
| ├── README.md
| ├── requirements.txt
| ├── test_flaskr.py
| ├── trivia.psql
| |**\_
├── [frontend]
├── public
├── src
├── README.md
|**
```

**Running the server**
In the backend directory, execute:

```
php artisan serve
```

## API

GET `\products` Fetches all available products

Request parameters: none
Example response:

```
{
   {
        "id": 1,
        "name": "Product One",
        "slug": "product-one",
        "description": "This is product one",
        "price": "899.99",
        "created_at": "2021-09-24T19:52:06.000000Z",
        "updated_at": "2021-09-24T20:44:23.000000Z"
    },
}
```

GET `/products/<product_id>` Fetches a specific product

Example response:

```
 {
    "id": 2,
    "name": "Product Two",
    "slug": "product-two",
    "description": "This is product two",
    "price": "499.99",
    "created_at": "2021-09-24T20:18:33.000000Z",
    "updated_at": "2021-09-24T20:18:33.000000Z"
}

```

DELETE `/products/<product_id>` Delete an existing product from the repository of available products

Request arguments: question_id:int
Example response:

```
{
  "deleted": "28",
  "success": true
}
```

POST `/products` Add a new product to the repository of available products

Request body: {question:string, answer:string, difficulty:int, category:string}
Example response:

```
{
  "created": 29,
  "success": true
}

```
