<?php 

class Session {
    public static function setUser($isLoggedIn, $u_code, $u_username, $u_name, $u_level)
    {
        $_SESSION['user'] = [
            'isLoggedIn' => $isLoggedIn,
            'u_code'  => $u_code,
            'u_username' => $u_username,
            'u_name' => $u_name,
            'u_level' => $u_level
        ];
    }

    public static function navbarUser(){
        if (isset($_SESSION['user'])){
            if ($_SESSION['user']['isLoggedIn'] == true) {
                if ($_SESSION['user']['u_level'] == "admin") {
                    echo '
                        <div class="dropdown">
                            <button class="dropdown-toggle ndropdown" type="button" id="dropdown-toggles" data-bs-toggle="dropdown" aria-expanded="false">
                                '. htmlspecialchars($_SESSION['user']['u_name']) .'
                                <i class="bi bi-person-circle ms-2 float-end"></i>
                            </button>
                            
                            <ul class="dropdown-menu dropdown-menu-end mt-4 w-100" aria-labelledby="dropdown-toggles">
                                <li>
                                    <a class="dropdown-item" href="'. BASEURL .'/admin/order">
                                        <i class="bi bi-bag-check me-4"></i>Pesanan Client
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="'. BASEURL .'/admin/product">
                                        <i class="bi bi-box me-4"></i>Product
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="'. BASEURL .'/admin/article">
                                        <i class="bi bi-book me-4"></i>Artikel
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="'. BASEURL .'/user/setting">
                                        <i class="bi bi-gear me-4"></i>Pengaturan
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="'. BASEURL .'/user/logout">
                                        <i class="bi bi-box-arrow-right me-4"></i>Log Out
                                    </a>
                                </li>
                            </ul>
                        </div>
                    ';
                } else {
                    echo '
                        <div class="dropdown">
                            <button class="dropdown-toggle ndropdown" type="button" id="dropdown-toggles" data-bs-toggle="dropdown" aria-expanded="false">
                                '. htmlspecialchars($_SESSION['user']['u_name']) .'
                                <i class="bi bi-person-circle ms-2 float-end"></i>
                            </button>
                            
                            <ul class="dropdown-menu dropdown-menu-end mt-4 w-100" aria-labelledby="dropdown-toggles">
                                <li>
                                    <a class="dropdown-item" href="'. BASEURL .'/user/order">
                                        <i class="bi bi-bag-check-fill me-4"></i>Pesanan
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="'. BASEURL .'/user/setting">
                                        <i class="bi bi-gear-fill me-4"></i>Pengaturan
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="'. BASEURL .'/user/logout">
                                        <i class="bi bi-box-arrow-right me-4"></i>Log Out
                                    </a>
                                </li>
                            </ul>
                        </div>
                    ';
                }
            } else {
                echo '
                    <a href="'. BASEURL .'/signin" class="btn btn-red rounded-me px-5 py-2 me-3">Masuk</a>
                    <a href="'. BASEURL .'/signup" class="btn btn-outline-red rounded-me px-5 py-2">Daftar</a>';
            }
        } else {
            echo '
                <a href="'. BASEURL .'/signin" class="btn btn-red rounded-me px-5 py-2 me-3">Masuk</a>
                <a href="'. BASEURL .'/signup" class="btn btn-outline-red rounded-me px-5 py-2">Daftar</a>';
        }
    }
}