<?php
class User {
    protected $userID;
    protected $name;
    protected $email;

    public function __construct($userID, $name, $email) {
        $this->userID = $userID;
        $this->name = $name;
        $this->email = $email;
    }

    public function register() {
        // Code to register user
    }

    public function login() {
        // Code to login user
    }
}
?>
