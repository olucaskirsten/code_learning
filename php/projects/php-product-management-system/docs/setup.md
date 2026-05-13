# Project Setup

## Requirements

- PHP 7.4+
- MySQL / MariaDB
- Local server (XAMPP, Laragon, etc.)

## Installation

git clone https://github.com/your-username/your-repo.git
cd your-repo
cp .env.example .env

Configure your database credentials inside `.env`

## Database Setup

mysql -u root -p your_database < database/schema.sql

## Running

http://localhost/your-project/public
