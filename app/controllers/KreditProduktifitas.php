<?php

class KreditProduktifitas extends Controller
{
    public function __construct()
    {
        LoginCheck::isLogin();
        RoleCheck::cekLevel(['akuntansi', 'group']);
    }

    public function index($filter = null)
    {

        $data['judul'] = 'KreditProduktifitas';
        $data['liClassActive'] = 'liKredit';
        $data['jenis_lembar_kerja'] = $this->model('KreditProduktifitasModel')->getJenisLembarKerja();
        $data['script'] = $this->script('KreditProduktifitas');
        $this->view('templates/header', $data);
        $this->view('templates/navbar');
        $this->view('templates/sidebar');

        if (Login::role() == 'akuntansi') {
            $data['cabang'] = $this->model('KreditProduktifitasModel')->getCabangKreditFiltered($filter);
            $data['user_cabang'] = $this->model('KreditProduktifitasModel')->getUserCabang();
            $this->view('pages/kredit_produktifitas/growth', $data);
        } else {
            $data['cabang'] = $this->model('KreditProduktifitasModel')->getCabangKredit();
            $this->view('pages/kredit_produktifitas/index', $data);
        }


        $this->view('templates/footer', $data);
    }

    // public function create()
    // {
    //     $data['judul'] = 'create pengguna';
    //     $data['liClassActive'] = 'liPengguna';
    //     $this->view('templates/header', $data);
    //     $this->view('templates/navbar');
    //     $this->view('templates/sidebar');
    //     $this->view('pages/kredit/create');
    //     $this->view('templates/footer', $data);
    // }

    public function store()
    {
        return $this->model('KreditProduktifitasModel')->store($_POST);
    }
}
