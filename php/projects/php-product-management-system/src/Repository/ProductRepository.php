<?php

namespace App\Repository;

use PDO;

class ProductRepository
{
    public function __construct(private PDO $pdo)
    {
    }

    public function findAll(): array
    {
        $statement = $this->pdo->query('SELECT * FROM produtos ORDER BY id ASC');
        return $statement->fetchAll();
    }

    public function findById(int $id): ?array
    {
        $statement = $this->pdo->prepare('SELECT * FROM produtos WHERE id = :id');
        $statement->execute(['id' => $id]);

        $product = $statement->fetch();
        return $product ?: null;
    }

    public function create(string $name, float $price, int $quantity): bool
    {
        $statement = $this->pdo->prepare(
            'INSERT INTO produtos (nome, preco, quantidade) VALUES (:name, :price, :quantity)'
        );

        return $statement->execute([
            'name' => $name,
            'price' => $price,
            'quantity' => $quantity,
        ]);
    }
}
