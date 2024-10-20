Movies Project

Overview:

The Movies project is a web application built using Laravel, designed to allow users to explore, rate, and review movies. The application utilizes Laravel Passport for authentication, providing a secure API for user registration, login, and access to movie-related features.

Features
User Authentication:

Secure user registration and login using Laravel Passport.
Password reset functionality with email notifications.
Movie Management:

Users can view a list of movies with details such as title, description, and average rating.
Users can add reviews and ratings for each movie, with a maximum rating of 5.
Average Rating Calculation:

The application automatically calculates and updates the average rating for each movie based on user reviews, ensuring the rating is always current.
RESTful API:

The application provides a RESTful API that allows for easy integration with front-end frameworks or mobile applications.
Technologies Used
Laravel: The core framework for building the application, providing a robust structure and tools for rapid development.
Laravel Passport: Used for API authentication, allowing secure access to user-related functionalities.
MySQL: The database system used to store user, movie, and review data.
Mailtrap: Used for testing email functionalities during development.
Getting Started
To run the Movies project locally, follow these steps:

Clone the repository:

bash
Copy code
git clone https://github.com/abiodunemma/Africed.git
cd movies
Install dependencies:

bash
Copy code
composer install
Set up your .env file by copying the example file:

bash
Copy code
cp .env.example .env
Configure the .env file with your database and mail settings.

Generate the application key:

bash
Copy code
php artisan key:generate
Run the migrations to set up the database:

bash
Copy code
php artisan migrate
Seed the database with sample data (optional):

bash
Copy code
php artisan db:seed
Start the Laravel development server:

bash
Copy code
php artisan serve
You can now access the application at http://127.0.0.1:8000.

API Documentation
The API endpoints are designed to be intuitive and follow RESTful conventions. Below are some key endpoints:

User Registration: POST /api/register
User Login: POST /api/login
Forgot Password: POST /api/password/forgot
Reset Password: POST /api/password/reset
Get Movies: GET /api/movies
Add Review: POST /api/reviews
Update Review: PUT /api/reviews/{id}
Conclusion
The Movies project showcases my ability to build a full-featured web application using Laravel and Laravel Passport. It demonstrates my understanding of RESTful APIs, user authentication, and database management. I am excited to share this project as part of my application for the Africred technical interview.


Admin panel used : laravel back pack would require data to run thanks  so much.
