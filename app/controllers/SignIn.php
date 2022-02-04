<?php
class SignIn extends Controller {
    public function index() {
        if (isset($_POST['u_submit'])) {
            if (empty($_POST['g-recaptcha-response'])) {
                Flasher::setFlash('Gagal!', 'Silahkan Isi Form Dengan Benar!', 'error');
                header('Location: ' . BASEURL . '/signin');
                exit;
            } else {
                $u_username = $_POST['u_username'];
                $u_password = md5($_POST['u_password']);

                if ($this->model('SigninModel')->userSignIn($u_username, $u_password) == 0) {
                    Flasher::setFlash('Gagal!', 'Username/Password Salah!', 'error');
                    header('Location: ' . BASEURL . '/signin');
                    exit;
                } else {
                    $data['user'] = $this->model('SigninModel')->userSignIn($u_username, $u_password);
                    $u_code = $data['user']['u_code'];
                    $u_level = $data['user']['u_level'];
                    $u_name = $data['user']['u_name'];

                    Session::setUser(true, $u_code, $u_username, $u_name, $u_level);
                    Flasher::setFlash('Success!', 'Anda Berhasil Sign In!', 'success');
                    header('Location: ' . BASEURL . '');
                    exit;
                }
            }
        }
        $data['judul'] = 'Sign In';
        $data['dbCategory'] = $this->model('ProductModel')->getAllCategory();

        $this->view('login/signin', $data);
        $this->view('templates/footer', $data);
    }
}
