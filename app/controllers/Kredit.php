<?php

class Kredit extends Controller
{
    public function __construct()
    {
        LoginCheck::isLogin();
        RoleCheck::cekLevel(['akuntansi', 'group']);
    }

    public function index($filter = null)
    {

        $data['judul'] = 'Kredit';
        $data['liClassActive'] = 'liKredit';
        $data['cabang'] = $this->model('KreditModel')->getCabangKredit();
        $data['script'] = $this->script('KreditScript');
        $this->view('templates/header', $data);
        $this->view('templates/navbar');
        $this->view('templates/sidebar');

        if (Login::role() == 'akuntansi') {
            $this->view('pages/kredit/growth', $data);
        } else {
            $this->view('pages/kredit/index', $data);
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
        return $this->model('KreditModel')->store($_POST);
    }
}
