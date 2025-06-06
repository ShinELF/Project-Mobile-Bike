<?php

namespace Diginamic\Framework\Repository;

use Diginamic\Framework\Model\Product;
use PDO;

class ProductRepository extends AbstractRepository
{
    protected string $table = 'product';
    protected string $entityClass = Product::class;


    /**
     * Trouver un produit par son modèle
     */
    public function findByModel(string $modele): ?Product
    {
        $stmt = $this->db->prepare("SELECT * FROM {$this->table} WHERE modele = :modele LIMIT 1");
        $stmt->execute(['login' => $modele]);


        $stmt->setFetchMode(PDO::FETCH_CLASS, $this->entityClass);

        $product = $stmt->fetch();
        return $product ?: null;
    }


    /**
     * Sauvegarder un produit (création ou mise à jour)
     */
    public function save(object $entity): bool
    {
        if (!$entity instanceof Product) {
            throw new \InvalidArgumentException('L\'entité doit être une instance de product');
        }

        if ($entity->id) {
            // Mise à jour
            $stmt = $this->db->prepare("
                UPDATE {$this->table}
                SET image = :image, modele = :modele, price = :price, description = :description
                WHERE id = :id
            ");

            return $stmt->execute([
                'id' => $entity->id,
                'image' => $entity->image,
                'modele' => $entity->modele,
                'price' => $entity->price,
                'description' => $entity->description
            ]);
        } else {
            // Création
            $stmt = $this->db->prepare("
                INSERT INTO {$this->table} (image, modele, price, description) 
                VALUES (:image, :modele, :price, :description)
            ");

            $result = $stmt->execute([
                'image' => $entity->image,
                'modele' => $entity->modele,
                'price' => $entity->price,
                'description' => $entity->description
            ]);

            if ($result) {
                $entity->id = (int) $this->db->lastInsertId();
            }

            return $result;
        }
    }
}
