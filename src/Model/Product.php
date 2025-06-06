<?php

namespace Diginamic\Framework\Model;

class Product
{
    public ?int $id = null;
    public string $image;
    public string $modele;
    public string $price;
    public string $description;

    public function hydrate(array $data): void
    {
        foreach ($data as $key => $value) {
            $camelCaseKey = lcfirst(str_replace('-', '', ucwords($key, '-')));
            var_dump($camelCaseKey);

            if (property_exists($this, $camelCaseKey)) {
                $this->$camelCaseKey = $value;
            }
        }
    }
}
