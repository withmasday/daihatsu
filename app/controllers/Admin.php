<?php 

class Admin extends Controller {
    public function index() {
        if (isset($_SESSION['user'])) {
            $isLoggedIn = $_SESSION['user']['isLoggedIn'];
            $u_level = $_SESSION['user']['u_level'];

            if ($isLoggedIn == true || $u_level == 'admin') {
                $data['dbCategory'] = $this->model('ProductModel')->getAllCategory();
                $data['dbAllProduct'] = $this->model('ProductModel')->getAllProduct();
                $data['dbNewProduct'] = $this->model('ProductModel')->getNewProduct();
                $data['dbAllOrder'] = $this->model('AdminModel')->getAllOrder();

                $data['judul'] = 'Admin Web';
                $data['isBeranda'] = '';
                $data['isProduct'] = '';
                $data['isArtikel'] = '';
                $data['isGallery'] = '';
                $data['isAbout'] = '';

                $this->view('templates/header', $data);
                $this->view('admin/index', $data);
                $this->view('templates/footer', $data);

            } else {
                header('Location: ' . BASEURL . '/');
                exit;
            }

        } else {
            header('Location: ' . BASEURL . '/signin');
            exit;
        }
    }

    public function verify() {
        if (isset($_SESSION['user'])) {
            $isLoggedIn = $_SESSION['user']['isLoggedIn'];
            $u_level = $_SESSION['user']['u_level'];

            if ($isLoggedIn == true || $u_level == 'admin') {
                if (isset($_POST['verify'])) {
                    $car_code = strip_tags($_POST['car_code']);
                    $u_code = strip_tags($_POST['u_code']);
                    $this->model('AdminModel')->verifyOrder($car_code, $u_code);

                } elseif (isset($_POST['show'])) {
                    $car_code = strip_tags($_POST['car_code']);
                    $u_code = strip_tags($_POST['u_code']);
                    $result = $this->model('AdminModel')->getOrderPoint($car_code, $u_code);
                    header('Content-Type: application/json');
                    echo json_encode($result);

                } else {
                    header('Location: ' . BASEURL . '/');
                    exit;
                }

            } else {
                header('Location: ' . BASEURL . '/');
                exit;
            }

        } else {
            header('Location: ' . BASEURL . '/signin');
            exit;
        }
    }

