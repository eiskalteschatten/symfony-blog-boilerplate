<?php

namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;

class Login
{
    #[Assert\NotBlank]
    protected $username;

    #[Assert\NotBlank]
    protected $password;

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): void
    {
        $this->username = $username;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): void
    {
        $this->password = $password;
    }
}