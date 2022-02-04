<?php 

class SignupModel {
    private $table = 'db_users';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getUsers($u_code, $u_username) {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE u_username=:u_username  OR u_code=:u_code');
        $this->db->bind('u_username', $u_username);
        $this->db->bind('u_code', $u_code);
        return $this->db->single();
    }

    public function addUsers($u_code, $u_name, $u_username, $u_password, $u_telp, $u_whatsapp, $u_alamat, $u_level) {
        $query = "INSERT INTO db_users
                  VALUES
                  ('', :u_code, :u_name, :u_username, :u_password, :u_telp, :u_whatsapp, :u_alamat, :u_level)";

        $this->db->query($query);
        $this->db->bind('u_code', $u_code);
        $this->db->bind('u_name', $u_name);
        $this->db->bind('u_username', $u_username);
        $this->db->bind('u_password', $u_password);
        $this->db->bind('u_telp', $u_telp);
        $this->db->bind('u_whatsapp', $u_whatsapp);
        $this->db->bind('u_alamat', $u_alamat);
        $this->db->bind('u_level', $u_level);

        $this->db->execute();
        return $this->db->rowCount();
    }
}