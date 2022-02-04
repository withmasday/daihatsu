<?php 

class Home extends Controller {
    public function index() {   
        $data['dbCategory'] = $this->model('ProductModel')->getAllCategory();
        $data['dbAllProduct'] = $this->model('ProductModel')->getAllProduct();
        $data['dbNewProduct'] = $this->model('ProductModel')->getNewProduct();

        $data['judul'] = 'Home';
        $data['isBeranda'] = ' active';
        $data['isProduct'] = '';
        $data['isArtikel'] = '';
        $data['isGallery'] = '';
        $data['isAbout'] = '';

        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer', $data);
    }
}

