<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title"><?php echo $title;?></h3>
    </div>
    <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
    <div class="box-body">
        <div class="form-group">
            <label for="namabarang" class="col-sm-2 control-label">Nama Barang</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" id="namabarang" name="namabarang" placeholder="Nama Barang">
            </div>
        </div>
        <div class="form-group">
            <label for="harga" class="col-sm-2 control-label">Harga Barang</label>
            <div class="col-sm-3">
                <input type="text" class="form-control" id="harga" name="harga" placeholder="Harga Barang">
            </div>
        </div>
        <div class="form-group">
            <label for="manfaat" class="col-sm-2 control-label">Manfaat Barang</label>
            <div class="col-sm-8">
                <textarea class="form-control" name="manfaat" id="manfaat" cols="30" rows="10" placeholder="Manfaat Barang"></textarea>
            </div>
        </div>
        <div class="form-group">
            <label for="gambar" class="col-sm-2 control-label">Gambar Barang</label>
            <div class="col-sm-5">
                <input type="file" class="form-control" id="gambar" name="gambar" >
            </div>
        </div>
    </div>
    <div class="box-footer">
        <input type="submit" class="btn btn-primary" name="submit" value="Simpan">
        <a href="<?php echo siteurl("index.php?modul=daftarbarang")?>" class="btn btn-default pull-right">Cancel</a>
    </div>
    </form>
</div>
<?php
    if (isset($_POST['submit'])) {
        $namabarang = $_POST['namabarang'];
        $harga = $_POST['harga'];
        $manfaat = $_POST['manfaat'];

        if ($_FILES['gambar']["name"] != NULL) {
            $target_dir = "uploads/";
            $target_file = $target_dir . basename($_FILES["gambar"]["name"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

            $check = getimagesize($_FILES["gambar"]["tmp_name"]);
            if($check !== false) {
                $uploadOk = 1;
            } 
            else {
                // "File is not an image.";
                $uploadOk = 0;
            }

            if ($uploadOk == 0) {
                // echo "Sorry, your file was not uploaded.";
            } 
            else {
                if (move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file)) {
                    $gambar = $_FILES["gambar"]["name"];
                    $sql = "INSERT INTO barang (namabarang, harga, manfaat, gambar) VALUES ('$namabarang', '$harga', '$manfaat', '$gambar')";
                    if($koneksi->query($sql)){
                        echo "<script>window.location.href = '".siteurl("index.php?modul=daftarbarang")."';</script>";
                    }
                    // echo "The file ". htmlspecialchars( basename( $_FILES["gambar"]["name"])). " has been uploaded.";
                } 
                else {
                    // echo "Sorry, there was an error uploading your file.";
                }
            }
        }
        else{
            $sql = "INSERT INTO barang (namabarang, harga, manfaat) VALUES ('$namabarang', '$harga', '$manfaat')";
            if($koneksi->query($sql)){
                echo "<script>window.location.href = '".siteurl("index.php?modul=daftarbarang")."';</script>";
            }
        }
        
    }
?>