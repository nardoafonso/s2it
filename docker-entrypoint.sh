#!/usr/bin/env bash
./waitforit.sh webserver:80 -t 15 && php bin/console doctrine:migrations:migrate --no-interaction --allow-no-migration