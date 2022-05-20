<?php
namespace App\Model;
class User{

    private $username;
    private $password;

    public function setUsername(string $username)
    {
        $this->username = $username;
        return $this;

    }
    public function setPassword(string $password)
    {
        $this->password = $password;
        return $this;

    }
    public function getUsername() : ?string
    {
        return $this->password;
    }
    public function getPassword(): ?string
    {
        return $this->password;
    }
}