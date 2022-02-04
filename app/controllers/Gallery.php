<?php 

class Gallery extends Controller {
    public function index() {   
        $data['dbCategory'] = $this->model('ProductModel')->getAllCategory();
        $data['dbAllProduct'] = $this->model('ProductModel')->getAllProduct();
        $data['dbNewProduct'] = $this->model('ProductModel')->getNewProduct();

        $data['judul'] = 'Gallery Delivery';
        $data['isBeranda'] = '';
        $data['isProduct'] = '';
        $data['isArtikel'] = '';
        $data['isGallery'] = ' active';
        $data['isAbout'] = '';

        $this->view('templates/header', $data);
        $this->view('gallery/index', $data);
        $this->view('templates/footer', $data);
    }
}

