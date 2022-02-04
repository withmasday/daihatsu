<?php
class User extends Controller {
    public function index() {
        if (isset($_SESSION['user'])) {
            $isLoggedIn = $_SESSION['user']['isLoggedIn'];

            if ($isLoggedIn == true) {
                $data['judul'] = 'Checkout';
                $data['isBeranda'] = '';
                $data['isProduct'] = ' active';
                $data['isArtikel'] = '';
                $data['isGallery'] = '';
                $data['isAbout'] = '';

                $u_code = $_SESSION['user']['u_code'];

                $data['dbCategory'] = $this->model('ProductModel')->getAllCategory();
                $data['dbUserOrder'] = $this->model('UserModel')->getUserOrder($u_code);

                $this->view('templates/header', $data);
                $this->view('user/index', $data);
                $this->view('templates/footer', $data);

            } else {
                header('Location: ' . BASEURL . '/signin');
                exit;
            }

        } else {
            header('Location: ' . BASEURL . '/signin');
            exit;
        }
    }

    public function setting() {
        if (isset($_SESSION['user'])) {
            $isLoggedIn = $_SESSION['user']['isLoggedIn'];

            if ($isLoggedIn == true) {
                $data['judul'] = 'Setting';
                $data['isBeranda'] = '';
                $data['isProduct'] = '';
                $data['isArtikel'] = '';
                $data['isGallery'] = '';
                $data['isAbout'] = '';

                $u_code = $_SESSION['user']['u_code'];
                $u_username = $_SESSION['user']['u_username'];
                $u_level = 'client';

                $data['dbCategory'] = $this->model('ProductModel')->getAllCategory();
                $data['dbUserData'] = $this->model('UserModel')->getUserData($u_code);

                $this->view('templates/header', $data);
                $this->view('user/setting', $data);
                $this->view('templates/footer', $data);

                if (isset($_POST['update'])) {
                    $u_name = strip_tags($_POST['u_name']);
                    $u_telp = strip_tags($_POST['u_telp']);
                    $u_whatsapp = strip_tags($_POST['u_whatsapp']);
                    $u_alamat = strip_tags($_POST['u_alamat']);

                    if (empty($u_name) || empty($u_telp) || empty($u_whatsapp) || empty($u_alamat)) {
                        Flasher::setFlash('Gagal!', 'Silahkan Isi Form Dengan Benar!', 'error');
                        echo("<script>location.href = '".BASEURL."/user/setting';</script>");
                    } else {
                        $this->model('UserModel')->updateUserData($u_code, $u_name, $u_telp, $u_whatsapp, $u_alamat);
                        Flasher::setFlash('Success!', 'Data Berhasil Di Ubah!', 'success');
                        Session::setUser(true, $u_code, $u_username, $u_name, $u_level);
                        echo("<script>location.href = '".BASEURL."/user/setting';</script>");
                    }
                }

            } else {
                header('Location: ' . BASEURL . '/signin');
                exit;
            }

        } else {
            header('Location: ' . BASEURL . '/signin');
            exit;
        }
    }

    public function logout() {
        session_destroy();
        header('Location: ' . BASEURL . '/');
        exit;
    }
}
