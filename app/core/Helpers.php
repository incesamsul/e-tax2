<?php

class Helpers
{

    private static $db;

    public static function getRealisasiKreditByCabangAndMonth($cabang, $month)
    {
        self::$db = new Database;

        $realisasi = "SELECT realisasi FROM kredit_realisasi where cabang = '$cabang' AND bulan = '$month' ";
        self::$db->query($realisasi);
        return self::$db->single();
    }

    public static function getProduktifitasByCabangAndMonth($cabang, $month)
    {
        self::$db = new Database;

        $jmlRm = "SELECT jml_rm,pencarian FROM kredit_produktifitas where cabang = '$cabang' AND bulan = '$month' ";
        self::$db->query($jmlRm);
        return self::$db->single();
    }

    public static function getTotalRealisasi($month)
    {
        self::$db = new Database;

        $realisasi = "SELECT sum(realisasi) as total FROM kredit_realisasi WHERE bulan = '$month' ";
        self::$db->query($realisasi);
        return self::$db->single();
    }

    public static function setAlert($pesan)
    {
        $_SESSION['alert'] = [
            'pesan' => $pesan,
        ];
    }

    public static function getRealisasiMonth()
    {
        return ['jun-22', 'jul-22', 'dec-22', 'mar-22', 'mar-23', 'apr-23', 'mei-23', 'jun-23'];
    }

    public static function getProduktifitasMonth()
    {
        return ['Jun-22', 'Dec-22', 'Mar-23', 'Apr-23', 'May-23', 'Jun-23'];
    }

    public static function getMonth()
    {
        return [
            "Januari", "Februari", "Maret", "April", "Mei", "Juni",
            "Juli", "Agustus", "September", "Oktober", "November", "Desember"
        ];
    }

    public static function showAlert()
    {
        if (isset($_SESSION['alert'])) {
            echo "<script>
            document.addEventListener('DOMContentLoaded', function() {
                toastr.info(
                    '" . $_SESSION['alert']['pesan'] . "',
                );
            });
            </script>";
            unset($_SESSION['alert']);
        }
    }

    public static function convertNoHp($noHp)
    {
        return '62' . substr($noHp, 1);
    }


    public static function redirectBack()
    {
        header("Location: {$_SERVER['HTTP_REFERER']}"); //redirect back
    }
}
