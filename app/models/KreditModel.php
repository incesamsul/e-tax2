<?php

class KreditModel
{


    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function store($data)
    {

        $delete = "DELETE FROM kredit";
        $this->db->query($delete);
        $this->db->execute();
        foreach ($data['formData'] as $row) {

            foreach ($row['bulan'] as $realisasiArray) {

                foreach ($realisasiArray as $month => $realisasi) {
                    $cabang = $row['cabang'];


                    $query = "INSERT INTO kredit (cabang,bulan,realisasi)
                    VALUES ('$cabang', '$month', '$realisasi')";
                    $this->db->query($query);
                    $this->db->execute();
                }
            };
        }
        return $this->db->rowCount();
    }

    public function getCabangKredit()
    {
        $cabang = "SELECT cabang FROM kredit GROUP BY cabang";
        $this->db->query($cabang);
        return $this->db->resultSet();
    }
}
