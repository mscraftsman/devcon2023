

# DevCon 2023

This project is built using Laravel/Blade/Tailwind CSS.

## Docker instructions

```
git clone git@github.com:ishwon/2023.mscc.mu.git
```

```
docker-compose up -d
```

Create an `.env` file.

```
docker exec devcon2023-app cp .env.example .env
```

Set an application key.

```
docker exec devcon2023-app php artisan key:generate
```

Open your browser and go to http://localhost:8000.
