#PHP
composer install
php run.php
#SQL
echo "Trwa budowanie kontenerów, jeśli 60s to mało to zmień czas w skrypcie run.sh"
docker-compose up -d
sleep 60 # odczekanie na zbudowanie kontenerow
docker exec -it postgres_container psql -U user -d db -f /scripts/query.sql

