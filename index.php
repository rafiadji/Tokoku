<?php
    session_start();
    require_once('koneksi.php');

    function siteurl($url) {
        return isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? "https" : "http" . "://" . $_SERVER['SERVER_NAME'] . ":". $_SERVER['SERVER_PORT'] . dirname($_SERVER["REQUEST_URI"] . '?') . '/' . $url;
    }
    
    if (isset($_GET['modul'])) {
        $modul = $_GET['modul'];
    }
    else {
        $modul = "barang/daftarbarang";
    }
?>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Tokoku</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/bower_components/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/bower_components/Ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="assets/dist/css/skins/_all-skins.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <script src="assets/bower_components/jquery/dist/jquery.min.js"></script>
</head>

<?php
    include('home.php');
?>

</html>