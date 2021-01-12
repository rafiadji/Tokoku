<?php
    function siteurl($url) {
        return isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? "https" : "http" . "://" . $_SERVER['SERVER_NAME'] . ":". $_SERVER['SERVER_PORT'] . dirname($_SERVER["REQUEST_URI"] . '?') . '/' . $url;
    }
    
    if (isset($_GET['modul'])) {
        switch ($_GET['modul']) {
            case 'daftarbarang':
                $head = "Barang";
                $title = "Data Barang";
                $modul = "barang/daftarbarang";
                break;

            case 'tambahbarang':
                $head = "Barang";
                $title = "Tambah Barang";
                $modul = "barang/tambahbarang";
                break;
            
            case 'ubahbarang':
                $head = "Barang";
                $title = "Ubah Barang";
                $modul = "barang/ubahbarang";
                break;
            default:
                $head = "Barang";
                $title = "Data Barang";
                $modul = "barang/daftarbarang";
                break;
        }
    }
    else {
        $head = "Barang";
        $title = "Data Barang";
        $modul = "barang/daftarbarang";
    }
?>