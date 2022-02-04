<?php 

class Flasher {
    public static function setFlash($head, $text, $type)
    {
        $_SESSION['flash'] = [
            'head' => $head,
            'text'  => $text,
            'type'  => $type
        ];
    }

    public static function flash()
    {
        if( isset($_SESSION['flash']) ) {
            echo '<script type="text/javascript">
                    swal("'.$_SESSION['flash']['head'].'", "'.$_SESSION['flash']['text'].'", "'.$_SESSION['flash']['type'].'");
                  </script>';
            unset($_SESSION['flash']);
        }
    }
}