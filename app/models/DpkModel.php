<?php

class DpkModel
{


    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function store($data)
    {
        $id_group = $_SESSION['login']['id'];
        $tipe = $data['formData'][0]['tipe'];
        $delete = "DELETE FROM dpk WHERE id_group = '$id_group' and tipe = '$tipe'";
        $this->db->query($delete);
        $this->db->execute();
        foreach ($data['formData'] as $key => $row) {



            $nama = $row['nama'];
            $nominal = $row['nominal'];
            $rate = $row['rate'];
            $jangka_waktu = $row['jangka_waktu'];
            $keterangan = $row['keterangan'];
            $tgl_proyeksi = $row['tgl_proyeksi'];

            $query = "INSERT INTO dpk (nama,nominal,rate,jangka_waktu,keterangan,tgl_proyeksi, id_group, tipe)
                    VALUES ('$nama', '$nominal', '$rate','$jangka_waktu', '$keterangan', '$tgl_proyeksi', '$id_group', '$tipe')";
            $this->db->query($query);
            $this->db->execute();
        }
        die;
        return $this->db->rowCount();
    }


    public function getDataDpk($tipe)
    {
        $id_group = $_SESSION['login']['id'];
        $cabang = "SELECT * FROM dpk  WHERE id_group = '$id_group' and tipe = '$tipe'";
        $this->db->query($cabang);
        return $this->db->resultSet();
    }
}
