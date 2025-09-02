<?php
class User {
    public $username;
    public function login($password) {
        return 'Login attempt for ' . $this->username;
    }
}