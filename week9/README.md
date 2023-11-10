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
