<?php

namespace Unicah\Oop\Security;

class UserPasswordAuth implements IAuth
{    
    private string $user = '';
    private string $password = '';
    private ?IAuth $next = null;

    public function authorize() : bool
    {
        if ($this->user == "admin" && $this->password == "pwd1234.1AB") {
            return true;
        }
        if ($this->next) {
            return $this->next->authorize();
        }
        return false;
    }

    final function setUserAndPassword(string $user,string $password) {
        $this->setUser($user);
        $this->setPassword($password);
    }

    protected function getUser(): string
    {
        return $this->user;
    }

    protected function setUser(string $user): void
    {
        $this->user = $user;
    }

    protected function getPassword(): string
    {
        return $this->password;
    }

    protected function setPassword(string $password): void
    {
        $this->password = $password;
    }

     public function registerNext(IAuth $next): void
     {
        $this->next = $next;
     }

}
