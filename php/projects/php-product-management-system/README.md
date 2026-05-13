# PHP and SQL Product Catalog

This project is a simple PHP + MySQL/MariaDB application created for practicing database connection, SQL queries, prepared statements, and basic CRUD structure.

## Project Structure

```text
php-sql-product-catalog/
├── database/
│   ├── schema.sql        # Database and table creation script
│   └── seed.sql          # Sample records for testing
├── public/
│   ├── index.php         # Product listing page
│   ├── create.php        # Product creation page
│   └── details.php       # Product details page
├── src/
│   ├── autoload.php      # Simple class autoloader
│   ├── Database/
│   │   └── Connection.php
│   └── Repository/
│       └── ProductRepository.php
├── .env.example          # Example database configuration
├── .gitignore
└── README.md
```

## Technologies Used

- PHP
- MySQL or MariaDB
- PDO
- SQL
- HTML

## Database

The project uses a database called `loja` and a table called `produtos`.

### Products table

| Column | Type | Description |
| --- | --- | --- |
| `id` | INT | Primary key with auto increment |
| `nome` | VARCHAR(100) | Product name |
| `preco` | DECIMAL(10,2) | Product price |
| `quantidade` | INT | Product stock quantity |
| `criado_em` | TIMESTAMP | Product creation date |

## How to Run Locally

### 1. Clone the repository

```bash
git clone https://github.com/your-username/php-sql-product-catalog.git
cd php-sql-product-catalog
```

### 2. Create the database

Import the SQL files into MySQL/MariaDB:

```bash
mysql -u root -p < database/schema.sql
mysql -u root -p < database/seed.sql
```

If you are using XAMPP, WAMP, Laragon, or phpMyAdmin, you can also import these files manually through phpMyAdmin.

### 3. Configure the database connection

The connection settings are defined in `src/Database/Connection.php`.

Default values:

```text
Host: localhost
Port: 3307
Database: loja
User: root
Password: empty
```

If your MySQL server uses the default port, change `3307` to `3306`.

### 4. Start the PHP server

From the project root, run:

```bash
php -S localhost:8000 -t public
```

Then open:

```text
http://localhost:8000
```

## Features

- Connects PHP to MySQL/MariaDB using PDO
- Lists all products from the database
- Shows details for a selected product
- Creates new products using a form
- Uses prepared statements to improve SQL security
- Separates database logic from page logic using a repository class

## Suggested GitHub Repository Name

```text
php-sql-product-catalog
```

## Suggested Git Commands

```bash
git init
git add .
git commit -m "Initial PHP and SQL product catalog project"
git branch -M main
git remote add origin https://github.com/your-username/php-sql-product-catalog.git
git push -u origin main
```

## Learning Goals

This project helps practice:

- Creating databases and tables with SQL
- Inserting and selecting records
- Connecting PHP to a database with PDO
- Using prepared statements
- Organizing a PHP project for GitHub
- Separating responsibilities between folders and files

## Notes

This is an educational project. In a production application, it would be recommended to add authentication, stronger validation, environment variable loading, styling, routing, and error handling.
