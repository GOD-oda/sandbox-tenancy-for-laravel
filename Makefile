build:
	docker compose build --no-cache

down:
	docker compose down -v --remove-orphans

run:
	docker compose run --rm app bash
