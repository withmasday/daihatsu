<?php 

class ProductModel {
    private $table = 'db_mobil';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllProduct() {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getProductByType($car_type) {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE car_type=:car_type');
        $this->db->bind('car_type', $car_type);
        return $this->db->resultSet();
    }

    public function getProductByCode($car_code) {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE car_code=:car_code');
        $this->db->bind('car_code', $car_code);
        return $this->db->single();
    }

    public function getProductAngsuranOne($car_code) {
        $this->db->query('SELECT * FROM db_angsuranone WHERE car_code=:car_code');
        $this->db->bind('car_code', $car_code);
        return $this->db->resultSet();
    }

    public function getProductAngsuranTwo($car_code) {
        $this->db->query('SELECT * FROM db_angsurantwo WHERE car_code=:car_code');
        $this->db->bind('car_code', $car_code);
        return $this->db->resultSet();
    }

    public function getAllCategory() {
        $this->db->query('SELECT * FROM db_category');
        return $this->db->resultSet();
    }

    public function getProdNameByCategory($car_type) {
        $this->db->query('SELECT * FROM db_category WHERE category_code=:category_code');
        $this->db->bind('category_code', $car_type);
        return $this->db->single();
    }

    public function getNewProduct() {
        $this->db->query('SELECT * FROM ' . $this->table. ' ORDER BY id DESC LIMIT 6');
        return $this->db->resultSet();
    }

}