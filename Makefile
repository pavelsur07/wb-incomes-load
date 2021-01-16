init: docker-down-clear seller-clear docker-pull docker-build docker-up seller-init

up: docker-up
down: docker-down
restart: down up

check: lint analyze validate-schema test
lint: seller-lint

analyze: seller-analyze
validate-schema: seller-validate-schema
test: seller-test #seller-fixtures
test-unit: seller-test-unit
test-functional: seller-test-functional seller-fixtures
test-smoke: seller-fixtures
test-e2e: seller-fixtures

docker-up:
	docker-compose up -d

docker-down:
	docker-compose down --remove-orphans

docker-down-clear:
	docker-compose down -v --remove-orphans

docker-pull:
	docker-compose pull --include-deps

docker-build:
	docker-compose build

#--------------------------------------- Init seller ------------------------------------------------
seller-clear:
	docker run --rm -v ${PWD}/seller:/app --workdir=/app alpine rm -f .ready

seller-init: seller-permissions seller-composer-install seller-assets-install seller-wait-db seller-migrations seller-fixtures seller-ready

seller-permissions:
	docker run --rm -v ${PWD}/seller:/app -w /app alpine chmod 777 var/cache var/log var/test

seller-composer-install:
	docker-compose run --rm seller-php-cli composer install

seller-assets-install:
	docker-compose run --rm seller-node yarn install
	docker-compose run --rm seller-node npm rebuild node-sass

seller-wait-db:
	docker-compose run --rm seller-php-cli wait-for-it seller-postgres:5432 -t 30

seller-migrations:
	docker-compose run --rm seller-php-cli php bin/console doctrine:migrations:migrate --no-interaction

seller-fixtures:
	docker-compose run --rm seller-php-cli php bin/console doctrine:fixtures:load --no-interaction

seller-ready:
	docker run --rm -v ${PWD}/seller:/app --workdir=/app alpine touch .ready

#------------ End Migration ---------------------------------------------------------
seller-check: seller-validate-schema seller-lint seller-analyze seller-test

seller-validate-schema:
	docker-compose run --rm seller-php-cli composer app orm:validate-schema

seller-lint:
	docker-compose run --rm seller-php-cli composer lint
	docker-compose run --rm seller-php-cli composer cs-check

seller-analyze:
	docker-compose run --rm seller-php-cli composer psalm

seller-test:
	docker-compose run --rm seller-php-cli composer test

seller-test-coverage:
	docker-compose run --rm seller-php-cli composer test-coverage

seller-test-unit:
	docker-compose run --rm seller-php-cli composer test -- --testsuite=unit

seller-test-unit-coverage:
	docker-compose run --rm seller-php-cli composer test-coverage -- --testsuite=unit

seller-test-functional:
	docker-compose run --rm seller-php-cli composer test -- --testsuite=functional

seller-test-functional-coverage:
	docker-compose run --rm seller-php-cli composer test-coverage -- --testsuite=functional
