<?php

namespace Diginamic\Framework\Model;

class User
{
  public ?int $id = null;
  public string $login;
  public string $password;
  public string $email;
  public ?bool $isadmin = null;

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
