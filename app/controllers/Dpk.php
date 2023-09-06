<?php

class Dpk extends Controller
{
    public function __construct()
    {
        LoginCheck::isLogin();
        RoleCheck::cekLevel(['akuntansi', 'group_hbl', 'group_sya']);
    }

    public function index()
    {
        if ($_SESSION['login']['role'] == 'group_sya') {
            header('location:dpk/syariah');
        }

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


    public function non_bumd()
    {

        $data['judul'] = 'DPK';
        $data['liClassActive'] = 'liDpk';
        $data['script'] = $this->script('DpkScriptNonBumd');
        $data['nama'] = [];
        $data['nonbumd_giro_cash_in'] = $this->model('DpkModel')->getDataDpk('nonbumd-giro-cash-in');
        $data['nonbumd_giro_cash_out'] = $this->model('DpkModel')->getDataDpk('nonbumd-giro-cash-out');
        $data['nonbumd_deposito_cash_in'] = $this->model('DpkModel')->getDataDpk('nonbumd-deposito-cash-in');
        $data['nonbumd_deposito_cash_out'] = $this->model('DpkModel')->getDataDpk('nonbumd-deposito-cash-out');
        $this->view('templates/header', $data);
        $this->view('templates/navbar');
        $this->view('templates/sidebar');

        $this->view('pages/dpk/non_bumd', $data);

        $this->view('templates/footer', $data);
    }

    public function syariah()
    {

        $data['judul'] = 'DPK';
        $data['liClassActive'] = 'liDpk';
        $data['script'] = $this->script('DpkScriptSyariah');
        $data['nama'] = [];
        $data['syariah_giro_cash_in'] = $this->model('DpkModel')->getDataDpk('syariah-giro-cash-in');
        $data['syariah_giro_cash_out'] = $this->model('DpkModel')->getDataDpk('syariah-giro-cash-out');
        $data['syariah_deposito_cash_in'] = $this->model('DpkModel')->getDataDpk('syariah-deposito-cash-in');
        $data['syariah_deposito_cash_out'] = $this->model('DpkModel')->getDataDpk('syariah-deposito-cash-out');
        $data['syariah_tabungan_cash_in'] = $this->model('DpkModel')->getDataDpk('syariah-tabungan-cash-in');
        $data['syariah_tabungan_cash_out'] = $this->model('DpkModel')->getDataDpk('syariah-tabungan-cash-out');
        $this->view('templates/header', $data);
        $this->view('templates/navbar');
        $this->view('templates/sidebar');

        $this->view('pages/dpk/syariah', $data);

        $this->view('templates/footer', $data);
    }

    public function store()
    {

        return $this->model('DpkModel')->store($_POST);
    }

    public function store_non_bumd()
    {
        echo 1;
        die;
    }
}
