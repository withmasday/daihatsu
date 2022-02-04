<?php 

class SigninModel {
    private $table = 'db_users';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function userSignIn($u_username, $u_password) {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE u_username=:u_username AND u_password=:u_password');
        $this->db->bind('u_username', $u_username);
        $this->db->bind('u_password', $u_password);
        return $this->db->single();
    }

    public function getUserByCode($u_code) {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE u_code=:u_code');
        $this->db->bind('u_code', $u_code);
        return $this->db->single();
    }
}