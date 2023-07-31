<?php

class Dashboard extends Controller
{

    public function __construct()
    {
        LoginCheck::isLogin();
    }

    public function index()
    {
        $data['judul'] = 'dashboard';
        $data['liClassActive'] = 'liDashboard';
        $data['script'] = $this->script('DashboardScript');
        if ($_SESSION['login']['role'] == 'akuntansi') {
            $data['notifikasi'] = $this->model('NotifikasiModel')->get();
        } else {
            $data['notifikasi'] = $this->model('NotifikasiModel')->getPerCabang($_SESSION['login']['id']);
        }
        $verified = 0;
        $declined = 0;
        $pending = 0;
        foreach ($data['notifikasi'] as $value) {
            if ($value['verifikasi'] == '2') {
                $declined++;
            } else if ($value['verifikasi'] == '1') {
                $verified++;
            } else {
                $pending++;
            }
        }

        $data['verified'] = $verified;
        $data['declined'] = $declined;
        $data['pending'] = $pending;
        $this->view('templates/header', $data);
        $this->view('templates/navbar', $data);
        $this->view('templates/sidebar');
        $this->view('pages/dashboard/index', $data);
        $this->view('templates/footer', $data);
    }
}
