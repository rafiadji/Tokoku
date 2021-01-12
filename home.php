<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
    <?php include('template/header.php');?>
    <?php include('template/sidebar.php');?>
    <?php include('template/content.php');?>

    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Version</b> 2.4.13
        </div>
        <strong>Copyright &copy; 2014-2019 <a href="https://adminlte.io">AdminLTE</a>.</strong> All rights reserved.
    </footer>
</div>

<script src="assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="assets/bower_components/fastclick/lib/fastclick.js"></script>
<script src="assets/dist/js/adminlte.min.js"></script>
<script src="assets/dist/js/demo.js"></script>
<script>
  $(document).ready(function () {
    $('.sidebar-menu').tree()
  })
</script>
</body>