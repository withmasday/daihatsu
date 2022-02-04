<?php 

class CheckoutModel {
    private $table = 'db_order';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function createNewOrder($car_code, $car_name, $car_image, $u_code, $u_name, $u_telp, $u_whatsapp, $u_alamat, $order_date, $order_status, $pembayaran) {
        $query = "INSERT INTO db_order
                  VALUES
                  ('', :car_code, :car_name, :car_image, :u_code, :u_name, :u_telp, :u_whatsapp, :u_alamat, :order_date, :order_status, :pembayaran)";
    
        $this->db->query($query);
        $this->db->bind('car_code', $car_code);
        $this->db->bind('car_name', $car_name);
        $this->db->bind('car_image', $car_image);
        $this->db->bind('u_code', $u_code);
        $this->db->bind('u_name', $u_name);
        $this->db->bind('u_telp', $u_telp);
        $this->db->bind('u_whatsapp', $u_whatsapp);
        $this->db->bind('u_alamat', $u_alamat);
        $this->db->bind('order_date', $order_date);
        $this->db->bind('order_status', $order_status);
        $this->db->bind('pembayaran', $pembayaran);
    
        $this->db->execute();
        return $this->db->rowCount();
    }

}