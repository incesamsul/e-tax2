<?php

class Pajak extends Controller
{
    public function __construct()
    {
        LoginCheck::isLogin();
        RoleCheck::cekLevel(['akuntansi']);
    }

    public function index()
    {
        $data['judul'] = 'DPK';
        $data['liClassActive'] = 'liDpk';
        $data['pengguna'] = $this->model('PenggunaModel')->getUserHblAndSya();

        $this->view('templates/header', $data);
        $this->view('templates/navbar');
        $this->view('templates/sidebar');

        $this->view('pages/pajak/dpk/index', $data);

        $this->view('templates/footer', $data);
    }

    public function dpk()
    {
        $data['judul'] = 'DPK';
        $data['liClassActive'] = 'liDpk';
        $data['pengguna'] = $this->model('PenggunaModel')->getUserHblAndSya();

        $this->view('templates/header', $data);
        $this->view('templates/navbar');
        $this->view('templates/sidebar');

        $this->view('pages/pajak/dpk/index', $data);

        $this->view('templates/footer', $data);
    }

    public function detail_dpk($id)
    {
        $data['judul'] = 'DPK';
        $data['liClassActive'] = 'liDpk';
        $data['script'] = $this->script('DpkScript');
        $data['nama'] = [];
        $data['bumd_giro_cash_in'] = $this->model('DpkModel')->getDataDpkPerGrup('bumd-giro-cash-in', $id);
        $data['bumd_giro_cash_out'] = $this->model('DpkModel')->getDataDpkPerGrup('bumd-giro-cash-out', $id);
        $data['bumd_deposito_cash_in'] = $this->model('DpkModel')->getDataDpkPerGrup('bumd-deposito-cash-in', $id);
        $data['bumd_deposito_cash_out'] = $this->model('DpkModel')->getDataDpkPerGrup('bumd-deposito-cash-out', $id);
        $data['id'] = $id;
        $this->view('templates/header', $data);
        $this->view('templates/navbar');
        $this->view('templates/sidebar');

        $this->view('pages/pajak/dpk/detail', $data);

        $this->view('templates/footer', $data);
    }

    public function detail_dpk_nonbumd($id)
    {
        $data['judul'] = 'DPK';
        $data['liClassActive'] = 'liDpk';
        $data['script'] = $this->script('DpkScript');
        $data['nama'] = [];
        $data['nonbumd_giro_cash_in'] = $this->model('DpkModel')->getDataDpkPerGrup('nonbumd-giro-cash-in', $id);
        $data['nonbumd_giro_cash_out'] = $this->model('DpkModel')->getDataDpkPerGrup('nonbumd-giro-cash-out', $id);
        $data['nonbumd_deposito_cash_in'] = $this->model('DpkModel')->getDataDpkPerGrup('nonbumd-deposito-cash-in', $id);
        $data['nonbumd_deposito_cash_out'] = $this->model('DpkModel')->getDataDpkPerGrup('nonbumd-deposito-cash-out', $id);
        $data['id'] = $id;
        $this->view('templates/header', $data);
        $this->view('templates/navbar');
        $this->view('templates/sidebar');

        $this->view('pages/pajak/dpk/detail_nonbumd', $data);

        $this->view('templates/footer', $data);
    }

    public function detail_dpk_syariah($id)
    {
        $data['judul'] = 'DPK';
        $data['liClassActive'] = 'liDpk';
        $data['script'] = $this->script('DpkScript');
        $data['nama'] = [];
        $data['syariah_giro_cash_in'] = $this->model('DpkModel')->getDataDpkPerGrup('syariah-giro-cash-in', $id);
        $data['syariah_giro_cash_out'] = $this->model('DpkModel')->getDataDpkPerGrup('syariah-giro-cash-out', $id);
        $data['syariah_deposito_cash_in'] = $this->model('DpkModel')->getDataDpkPerGrup('syariah-deposito-cash-in', $id);
        $data['syariah_deposito_cash_out'] = $this->model('DpkModel')->getDataDpkPerGrup('syariah-deposito-cash-out', $id);
        $data['id'] = $id;
        $this->view('templates/header', $data);
        $this->view('templates/navbar');
        $this->view('templates/sidebar');

        $this->view('pages/pajak/dpk/detail_syariah', $data);

        $this->view('templates/footer', $data);
    }
}
