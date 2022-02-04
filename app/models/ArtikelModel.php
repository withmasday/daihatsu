<?php 

class ArtikelModel {
    private $table = 'db_artikel';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllArticle() {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getArticleByCode($artikel_code) {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE artikel_code=:artikel_code');
        $this->db->bind('artikel_code', $artikel_code);
        return $this->db->single();
    }

    public function updateArticleByCode($artikel_code, $artikel_name, $artikel_value, $artikel_by, $artikel_date, $artikel_image) {
        $this->db->query('UPDATE db_artikel SET artikel_name=:artikel_name, artikel_value=:artikel_value, artikel_by=:artikel_by, artikel_date=:artikel_date, artikel_image=:artikel_image WHERE artikel_code=:artikel_code');
        $this->db->bind('artikel_code', $artikel_code);
        $this->db->bind('artikel_name', $artikel_name);
        $this->db->bind('artikel_value', $artikel_value);
        $this->db->bind('artikel_by', $artikel_by);
        $this->db->bind('artikel_date', $artikel_date);
        $this->db->bind('artikel_image', $artikel_image);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function updateArticleNoImage($artikel_code, $artikel_name, $artikel_value, $artikel_by, $artikel_date) {
        $this->db->query('UPDATE db_artikel SET artikel_name=:artikel_name, artikel_value=:artikel_value, artikel_by=:artikel_by, artikel_date=:artikel_date WHERE artikel_code=:artikel_code');
        $this->db->bind('artikel_code', $artikel_code);
        $this->db->bind('artikel_name', $artikel_name);
        $this->db->bind('artikel_value', $artikel_value);
        $this->db->bind('artikel_by', $artikel_by);
        $this->db->bind('artikel_date', $artikel_date);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function createArticle($artikel_code, $artikel_name, $artikel_value, $artikel_by, $artikel_date, $artikel_image) {
        $query = "INSERT INTO db_artikel
                    VALUES
                  ('', :artikel_code, :artikel_name, :artikel_value, :artikel_by, :artikel_date, :artikel_image)";
        $this->db->query($query);
        $this->db->bind('artikel_code', $artikel_code);
        $this->db->bind('artikel_name', $artikel_name);
        $this->db->bind('artikel_value', $artikel_value);
        $this->db->bind('artikel_by', $artikel_by);
        $this->db->bind('artikel_date', $artikel_date);
        $this->db->bind('artikel_image', $artikel_image);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function deleteArticleByCode($artikel_code) {
        $this->db->query('DELETE FROM db_artikel WHERE artikel_code=:artikel_code');
        $this->db->bind('artikel_code', $artikel_code);
        $this->db->execute();
    }
}