    public function product($car_code = null) {
        if (isset($_SESSION['user'])) {
            $isLoggedIn = $_SESSION['user']['isLoggedIn'];
            $u_level = $_SESSION['user']['u_level'];

            if ($isLoggedIn == true || $u_level == 'admin') {
                $data['dbCategory'] = $this->model('ProductModel')->getAllCategory();
                $data['dbAllProduct'] = $this->model('ProductModel')->getAllProduct();
                $data['dbNewProduct'] = $this->model('ProductModel')->getNewProduct();
                $data['dbAllOrder'] = $this->model('AdminModel')->getAllOrder();

                $data['judul'] = 'Admin Web';
                $data['isBeranda'] = '';
                $data['isProduct'] = '';
                $data['isArtikel'] = '';
                $data['isGallery'] = '';
                $data['isAbout'] = '';
                
                if ($car_code == null) {
                    $this->view('templates/header', $data);
                    $this->view('admin/product', $data);
                    $this->view('templates/footer', $data);

                } else {
                    if ($this->model('ProductModel')->getProductByCode($car_code) == 0) {
                        $this->view('error/index', $data);
                    } else {
                        if (isset($_POST['updatecar'])) {
                            $car_name = strip_tags($_POST['car_name']);
                            $car_price = strip_tags($_POST['car_price']);
                            $car_type = strip_tags($_POST['car_type']);
                            $car_detail = strip_tags($_POST['car_detail']);

                            if (empty($_POST['car_image'])) {
                                $this->model('AdminModel')->updateCarNoImage($car_code, $car_name, $car_price, $car_type, $car_detail);
                                Flasher::setFlash('Success!', 'Data Berhasil Di Ubah!', 'success');
                                header('Location: ' . BASEURL . '/admin/product/'. $car_code);
                                exit;
                            } else {
                                $ekstensi_diperbolehkan	= array('png','jpg','jpeg');
                                $car_image = $_FILES['car_image']['name'];
                                $x = explode('.', $car_image);
                                $ekstensi = strtolower(end($x));
                                $ukuran	= $_FILES['car_image']['size'];
                                $file_tmp = $_FILES['car_image']['tmp_name'];	
                            
                                if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
                                    if($ukuran < 1044070){
                                        move_uploaded_file($file_tmp, 'img/'.$car_image);
                                        $this->model('AdminModel')->updateCar($car_code, $car_name, $car_price, $car_type, $car_detail, $car_image);
                                        Flasher::setFlash('Success!', 'Data Berhasil Di Ubah!', 'success');
                                        header('Location: ' . BASEURL . '/admin/product/'. $car_code);
                                        exit;
                                    } else {
                                        Flasher::setFlash('Gagal!', 'Ukuran Gambar Terlalu Besar!', 'error');
                                        header('Location: ' . BASEURL . '/admin/product/'. $car_code);
                                        exit;
                                    }
                                } else {
                                    Flasher::setFlash('Gagal!', 'Data Gagal Di Ubah!', 'error');
                                    header('Location: ' . BASEURL . '/admin/product/'. $car_code);
                                    exit;
                                }
                            }
                        }

                        if (isset($_POST['angsuranone'])) {
                            $percent = strip_tags($_POST['angsuranone_percent']);
                            $tdp = strip_tags($_POST['angsuranone_tdp']);
                            $setahun = strip_tags($_POST['angsuranone_12bulan']);
                            $duatahun = strip_tags($_POST['angsuranone_24bulan']);
                            $tigatahun = strip_tags($_POST['angsuranone_36bulan']);
                            $empattahun = strip_tags($_POST['angsuranone_48bulan']);
                            $limatahun = strip_tags($_POST['angsuranone_60bulan']);

                            $this->model('AdminModel')->updateAngsuranOne($car_code, $percent, $tdp, $setahun, $duatahun, $tigatahun, $empattahun, $limatahun);
                            header('Location: ' . BASEURL . '/admin/product/'. $car_code);
                            exit;
                        }

                        if (isset($_POST['angsurantwo'])) {
                            $percent = strip_tags($_POST['angsurantwo_percent']);
                            $tdp = strip_tags($_POST['angsurantwo_tdp']);
                            $setahun = strip_tags($_POST['angsurantwo_12bulan']);
                            $duatahun = strip_tags($_POST['angsurantwo_24bulan']);
                            $tigatahun = strip_tags($_POST['angsurantwo_36bulan']);
                            $empattahun = strip_tags($_POST['angsurantwo_48bulan']);
                            $limatahun = strip_tags($_POST['angsurantwo_60bulan']);

                            $this->model('AdminModel')->updateAngsuranTwo($car_code, $percent, $tdp, $setahun, $duatahun, $tigatahun, $empattahun, $limatahun);
                            header('Location: ' . BASEURL . '/admin/product/'. $car_code);
                            exit;
                        }

                        $data['dbProductCode'] = $this->model('ProductModel')->getProductByCode($car_code);
                        $data['dbAngsuranOne'] = $this->model('ProductModel')->getProductAngsuranOne($car_code);
                        $data['dbAngsuranTwo'] = $this->model('ProductModel')->getProductAngsuranTwo($car_code);
    
                        $this->view('templates/header', $data);
                        $this->view('admin/edit', $data);
                        $this->view('templates/footer', $data);
                    }
                }

            } else {
                header('Location: ' . BASEURL . '/');
                exit;
            }

        } else {
            header('Location: ' . BASEURL . '/signin');
            exit;
        }
    }

    public function delete($car_code = null) {
        if (isset($_SESSION['user'])) {
            $isLoggedIn = $_SESSION['user']['isLoggedIn'];
            $u_level = $_SESSION['user']['u_level'];

            if ($isLoggedIn == true || $u_level == 'admin') {
                if ($car_code == null) {
                    header('Location: ' . BASEURL . '/admin/product');
                    exit;
                } else {
                    if ($this->model('ProductModel')->getProductByCode($car_code) == 0) {
                        $this->view('error/index');
                    } else {
                        $this->model('AdminModel')->deleteProductByCode($car_code);
                        Flasher::setFlash('Success!', 'Data Berhasil Di Hapus!', 'success');
                        header('Location: ' . BASEURL . '/admin/product');
                        exit;
                    }
                }

            } else {
                header('Location: ' . BASEURL . '/');
                exit;
            }

        } else {
            header('Location: ' . BASEURL . '/signin');
            exit;
        }
    }

    public function newproduct() {
        if (isset($_SESSION['user'])) {
            $isLoggedIn = $_SESSION['user']['isLoggedIn'];
            $u_level = $_SESSION['user']['u_level'];

            function generateRandomString($length = 10) {
                return substr(str_shuffle(str_repeat($x='0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
            }
            
            $car_code = generateRandomString();

            if ($isLoggedIn == true || $u_level == 'admin') {
                if (isset($_POST['newproduct'])) {
                    $car_name = strip_tags($_POST['car_name']);
                    $car_price = strip_tags($_POST['car_price']);
                    $car_type = strip_tags($_POST['car_type']);
                    $car_detail = strip_tags($_POST['car_detail']);

                    $percentone = strip_tags($_POST['angsuranone_percent']);
                    $tdpone = strip_tags($_POST['angsuranone_tdp']);
                    $setahunone = strip_tags($_POST['angsuranone_12bulan']);
                    $duatahunone = strip_tags($_POST['angsuranone_24bulan']);
                    $tigatahunone = strip_tags($_POST['angsuranone_36bulan']);
                    $empattahunone = strip_tags($_POST['angsuranone_48bulan']);
                    $limatahunone = strip_tags($_POST['angsuranone_60bulan']);

                    $percenttwo = strip_tags($_POST['angsurantwo_percent']);
                    $tdptwo = strip_tags($_POST['angsurantwo_tdp']);
                    $setahuntwo = strip_tags($_POST['angsurantwo_12bulan']);
                    $duatahuntwo = strip_tags($_POST['angsurantwo_24bulan']);
                    $tigatahuntwo = strip_tags($_POST['angsurantwo_36bulan']);
                    $empattahuntwo = strip_tags($_POST['angsurantwo_48bulan']);
                    $limatahuntwo = strip_tags($_POST['angsurantwo_60bulan']);
                    
                    if (empty($_FILES['car_image']['name'])) {
                        Flasher::setFlash('Invalid!', 'Silahkan Unggah Gambar!', 'error');
                        header('Location: ' . BASEURL . '/admin/newproduct/');
                        exit;
                    } else {
                        $ekstensi_diperbolehkan	= array('png','jpg','jpeg');
                        $car_image = $_FILES['car_image']['name'];
                        $x = explode('.', $car_image);
                        $ekstensi = strtolower(end($x));
                        $ukuran	= $_FILES['car_image']['size'];
                        $file_tmp = $_FILES['car_image']['tmp_name'];	
                            
                        if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
                            if($ukuran < 1544070){
                                move_uploaded_file($file_tmp, 'img/'.$car_image);
                                $this->model('AdminModel')->addCar($car_name, $car_price, $car_image, $car_type, $car_code, $car_detail);
                                $this->model('AdminModel')->addAngsuranOne($car_code, $percentone, $tdpone, $setahunone, $duatahunone, $tigatahunone, $empattahunone, $limatahunone);
                                $this->model('AdminModel')->addAngsuranTwo($car_code, $percenttwo, $tdptwo, $setahuntwo, $duatahuntwo, $tigatahuntwo, $empattahuntwo, $limatahuntwo);

                                Flasher::setFlash('Success!', 'Data Berhasil Di Tambahkan!', 'success');
                                header('Location: ' . BASEURL . '/admin/product/');
                                exit;

                            } else {
                                Flasher::setFlash('Gagal!', 'Ukuran Gambar Terlalu Besar!', 'error');
                                header('Location: ' . BASEURL . '/admin/newproduct/');
                                exit;
                            }
                        
                        } else {
                            Flasher::setFlash('Gagal!', 'Data Gagal Di Ubah!', 'error');
                            header('Location: ' . BASEURL . '/admin/newproduct/');
                            exit;
                        }
                    }
                }
                $data['dbCategory'] = $this->model('ProductModel')->getAllCategory();
                $data['dbAllProduct'] = $this->model('ProductModel')->getAllProduct();
                $data['dbNewProduct'] = $this->model('ProductModel')->getNewProduct();
                $data['dbAllOrder'] = $this->model('AdminModel')->getAllOrder();

                $data['judul'] = 'Admin Web';
                $data['isBeranda'] = '';
                $data['isProduct'] = '';
                $data['isArtikel'] = '';
                $data['isGallery'] = '';
                $data['isAbout'] = '';
                
                $this->view('templates/header', $data);
                $this->view('admin/newproduct', $data);
                $this->view('templates/footer', $data);
            }
        }
    }


    public function article($paramsURL = null) {
        if (isset($_SESSION['user'])) {
            $isLoggedIn = $_SESSION['user']['isLoggedIn'];
            $u_level = $_SESSION['user']['u_level'];

            if ($isLoggedIn == true || $u_level == 'admin') {
                $data['dbCategory'] = $this->model('ProductModel')->getAllCategory();

                $data['judul'] = 'Admin Web';
                $data['isBeranda'] = '';
                $data['isProduct'] = '';
                $data['isArtikel'] = '';
                $data['isGallery'] = '';
                $data['isAbout'] = '';
                
                if ($paramsURL == null) {
                    if (isset($_POST['updatearticle'])) {
                        $artikel_name = strip_tags($_POST['article_name']);
                        $artikel_value = strip_tags($_POST['article_value']);
                        $artikel_code = strip_tags($_POST['article_code']);
                        $artikel_by = $_SESSION['user']['u_username'];
                        $artikel_date = date("Y/m/d");

                        if ($_FILES['article_image']['name'] == "") {
                            $this->model('ArtikelModel')->updateArticleNoImage($artikel_code, $artikel_name, $artikel_value, $artikel_by, $artikel_date);
                            Flasher::setFlash('Success!', 'Data Berhasil Di Ubah!', 'success');
                            header('Location: ' . BASEURL . '/admin/article');
                            exit;
                        } else {
                            $ekstensi_diperbolehkan	= array('png','jpg','jpeg');
                            $artikel_image = $_FILES['article_image']['name'];
                            $x = explode('.', $artikel_image);
                            $ekstensi = strtolower(end($x));
                            $ukuran	= $_FILES['article_image']['size'];
                            $file_tmp = $_FILES['article_image']['tmp_name'];	
                        
                            if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
                                if($ukuran < 1044070){
                                    move_uploaded_file($file_tmp, 'img/'.$artikel_image);
                                    $this->model('ArtikelModel')->updateArticleByCode($artikel_code, $artikel_name, $artikel_value, $artikel_by, $artikel_date, $artikel_image);
                                    Flasher::setFlash('Success!', 'Data Berhasil Di Ubah!', 'success');
                                    header('Location: ' . BASEURL . '/admin/article');
                                    exit;
                                } else {
                                    Flasher::setFlash('Gagal!', 'Ukuran Gambar Terlalu Besar!', 'error');
                                    header('Location: ' . BASEURL . '/admin/article');
                                    exit;
                                }
                            } else {
                                Flasher::setFlash('Gagal!', 'Data Gagal Di Ubah!', 'error');
                                header('Location: ' . BASEURL . '/admin/article');
                                exit;
                            }
                        }
                    }

                    if (isset($_POST['createarticle'])) {
                        function generateRandomString($length = 10) {
                            return substr(str_shuffle(str_repeat($x='0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
                        }
                        $artikel_name = strip_tags($_POST['article_name']); 
                        $artikel_value = strip_tags($_POST['article_value']);
                        $artikel_by = $_SESSION['user']['u_username'];
                        $artikel_date = date("Y/m/d");
                        
                        $artikel_code = generateRandomString();

                        if ($_FILES['article_image']['name'] == "") {
                            Flasher::setFlash('Invalid!', 'Silahkan Unggah Gambar!', 'success');
                            header('Location: ' . BASEURL . '/admin/article');
                            exit;
                        } else {
                            $ekstensi_diperbolehkan	= array('png','jpg','jpeg');
                            $artikel_image = $_FILES['article_image']['name'];
                            $x = explode('.', $artikel_image);
                            $ekstensi = strtolower(end($x));
                            $ukuran	= $_FILES['article_image']['size'];
                            $file_tmp = $_FILES['article_image']['tmp_name'];	
                        
                            if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
                                if($ukuran < 1044070){
                                    move_uploaded_file($file_tmp, 'img/'.$artikel_image);
                                    $this->model('ArtikelModel')->createArticle($artikel_code, $artikel_name, $artikel_value, $artikel_by, $artikel_date, $artikel_image);
                                    Flasher::setFlash('Success!', 'Data Berhasil Di Tambahkan!', 'success');
                                    header('Location: ' . BASEURL . '/admin/article');
                                    exit;
                                } else {
                                    Flasher::setFlash('Gagal!', 'Ukuran Gambar Terlalu Besar!', 'error');
                                    header('Location: ' . BASEURL . '/admin/article');
                                    exit;
                                }
                            } else {
                                Flasher::setFlash('Gagal!', 'Data Gagal Di Ubah!', 'error');
                                header('Location: ' . BASEURL . '/admin/article');
                                exit;
                            }
                        }
                    }

                    $data['dbArtikel'] = $this->model('ArtikelModel')->getAllArticle();
                    $this->view('templates/header', $data);
                    $this->view('admin/article', $data);
                    $this->view('templates/footer', $data);

                } elseif ($paramsURL == "data") {
                    if (isset($_POST['article_code'])) {
                        $article_code = strip_tags($_POST['article_code']);
                        $result = $this->model('ArtikelModel')->getArticleByCode($article_code);
                        header('Content-Type: application/json');
                        echo json_encode($result);
                    } else {
                        $this->view('error/index', $data);
                    }

                } elseif ($paramsURL == "delete") {
                    if (isset($_POST['article_code'])) {
                        $artikel_code = strip_tags($_POST['article_code']);
                        $this->model('ArtikelModel')->deleteArticleByCode($artikel_code);
                    } else {
                        $this->view('error/index', $data);
                    }

                } else {
                    $this->view('error/index', $data);
                }

            } else {
                header('Location: ' . BASEURL . '/');
                exit;
            }

        } else {
            header('Location: ' . BASEURL . '/signin');
            exit;
        }
    }
}