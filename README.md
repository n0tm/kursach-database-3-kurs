# Installation

```bash
docker-compose build
```

```bash
docker-compose up -d
```

Inside db container make user and grant him privileges to your database.

```bash
mysql -uroot -proot
```

```mysql
GRANT ALL ON laravel.* TO 'backer'@'%' IDENTIFIED BY 'backer';
```

```mysql
FLUSH PRIVILEGES;
```

```mysql
EXIT;
```

Inside app container make migrations with seeds. 
```bash
cd core && php artisan migrate:fresh --seed
```

Now you can go to http://localhost/prequel

# Web Authorization Data
Login: __buns-admin@buns.ru__
Password: __password__