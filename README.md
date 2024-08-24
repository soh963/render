# Multi-Language Web Service

This project demonstrates a web service using multiple programming languages (Python, PHP, Node.js) with a MySQL database, all containerized using Docker.

## Prerequisites

- Docker
- Docker Compose

## Setup and Running

1. Clone this repository:
   ```
   git clone <repository-url>
   cd <repository-directory>
   ```

2. Build and start the services:
   ```
   docker-compose up --build
   ```

3. Access the services:
   - Python: http://localhost:5000
   - PHP: http://localhost:8080
   - Node.js: http://localhost:3000
   - HTML Frontend: Open `app/html/index.html` in a web browser

## Project Structure

- `app/`: Contains the application code for each language
- `database/`: Contains the database initialization script
- `docker/`: Contains Dockerfiles for each service
- `docker-compose.yml`: Defines and configures the application services

## Technologies Used

- Python 3.11 with Flask
- PHP 8.2
- Node.js 18 with Express
- MySQL 8.0
- Docker

## License

This project is open source and available under the [MIT License](LICENSE).
