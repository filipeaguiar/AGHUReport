# AGHU Report Tool

A Tool to visualize AGHU metrics

# Dependencies
- php 5.4
- postgresql
- php5-pgsql driver

# Install
```
npm install
bower install
composer install
composer dumpautoload
```

Create a `.env` file on the project folder using this template:

```
DEBUG=true
CACHETIME=600

DB_HOST   = <Server IP>
DB_PORT   = <Server Port>
DB_NAME   = <DB Name>
DB_SCHEMA = <DB Schema>
DB_USER   = <DB User>
DB_PASS   = <DB Password>
```

# Executing

## PHP builtin server
```
npm run pserver
```

## Apache

Set DocumentRoot to `public` folder.
