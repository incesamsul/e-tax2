<?php

class Dpk extends Controller
{
    public function __construct()
    {
        LoginCheck::isLogin();
        RoleCheck::cekLevel(['akuntansi', 'group']);
    }

    public function index()
    {

        $data['judul'] = 'DPK';
        $data['liClassActive'] = 'liDpk';
        $data['script'] = $this->script('DpkScript');
        $data['nama'] = [];
        $data['bumd_giro_cash_in'] = $this->model('DpkModel')->getDataDpk('bumd-giro-cash-in');
        $data['bumd_giro_cash_out'] = $this->model('DpkModel')->getDataDpk('bumd-giro-cash-out');
        $data['bumd_deposito_cash_in'] = $this->model('DpkModel')->getDataDpk('bumd-deposito-cash-in');
        $data['bumd_deposito_cash_out'] = $this->model('DpkModel')->getDataDpk('bumd-deposito-cash-out');
        $this->view('templates/header', $data);
        $this->view('templates/navbar');
        $this->view('templates/sidebar');

        $this->view('pages/dpk/index', $data);

        $this->view('templates/footer', $data);
    }

    public function store()
    {

        return $this->model('DpkModel')->store($_POST);
    }
}
