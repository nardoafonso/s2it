/waitforit.sh localhost:3306 -t 30
php bin/console doctrine:migrations:migrate --no-interaction --allow-no-migration