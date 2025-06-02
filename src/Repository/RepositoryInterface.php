<?php

/**
 * Définit les méthodes que doivent déclarer les classes qui implémentent cette interface
 */

namespace Mobilebike\Src\Repository;

interface RepositoryInterface
{
  public function findAll(): array;
  public function findById(int $id): ?object;
  public function save(object $entity): bool;
  public function delete(int $id): bool;
}
