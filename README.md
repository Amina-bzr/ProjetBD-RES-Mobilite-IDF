# TransportIDF

TransportIDF is a web plateform featuring a PHP web server utilizing the MVC architecture, a PostgreSQL database server, and a standard HTML/CSS user interface. This system is tailored for the streamlined management of travel details and transportation tickets.

## Prerequisites

Before diving in, ensure that you've met the following prerequisites:

- PHP installed (version 7.4.3)
- Composer installed ([https://getcomposer.org/](https://getcomposer.org/))
- PostgreSQL installed and operational

## Installation

1. Clone the repository:
    ```bash
    git clone https://github.com/Amina-bzr/ProjetBD-RES-Mobilite-IDF.git
    ```

2. Navigate to the project directory:
    ```bash
    cd ProjetBD-RES-Mobilite-IDF
    ```

3. Install dependencies using Composer:
    ```bash
    composer install
    ```

4. Configure the connection to your PostgreSQL database:
    - Duplicate the `.env.example` file to `.env`:
        ```bash
        cp .env.example .env
        ```

    - Open the `.env` file and update the PostgreSQL connection details.

## Usage

Launch the project using the integrated PHP server:
    ```bash
    php -S localhost:8000
    ```

Visit `http://localhost:8000` in your web browser.

