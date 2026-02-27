<?php

namespace App\Services;

class AuthorizationService {
    private array $users = [
        "admin" => "admin",
    ]; 

    public function login(string $username, string $password): bool {
        foreach($this->users as $login => $password) {
            if($login == $username && $password == $password) {
                return true;
            }
        }
        return false;
    }
}