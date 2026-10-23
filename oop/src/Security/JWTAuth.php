<?php

namespace Unicah\Oop\Security;

class JWTAuth implements IAuth{
    private string $jwt = '';
    private ?IAuth $next = null;

    public function setJWT(string $jwt): void
    {
        $this->jwt = $jwt;
    }
    #[Override]
    public function authorize(): bool{
        if ($this->jwt !== ''){
            return true;
        }
        if ($this->next) {
            return $this->next->authorize();
        }
        return false;
    }

    public function registerNext(IAuth $next): void
    {
        $this->next = $next;
    }
}