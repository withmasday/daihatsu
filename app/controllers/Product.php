<?php
class Product extends Controller {
    public function index() {
        $data['judul'] = 'Produk';
        $this->view('error/index', $data);
    }

    public function type($car_type = null) {
        $car_type = filter_var($car_type, FILTER_SANITIZE_URL);
        $data['judul'] = 'Produk';
        $data['isBeranda'] = '';
        $data['isProduct'] = ' active';
        $data['isArtikel'] = '';
        $data['isGallery'] = '';
        $data['isAbout'] = '';

        $data['dbProdNameOfCategory'] = $this->model('ProductModel')->getProdNameByCategory($car_type);
        $data['dbProductType'] = $this->model('ProductModel')->getProductByType($car_type);
        $data['dbCategory'] = $this->model('ProductModel')->getAllCategory();

        $this->view('templates/header', $data);
        $this->view('product/type', $data);
        $this->view('templates/footer', $data);
    }

    public function unit($car_code = null) {
        $data['judul'] = 'Produk';
        $data['isBeranda'] = '';
        $data['isProduct'] = ' active';
        $data['isArtikel'] = '';
        $data['isGallery'] = '';
        $data['isAbout'] = '';
        $data['dbCategory'] = $this->model('ProductModel')->getAllCategory();

        $car_code = filter_var($car_code, FILTER_SANITIZE_URL);
        if ($this->model('ProductModel')->getProductByCode($car_code) == 0 || $this->model('ProductModel')->getProductAngsuranOne($car_code) == 0 || $this->model('ProductModel')->getProductAngsuranTwo($car_code) == 0) {
            $this->view('templates/header', $data);
            $this->view('error/index', $data);
            $this->view('templates/footer', $data);
        } else {
            $data['dbProductCode'] = $this->model('ProductModel')->getProductByCode($car_code);
            $AngsuranOne = $this->model('ProductModel')->getProductAngsuranOne($car_code);
            $AngsuranTwo = $this->model('ProductModel')->getProductAngsuranTwo($car_code);
            if (!empty($AngsuranOne) || !empty($AngsuranTwo)) {
                $data['dbAngsuran'] = array($AngsuranOne[0], $AngsuranTwo[0]);
            } else {
                $data['dbAngsuran'] = array();
            }

            $_SESSION['car_code'] = $data['dbProductCode']['car_code'];
            $this->view('templates/header', $data);
            $this->view('product/unit', $data);
            $this->view('templates/footer', $data);
        }
    }
}
