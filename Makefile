.PHONY: up down restart react

up:
	docker compose up -d

down:
	docker compose down

restart: down up

react:
	npm run react:build
