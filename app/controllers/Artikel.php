<?php 

class Artikel extends Controller {
    public function index() {   
        $data['dbCategory'] = $this->model('ProductModel')->getAllCategory();
        $data['dbArtikel'] = $this->model('ArtikelModel')->getAllArticle();

        $data['judul'] = 'Home';
        $data['isBeranda'] = '';
        $data['isProduct'] = '';
        $data['isArtikel'] = ' active';
        $data['isGallery'] = '';
        $data['isAbout'] = '';

        $this->view('templates/header', $data);
        $this->view('artikel/index', $data);
        $this->view('templates/footer', $data);
    }

    public function read($artikel_code = null) {
        $data['judul'] = 'Home';
        $data['isBeranda'] = '';
        $data['isProduct'] = '';
        $data['isArtikel'] = ' active';
        $data['isGallery'] = '';
        $data['isAbout'] = '';
        
        $data['dbCategory'] = $this->model('ProductModel')->getAllCategory();
        $data['dbArtikel'] = $this->model('ArtikelModel')->getAllArticle();

        $car_type = filter_var($artikel_code, FILTER_SANITIZE_URL);
        if ($this->model('ArtikelModel')->getArticleByCode($artikel_code) == 0){
            $this->view('templates/header', $data);
            $this->view('error/index', $data);
            $this->view('templates/footer', $data);
        } else {
            $data['dbArtikelByCode'] = $this->model('ArtikelModel')->getArticleByCode($artikel_code);
            $this->view('templates/header', $data);
            $this->view('artikel/read', $data);
            $this->view('templates/footer', $data);
        }  
    }
}

