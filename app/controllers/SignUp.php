<?php
class SignUp extends Controller {
    public function index() {
        function generateRandomString($length = 10) {
            return substr(str_shuffle(str_repeat($x='0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
        }
        
        $u_code = generateRandomString();
        
        if (isset($_POST['submit'])) {
            if (empty($_POST['g-recaptcha-response'])) {
                Flasher::setFlash('Gagal!', 'Silahkan Isi Form Dengan Benar!', 'error');
                header('Location: ' . BASEURL . '/signup');
                exit;
            } else {
                $u_name = strip_tags($_POST['u_name']);
                $u_username = strip_tags($_POST['u_username']);
                $u_password = md5($_POST['u_password']);
                $u_telp = strip_tags($_POST['u_telp']);
                $u_whatsapp = strip_tags($_POST['u_whatsapp']);
                $u_alamat = strip_tags($_POST['u_alamat']);
                $u_level = "client";

                if ($this->model('SignupModel')->getUsers($u_code, $u_username) == 0) {
                    $this->model('SignupModel')->addUsers($u_code, $u_name, $u_username, $u_password, $u_telp, $u_whatsapp, $u_alamat, $u_level);
                    Flasher::setFlash('Success!', 'Username Telah Ditambahkan!', 'success');
                    header('Location: ' . BASEURL . '/signin');
                    exit;
                } else {
                    Flasher::setFlash('Gagal!', 'Username Sudah Ada!', 'error');
                    header('Location: ' . BASEURL . '/signup');
                    exit;
                }
            }
        }
        $data['judul'] = 'Sign Up';
        $data['dbCategory'] = $this->model('ProductModel')->getAllCategory();

        $this->view('login/signup', $data);
        $this->view('templates/footer', $data);
    }
}
