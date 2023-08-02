<?php

class KreditRealisasi extends Controller
{
    public function __construct()
    {
        LoginCheck::isLogin();
        RoleCheck::cekLevel(['akuntansi', 'group']);
    }

    public function index($filter = null)
    {

        $data['judul'] = 'KreditRealisasi';
        $data['liClassActive'] = 'liKredit';
        $data['jenis_lembar_kerja'] = $this->model('KreditRealisasiModel')->getJenisLembarKerja();
        $data['script'] = $this->script('KreditScript');
        $this->view('templates/header', $data);
        $this->view('templates/navbar');
        $this->view('templates/sidebar');

        if (Login::role() == 'akuntansi') {
            $data['cabang'] = $this->model('KreditRealisasiModel')->getCabangKreditFiltered($filter);
            $data['user_cabang'] = $this->model('KreditRealisasiModel')->getUserCabang();
            $this->view('pages/kredit_realisasi/growth', $data);
        } else {
            $data['cabang'] = $this->model('KreditRealisasiModel')->getCabangKredit();
            $this->view('pages/kredit_realisasi/index', $data);
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
        return $this->model('KreditRealisasiModel')->store($_POST);
    }
}
