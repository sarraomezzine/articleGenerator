# articleGenerator
This project gives you hand to generate automatically articles and images using openAI API. Build with PHP using postgres and symfony.

` Example of a generated article and image `

<img src="https://cdn.discordapp.com/attachments/1067740542869454911/1071070751802802196/Screen_Shot_2023-02-03_at_3.06.51_PM.png" width="400" height="200"/> 

<img src="https://cdn.discordapp.com/attachments/1067740542869454911/1071071924718931968/Screen_Shot_2023-02-03_at_3.16.36_PM.png" width="400" height="200"/>



## Getting Started

These instructions will get you a copy of the project up and running on your local machine. 
This project cover both, running on a containerized environment using Docker, or on your local machine.

## Features
- [X] CRUD endpoints.
- [x] OpenAI API ([@orhanerday](https://github.com/orhanerday/open-ai))
- [x] Database ([postgres](https://www.postgresql.org/))
- [x] Docker (with adminer for database management)
- [x] Swagger([NelmioApiDocBundle](https://symfony.com/bundles/NelmioApiDocBundle/current/index.html))

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

## Links
* webApp: http://127.0.0.1:8000/api/article/
* Swagger: http://127.0.0.1:8000/api/doc
* Adminer: http://localhost:8080
