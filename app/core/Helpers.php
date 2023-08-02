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
