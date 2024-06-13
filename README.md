<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Inquiries API
# Inquiry Management System

This project is a simple Inquiry Management System built using Laravel for the backend API and Angular for the frontend application. The system allows users to create and view inquiries.

## Table of Contents

- [Prerequisites](#prerequisites)
- [Backend Setup (Laravel)](#backend-setup-laravel)
- [Frontend Setup (Angular)](#frontend-setup-angular)
- [Usage](#usage)
- [API Endpoints](#api-endpoints)
- [Making Requests](#making-requests)
  - [GET Request](#get-request)
  - [POST Request](#post-request)
- [Contributing](#contributing)
- [License](#license)

## Prerequisites

Before you begin, ensure you have met the following requirements:

- PHP >= 8.0
- Composer
- Node.js >= 12.0 and npm
- Angular CLI

## Backend Setup (Laravel)

1. **Clone the repository:**
   ```bash
   git clone git@github.com:PerisOduol618/inquiry-api.git

   cd dawit-insurance

## Install dependencies:

`composer install`

## Set up the environment file:
`cp .env.example .env
`
## Generate an application key:
`php artisan key:generate
`

## Configure the database:
`
DB_CONNECTION=sqlite`

`DB_DATABASE=/absolute/path/to/your/database.sqlite
`

## Create the SQLite database file:

`touch /absolute/path/to/your/database.sqlite`

## Run migrations:
`php artisan migrate`   

## Start the Laravel development server:

`php artisan serve`

# API Endpoints

## Step-by-Step Instructions To Post and Get Request

## Post Request

| Step            | Description                         | Command/Action                       | 
| ------------------- | ----------------------------- | ----------------------------- |
| 1 |Ensure the Laravel server is running | Run: php artisan serve | Click on `Comment` | Taken to where you can comment | Signs In/ Signs Up |
| 2 | Open a browser or API client (e.g., Postman) | Add http://localhost:8000/api/inquiry  to your browser or postman|
| 3| Prepare the JSON payload | { "name": "John Doe", "email": "john.doe@example.com", "message": "Hello, I have an inquiry." }|
|4| Send a POST request to create an inquiry| Click "Send" in the API client"|
|

## Get Request
| Step            | Description                         | Command/Action                       | 
| ------------------- | ----------------------------- | ----------------------------- |
| 1 |Ensure the Laravel server is running | Run: php artisan serve | Click on `Comment` | Taken to where you can comment | Signs In/ Signs Up |
| 2 | Open a browser or API client (e.g., Postman) | Add http://localhost:8000/api/inquiry  to your browser or postman|
| 3| Send a GET request to retrieve inquiries | Click "Send" in the API client or refresh browser|
|




### Instructions to Include Images



## License

In the above `README.md`:

- Ensure you add the `get_request_example.png` and `post_request_example.png` images in an `images` folder in your repository.
- Adjust paths, repository URLs, and other specifics as necessary to fit your actual project setup.

This updated README includes all necessary setup steps, detailed explanations for making GET and POST requests, and images to illustrate how the requests work.

