# Laravel React Docker Testing
To test the docker compose with two different environment containers joining with a network.
The first container environemnt is for laravel and php. And the second one is for react.js.
This repository is simple and good exercise for docker-compose.

## How to up and Running App
We assume docker and docker-compose is already installed.

1. clone the repository from master branch
2. run `docker-compose up -d`
3. browse the url 'http://localhost:3000' for front end
4. browse the url 'http://localhost:8000/products' for backend data api

## Referenced 

- React Challenge : fetch and display from an API [link](https://www.better.dev/react-challenge-fetch-and-display-from-an-api)
- React Local Development with Docker-Compose [link](https://medium.com/bb-tutorials-and-thoughts/react-local-development-with-docker-compose-5a247710f997)
- Laravel Mongodb CRUD tutorial [link](https://www.itsolutionstuff.com/post/laravel-5-mongodb-crud-tutorialexample.html)
- Install mongodb extension at alpine php image [link](https://gist.github.com/yozik04/400b6bff8a98d1678a80fde6c8e102e9)
- Set passwords at redis [link](https://stackoverflow.com/questions/68461172/docker-compose-redis-password-via-environment-variable)