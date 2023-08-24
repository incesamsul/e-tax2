<?php

class KreditProduktifitasModel
{


    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function store($data)
    {
        $id_group = $_SESSION['login']['id'];
        $delete = "DELETE FROM kredit_produktifitas WHERE id_group = '$id_group'";
        $this->db->query($delete);
        $this->db->execute();
        foreach ($data['formData'] as $row) {

            foreach ($row['bulan'] as $realisasiArray) {

                foreach ($realisasiArray as $month => $realisasi) {
                    $cabang = $row['cabang'];
                    $tahun = $row['tahun'];
                    $id_jenis_lembar_kerja = $row['jenis_lembar_kerja'];
                    $bulan_input = $row['bulan_input'];

                    $jml_rm = explode(",", $realisasi)[0];
                    $pencarian = explode(",", $realisasi)[1];
                    $query = "INSERT INTO kredit_produktifitas (cabang,bulan,jml_rm, pencarian, id_jenis_lembar_kerja, bulan_input, tahun, id_group)
                    VALUES ('$cabang', '$month', '$jml_rm','$pencarian', '$id_jenis_lembar_kerja', '$bulan_input', '$tahun', '$id_group')";
                    $this->db->query($query);
                    $this->db->execute();
                }
            };
        }
        return $this->db->rowCount();
    }

    public function getCabangKredit()
    {
        $id_group = $_SESSION['login']['id'];
        $cabang = "SELECT cabang FROM kredit_produktifitas where id_group = '$id_group' GROUP BY cabang";
        $this->db->query($cabang);
        return $this->db->resultSet();
    }

    public function getCabangKreditFiltered($filter)
    {

        $cabang = "SELECT cabang FROM kredit_produktifitas  WHERE id_group = '$filter' GROUP BY cabang";
        $this->db->query($cabang);
        return $this->db->resultSet();
    }

    public function getUserCabang()
    {
        $cabang = "SELECT * FROM users WHERE role = 'group'";
        $this->db->query($cabang);
        return $this->db->resultSet();
    }

    public function getJenisLembarKerja()
    {
        $lk = "SELECT * FROM jenis_lembar_kerja";
        $this->db->query($lk);
        return $this->db->resultSet();
    }
}
