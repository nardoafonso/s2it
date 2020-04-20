# Requirements

docker version 17.05 or higher

docker-compose version 1.21.0 or higher

# Build and Deploy

On terminal execute `[sudo] docker-compose build` to build application

Then execute `[sudo] docker-compose up -d` to deploy application

You will need to run the doctrine migrations 

`[sudo] docker exec -it docker-symfony4-php-fpm bash` and then 
`php bin/console doctrine:migrations:migrate` 

Aplication will be available at [localhost:8000](localhost:8000)

And the doccs at Aplication will be available at [localhost:8000/api/doc](localhost:8000/api/doc)
