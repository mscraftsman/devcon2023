

# DevCon 2023

This project is built using Laravel/Blade/Tailwind CSS.

## Clone instructions

```
git clone git@github.com:mscraftsman/devcon2023.git
```

## Docker instructions

```
docker-compose up -d
```

Create an `.env` file.

```
docker exec devcon2023-app cp .env.example .env
```

Install composer dependencies.

```
docker exec devcon2023-app composer install
```

Set an application key.

```
docker exec devcon2023-app php artisan key:generate
```

Install NPM dependencies.

```
docker run --rm --name node -v ${PWD}:/app -w /app node npm install
```

Run NPM dev.

```
docker run --rm --name node -v ${PWD}:/app -w /app node npm run dev
```

Open your browser and go to http://localhost:8000.
