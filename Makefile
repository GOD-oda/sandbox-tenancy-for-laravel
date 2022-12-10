build:
	docker compose build --no-cache

down:
	docker compose down -v --remove-orphans

restart:
	docker compose down
	docker compose up -d
