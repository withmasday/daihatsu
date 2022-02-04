<?php
class Checkout extends Controller {
    public function index() {
        if (isset($_SESSION['user'])) {
            $isLoggedIn = $_SESSION['user']['isLoggedIn'];
            $u_code = $_SESSION['user']['u_code'];
            $car_code = $_SESSION['car_code'];

            if ($isLoggedIn == true) {
                $data['judul'] = 'Checkout';
                $data['isBeranda'] = '';
                $data['isProduct'] = ' active';
                $data['isArtikel'] = '';
                $data['isGallery'] = '';
                $data['isAbout'] = '';

                $data['dbCategory'] = $this->model('ProductModel')->getAllCategory();
                $data['dbProductCode'] = $this->model('ProductModel')->getProductByCode($car_code);
                $data['dbUserCode'] = $this->model('SigninModel')->getUserByCode($u_code);
                $AngsuranOne = $this->model('ProductModel')->getProductAngsuranOne($car_code);
                $AngsuranTwo = $this->model('ProductModel')->getProductAngsuranTwo($car_code);
                if (!empty($AngsuranOne) || !empty($AngsuranTwo)) {
                    $data['dbAngsuran'] = array($AngsuranOne[0], $AngsuranTwo[0]);
                } else {
                    $data['dbAngsuran'] = array();
                }

                $this->view('templates/header', $data);
                $this->view('checkout/index', $data);
                $this->view('templates/footer', $data);

                $car_name = $data['dbProductCode']['car_name'];
                $car_image = $data['dbProductCode']['car_image'];

                if (isset($_POST['checkout'])) {
                    $pembayaran = strip_tags($_POST['pembayaran']);
                    $u_name = strip_tags($_POST['u_name']);
                    $u_telp = strip_tags($_POST['u_telp']);
                    $u_whatsapp = strip_tags($_POST['u_whatsapp']);
                    $u_alamat = strip_tags($_POST['u_alamat']);
                    $order_date = date("Y/m/d");
                    $order_status = false;
        
                    if (empty($pembayaran) || empty($u_name) || empty($u_telp) || empty($u_whatsapp) || empty($u_alamat)) {
                        Flasher::setFlash('Gagal!', 'Silahkan Isi Form Dengan Benar!', 'error');
                        echo("<script>location.href = '".BASEURL."/checkout';</script>");
                    } else {
                        $this->model('CheckoutModel')->createNewOrder($car_code, $car_name, $car_image, $u_code, $u_name, $u_telp, $u_whatsapp, $u_alamat, $order_date, $order_status, $pembayaran);
                        Flasher::setFlash('Success!', 'Anda Berhasil Melakukan Order!', 'success');
                        echo("<script>location.href = '".BASEURL."/user/order';</script>");
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
}
