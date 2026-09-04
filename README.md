## Dockerized 3-Tier Application

A lightweight, containerized 3-Tier application built with PHP (Apache) and MySQL using Docker compose.

________________________________________________________________________________________

## Tech Stack 

* Forntend/Backend: PHP 8.2 with Apache (`php:8.2-apache`)
* Database: MySQL (`mysql:latest`)
* Orchestration: Docker Compose
________________________________________________________________________________________

## Project Structure

my-app/
|___ database/
|
|___ src/
|
|___ .env.example
|
|___ .gitignore
|
|___ docker-compose.yml
|
|___ README.md
|

________________________________________________________________________________________

## Getting Started ##
Prerequisties
o Docker installed on your machine
o Dcoker compose installed

________________________________________________________________________________________

## Installation & Setup ## 
1. clone the repository:
   Bash: 
    git clone https://github.com/aqassem107/my-app.git 
    cd my-app 

2. Configure Environment Variables:
   Copy the example environment file and update credentials if needed:
  Bash:  
    cp .env.example .env

3. Build and start containers:
   Bash: 
    docker compose up -d 

4. Access the application:
    open your browser and navigate to: 
        http://localhost:8080/register.html

________________________________________________________________________________________

## Useful Command ##

o Stop the application:
   Bash: 
    docker compose down

o Stop containers and clear volumes:
   Bash: 
    docker compose down -v 

o View application logs: 
   Bash: 
    docker compose logs -f     