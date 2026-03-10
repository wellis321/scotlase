# Scotlase Solutions

Website for Scotlase Solutions, a laser cleaning company specialising in marine, commercial and social applications.

## Tech stack

- PHP
- MySQL
- Vanilla HTML/CSS/JS

## Setup

1. Create the database and run the schema:

   ```bash
   mysql -u root -proot -h 127.0.0.1 -P 8889 < schema.sql
   ```

2. Start the PHP built-in server (from project root):

   ```bash
   php -S localhost:8000 router.php
   ```

   Or with explicit document root: `php -S localhost:8000 -t public`

3. Open [http://localhost:8000](http://localhost:8000)

## Environment

Default database config (from overview.txt):

- Host: 127.0.0.1 (or localhost:8889)
- Port: 8889
- Database: scotlase
- User: root
- Pass: root

Override with `DB_HOST`, `DB_NAME`, `DB_USER`, `DB_PASS` environment variables.
