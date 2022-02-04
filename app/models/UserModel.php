<?php 

class UserModel {
    private $table = 'db_order';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getUserOrder($u_code) {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE u_code=:u_code');
        $this->db->bind('u_code', $u_code);
        return $this->db->resultSet();
    }

    public function getUserData($u_code) {
        $this->db->query('SELECT * FROM db_users WHERE u_code=:u_code');
        $this->db->bind('u_code', $u_code);
        return $this->db->single();
    }

    public function updateUserData($u_code, $u_name, $u_telp, $u_whatsapp, $u_alamat) {
        $query = "UPDATE db_users SET
                    u_name = :u_name,
                    u_telp = :u_telp,
                    u_whatsapp = :u_whatsapp,
                    u_alamat = :u_alamat
                  WHERE u_code = :u_code";
        
        $this->db->query($query);
        $this->db->bind('u_name', $u_name);
        $this->db->bind('u_telp', $u_telp);
        $this->db->bind('u_whatsapp', $u_whatsapp);
        $this->db->bind('u_alamat', $u_alamat);
        $this->db->bind('u_code', $u_code);

        $this->db->execute();

        return $this->db->rowCount();
    }
}