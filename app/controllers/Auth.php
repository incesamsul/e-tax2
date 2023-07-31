<?php

class Auth extends Controller
{
    public function __construct()
    {
        if (isset($_SESSION['login'])) {
            header('location: ' . BASEURL . '/dashboard');
        }
    }

    public function index()
    {
        if (isset($_POST['signIn'])) {
            if ($this->model('AuthModel')->prosesLogin($_POST) == true) {
                header('location: ' . BASEURL . '/dashboard');
            } else {
                // echo "gagal";
            }
        }
        $this->view('auth/index');
    }

    public function logout()
    {
        session_destroy();
        header('location:' . BASEURL . '/auth');
    }
}
