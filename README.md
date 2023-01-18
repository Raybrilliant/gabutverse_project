# Gabutverse

Gabutverse is a streaming website and detail information about a movies.
## Installation

If you want to try the web apps just follow this step

First you must import the `Gabut.sql` to MySQL database server

Next you change the `.env` file type by searching for this code
```bash
DB_DATABASE= {your database name}
DB_USERNAME={your database username}
DB_PASSWORD={your database password}
```
Next you can open the main folder using terminal or laragon cmd and type
```bash
php artisan serve
```

## End Point

#### Admin Login

```http
/admin
```
using the credential bellow to login 
| Email | Password  | 
| :-------- | :------- |
| `raihan@gmail.com` | `12345` |