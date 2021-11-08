test:
	docker compose run --rm php vendor/bin/phpunit
.PHONY: test

phpstan:
	docker compose run --rm php vendor/bin/phpstan
.PHONY: phpstan
