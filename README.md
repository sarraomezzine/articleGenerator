# articleGenerator
This project gives you hands to generate automatically articles and images using openAI API. Build with PHP using postgres

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes. 
This project cover both, running on a containerized environment using Docker, or on your local machine.

## Features
- [X] CRUD endpoints.
- [x] OpenAI API ([@orhanerday](https://github.com/orhanerday/open-ai)).
- [x] Database ([postgres](https://www.postgresql.org/)).
- [x] Docker. (with adminer for database management)

## Prerequisites
* Composer (the latest version)
* PHP (version 8)
* [Postgres](https://www.postgresql.org/)
* A [Docker](https://docs.docker.com/) engine running on your local machine.

## Running the project


```bash
# clone the project
$ git clone https://github.com/sarraomezzine/articleGenerator.git

# create Environment variables file
cp .env.example .env

# migrations
$ php bin/console doctrine:migrations:migrate

# development
$ symfony server:start

```
Generate your [OPENAI_API_KEY](https://platform.openai.com/account/api-keys) and replace it in the Environment variables file

# Database
You can use the docker compose.

Before start please fill the correct 
configuration in `.env` file

```bash
docker-compose up -d
```

` turn off your local postgres server in case of: Error starting userland proxy: listen tcp4 0.0.0.0:5432: bind: address already in use`


