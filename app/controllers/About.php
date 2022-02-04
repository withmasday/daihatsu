<?php 

class About extends Controller {
    public function index() {   
        $data['dbCategory'] = $this->model('ProductModel')->getAllCategory();
        $data['dbAllProduct'] = $this->model('ProductModel')->getAllProduct();
        $data['dbNewProduct'] = $this->model('ProductModel')->getNewProduct();

        $data['judul'] = 'Tentang Kami';
        $data['isBeranda'] = '';
        $data['isProduct'] = '';
        $data['isArtikel'] = '';
        $data['isGallery'] = '';
        $data['isAbout'] = ' active';

        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer', $data);
    }
}

