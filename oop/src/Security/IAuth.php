<?php

namespace Unicah\Oop\Security;

Interface IAuth
{
    public function authorize(): bool;
    public function registerNext(IAuth $next): void;
}