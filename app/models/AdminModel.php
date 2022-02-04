<?php 

class AdminModel {
    private $table = 'db_order';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllOrder() {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getOrderPoint($car_code, $u_code) {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE car_code=:car_code AND u_code=:u_code');
        $this->db->bind('car_code', $car_code);
        $this->db->bind('u_code', $u_code);
        return $this->db->single();
    }

    public function verifyOrder($car_code, $u_code) {
        $order_status = '1';
        $this->db->query('UPDATE ' . $this->table . ' SET order_status=:order_status WHERE car_code=:car_code AND u_code=:u_code');
        $this->db->bind('order_status', $order_status);
        $this->db->bind('car_code', $car_code);
        $this->db->bind('u_code', $u_code);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function addCar($car_name, $car_price, $car_image, $car_type, $car_code, $car_detail) {
        $query = "INSERT INTO db_mobil
                    VALUES
                  ('', :car_name, :car_price, :car_image, :car_type, :car_code, :car_detail)";
        
        $this->db->query($query);
        $this->db->bind('car_code', $car_code);
        $this->db->bind('car_name', $car_name);
        $this->db->bind('car_price', $car_price);
        $this->db->bind('car_type', $car_type);
        $this->db->bind('car_detail', $car_detail);
        $this->db->bind('car_image', $car_image);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function updateCar($car_code, $car_name, $car_price, $car_type, $car_detail, $car_image) {
        $this->db->query('UPDATE db_mobil SET car_name=:car_name, car_price=:car_price, car_image=:car_image, car_type=:car_type, car_detail=:car_detail WHERE car_code=:car_code');
        $this->db->bind('car_code', $car_code);
        $this->db->bind('car_name', $car_name);
        $this->db->bind('car_price', $car_price);
        $this->db->bind('car_type', $car_type);
        $this->db->bind('car_detail', $car_detail);
        $this->db->bind('car_image', $car_image);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function updateCarNoImage($car_code, $car_name, $car_price, $car_type, $car_detail) {
        $this->db->query('UPDATE db_mobil SET car_name=:car_name, car_price=:car_price, car_type=:car_type, car_detail=:car_detail WHERE car_code=:car_code');
        $this->db->bind('car_code', $car_code);
        $this->db->bind('car_name', $car_name);
        $this->db->bind('car_price', $car_price);
        $this->db->bind('car_type', $car_type);
        $this->db->bind('car_detail', $car_detail);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function deleteProductByCode($car_code) {
        $this->db->query('DELETE FROM db_mobil WHERE car_code=:car_code');
        $this->db->bind('car_code', $car_code);
        $this->db->execute();

        $this->db->query('DELETE FROM db_angsuranone WHERE car_code=:car_code');
        $this->db->bind('car_code', $car_code);
        $this->db->execute();

        $this->db->query('DELETE FROM db_angsurantwo WHERE car_code=:car_code');
        $this->db->bind('car_code', $car_code);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function addAngsuranOne($car_code, $percentone, $tdpone, $setahunone, $duatahunone, $tigatahunone, $empattahunone, $limatahunone) {
        $this->db->query("INSERT INTO db_angsuranone
                          VALUES ('', :car_code, :angsuran_percent, :angsuran_12bulan, :angsuran_24bulan, :angsuran_36bulan, :angsuran_48bulan, :angsuran_60bulan, :tdp)");

        $this->db->bind('car_code', $car_code);
        $this->db->bind('angsuran_percent', $percentone);
        $this->db->bind('tdp', $tdpone);
        $this->db->bind('angsuran_12bulan', $setahunone);
        $this->db->bind('angsuran_24bulan', $duatahunone);
        $this->db->bind('angsuran_36bulan', $tigatahunone);
        $this->db->bind('angsuran_48bulan', $empattahunone);
        $this->db->bind('angsuran_60bulan', $limatahunone);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function addAngsuranTwo($car_code, $percenttwo, $tdptwo, $setahuntwo, $duatahuntwo, $tigatahuntwo, $empattahuntwo, $limatahuntwo) {
        $this->db->query("INSERT INTO db_angsurantwo
                          VALUES ('', :car_code, :angsuran_percent, :angsuran_12bulan, :angsuran_24bulan, :angsuran_36bulan, :angsuran_48bulan, :angsuran_60bulan, :tdp)");

        $this->db->bind('car_code', $car_code);
        $this->db->bind('angsuran_percent', $percenttwo);
        $this->db->bind('tdp', $tdptwo);
        $this->db->bind('angsuran_12bulan', $setahuntwo);
        $this->db->bind('angsuran_24bulan', $duatahuntwo);
        $this->db->bind('angsuran_36bulan', $tigatahuntwo);
        $this->db->bind('angsuran_48bulan', $empattahuntwo);
        $this->db->bind('angsuran_60bulan', $limatahuntwo);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function updateAngsuranOne($car_code, $percent, $tdp, $setahun, $duatahun, $tigatahun, $empattahun, $limatahun) {
        $this->db->query('UPDATE db_angsuranone SET angsuran_percent=:angsuran_percent,
                                                    angsuran_12bulan=:angsuran_12bulan,
                                                    angsuran_24bulan=:angsuran_24bulan,
                                                    angsuran_36bulan=:angsuran_36bulan,
                                                    angsuran_48bulan=:angsuran_48bulan,
                                                    angsuran_60bulan=:angsuran_60bulan,
                                                    tdp=:tdp
                                                    WHERE car_code=:car_code');
        $this->db->bind('car_code', $car_code);
        $this->db->bind('angsuran_percent', $percent);
        $this->db->bind('tdp', $tdp);
        $this->db->bind('angsuran_12bulan', $setahun);
        $this->db->bind('angsuran_24bulan', $duatahun);
        $this->db->bind('angsuran_36bulan', $tigatahun);
        $this->db->bind('angsuran_48bulan', $empattahun);
        $this->db->bind('angsuran_60bulan', $limatahun);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function updateAngsuranTwo($car_code, $percent, $tdp, $setahun, $duatahun, $tigatahun, $empattahun, $limatahun) {
        $this->db->query('UPDATE db_angsurantwo SET angsuran_percent=:angsuran_percent,
                                                    angsuran_12bulan=:angsuran_12bulan,
                                                    angsuran_24bulan=:angsuran_24bulan,
                                                    angsuran_36bulan=:angsuran_36bulan,
                                                    angsuran_48bulan=:angsuran_48bulan,
                                                    angsuran_60bulan=:angsuran_60bulan,
                                                    tdp=:tdp
                                                    WHERE car_code=:car_code');
        $this->db->bind('car_code', $car_code);
        $this->db->bind('angsuran_percent', $percent);
        $this->db->bind('tdp', $tdp);
        $this->db->bind('angsuran_12bulan', $setahun);
        $this->db->bind('angsuran_24bulan', $duatahun);
        $this->db->bind('angsuran_36bulan', $tigatahun);
        $this->db->bind('angsuran_48bulan', $empattahun);
        $this->db->bind('angsuran_60bulan', $limatahun);
        $this->db->execute();
        return $this->db->rowCount();
    }

}