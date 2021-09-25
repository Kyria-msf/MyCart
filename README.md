# Full Stack Bonding Experience API Project

## Introduction

This is a Bonding experiences application for employees and students. A bunch of team members got the idea to hold Bonding Experience on a regular basis and created a webpage to manage the Bonding Experience app and play the game, but their API experience is limited and still needs to be built out.

That's where you come in! Help them finish the Bonding Experience app so they can start holding Bonding Experience and seeing who's the most knowledgeable of the bunch. The application must:

## Tech Stac(Dependencies)

### PIP Dependencies

- **Python 3.7**
- **Virtual Enviornment**
- **SQLAlchemy** ORM to be our ORM library of choice
- **PostgreSQL** as our database of choice
- **Python3** and **Flask** as our server language and server framework
- **Flask-Migrate** for creating and
  running schema migrations

Once the virtual environment setup and running, then the dependencies can be install by naviging to the /backend directory and the following command should be run:
`pip install -r requirements.txt`

This will install all the reuired packages that I have selecteed within the requirements.txt file.

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
## Database Setup

With Postgres running,restore the database.

`psql trivia < trivia.psql`

**Running the server**
In the backend directory, execute:

```
set FLASK_APP=myapp
set FLASK_ENV=development # enables debug mode
python3 flask run
```

## API

GET `\categories` Fetches a dictionary of all available categories

Request parameters: none
Example response:

```
{
  "categories": {
    "1": "Science",
    "2": "Art",
    "3": "Geography",
    "4": "History",
    "5": "Entertainment",
    "6": "Sports"
  },
  "success": true
}
```

GET `\questions?page=<page_number>` Fetches a paginated dictionary of questions of all available categories

Request parameters (optional): page:int
Example response:

```
 "categories": {
   "1": "Science",
   "2": "Art",
   "3": "Geography",
   "4": "History",
   "5": "Entertainment",
   "6": "Sports"
 },
 "current_category": null,
 "questions": [
   {
     "answer": "Maya Angelou",
     "category": 4,
     "difficulty": 2,
     "id": 5,
     "question": "Whose autobiography is entitled 'I Know Why the Caged Bird Sings'?"
   },
   {
     "answer": "Escher",
     "category": 2,
     "difficulty": 1,
     "id": 16,
     "question": "Which Dutch graphic artist\u2013initials M C was a creator of optical illusions?"
   }
 ],
 "success": true,
 "total_questions": 2
}

```

DELETE `/questions/<question_id>` Delete an existing questions from the repository of available questions

Request arguments: question_id:int
Example response:

```
{
  "deleted": "28",
  "success": true
}
```

POST `/questions` Add a new question to the repository of available questions

Request body: {question:string, answer:string, difficulty:int, category:string}
Example response:

```
{
  "created": 29,
  "success": true
}

```

POST `/questions/search` Fetches all questions where a substring matches the search term (not case-sensitive)

Request body: {searchTerm:string}
Example response:

```
{
  "current_category": null,
  "questions": [
    {
      "answer": "Lisbon",
      "category": 2,
      "difficulty": 1,
      "id": 29,
      "question": "What is the capital of Portugal?"
    }
  ],
  "success": true,
  "total_questions": 1
}

```

GET `/categories/<int:category_id>/questions` Fetches a dictionary of questions for the specified category

Request argument: category_id:int
Example response:

```
{
  "current_category": 1,
  "questions": [
    {
      "answer": "The Liver",
      "category": 1,
      "difficulty": 4,
      "id": 20,
      "question": "What is the heaviest organ in the human body?"
    },
    {
      "answer": "Alexander Fleming",
      "category": 1,
      "difficulty": 3,
      "id": 21,
      "question": "Who discovered penicillin?"
    },
  ],
  "success": true,
  "total_questions": 2
}

```

POST `/quizzes` Fetches one random question within a specified category. Previously asked questions are not asked again.

Request body: {previous_questions: arr, quiz_category: {id:int, type:string}}
Example response:

```
{
  "question": {
    "answer": "The Liver",
    "category": 1,
    "difficulty": 4,
    "id": 20,
    "question": "What is the heaviest organ in the human body?"
  },
  "success": true
}

```

## Testing

To run the tests, run

```
dropdb trivia_test
createdb trivia_test
psql trivia_test < trivia.psql
python test_flaskr.py
```


# Backend - Full Stack Trivia API 

### Installing Dependencies for the Backend

1. **Python 3.7** - Follow instructions to install the latest version of python for your platform in the [python docs](https://docs.python.org/3/using/unix.html#getting-and-installing-the-latest-version-of-python)


2. **Virtual Enviornment** -Instructions for setting up a virual enviornment for your platform can be found in the [python docs](https://packaging.python.org/guides/installing-using-pip-and-virtual-environments/)


3. **PIP Dependencies** - Once you have your virtual environment setup and running, install dependencies by naviging to the `/backend` directory and running:
```bash
pip install -r requirements.txt
```
This will install all of the required packages we selected within the `requirements.txt` file.


4. **Key Dependencies**
 - [Flask](http://flask.pocoo.org/)  is a lightweight backend microservices framework. Flask is required to handle requests and responses.

 - [SQLAlchemy](https://www.sqlalchemy.org/) is the Python SQL toolkit and ORM we'll use handle the lightweight sqlite database. You'll primarily work in app.py and can reference models.py. 

 - [Flask-CORS](https://flask-cors.readthedocs.io/en/latest/#) is the extension we'll use to handle cross origin requests from our frontend server. 

### Database Setup
With Postgres running, restore a database using the trivia.psql file provided. From the backend folder in terminal run:
```shell
psql trivia < trivia.psql
```

### Running the server

From within the `./src` directory first ensure you are working using your created virtual environment.

To run the server, execute:

```shell
flask run --reload
```



## Testing
To run the tests, run
```
dropdb trivia_test
createdb trivia_test
psql trivia_test < trivia.psql
python test_flaskr.py
```



## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[CMS Max](https://www.cmsmax.com/)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
