## Repo belajar laravel
## How to use
Move to work directory then clone
```bash
git clone https://github.com/haikaru2001/Learning_laravel.git
```
Then move to your repo
```bash
cd week9
```

Install vendor file, etc.
```bash
composer install
npm install
```




Duplicate file .env
```bash
cp .env.example .env
```
Generate an Application Key
```bash
php artisan key:generate
```
Configure Your Database: Open the .env file and configure your database settings (e.g., DB_CONNECTION, DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME, and DB_PASSWORD) to match your local database setup.

Migrate the Database: 
```bash
php artisan migrate
```

## Prototype
You can check our project prototype <a href="https://www.figma.com/file/oC2H77lY8W5ORGx0KaHcSn/Untitled?type=design&node-id=1-2&mode=design&t=WcidHxUTDzqzfiW1-0">here</a>

## Documentation
You can check full documentation <a href="https://github.com/YayaIniee/CSWebsite/tree/ca179eb29971452a986916d36f2e8631616c37e4/Docs">here</a>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).
