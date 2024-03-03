composer install
php run.php

docker-compose up -d
docker exec -it postgres_container psql -U user -d db -f /scripts/query.sql

