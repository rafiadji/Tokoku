<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title"><?php echo $title;?></h3>
    </div>
    <div class="box-body">
        <a href="<?php echo siteurl("index.php?modul=tambahbarang")?>" class="btn btn-success"><i class="fa fa-plus"></i> Tambah Barang</a>
    </div>
    <div class="box-body">
        <table class="table table-bordered table-hover">
            <tr>
                <th style="width: 25%">Nama Barang</th>
                <th style="width: 15%">Harga</th>
                <th>Manfaat</th>
                <th style="width: 15%">Opsi</th>
            </tr>
            <?php
                $sql = "SELECT * FROM barang";
                $result = $koneksi->query($sql);
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
            ?>
            <tr>
                <td><?php echo $row['namabarang'];?></td>
                <td><?php echo $row['harga'];?></td>
                <td><?php echo $row['manfaat'];?></td>
                <td>
                    <div class="btn-group">
                        <a href="<?php echo siteurl("index.php?modul=ubahbarang&idbarang=".$row['idbarang'])?>" class="btn btn-xs btn-info"><i class="fa fa-pencil"></i> Edit</a>
                        <a href="<?php echo siteurl("index.php?modul=daftarbarang&idbaranghapus=".$row['idbarang'])?>" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i> Hapus</a>
                    </div>
                </td>
            </tr>
            <?php
                    }
                } 
                else {
            ?>
            <tr>
                <td colspan="4" style="text-align:center">Tidak ada data</td>
            </tr>
            <?php
                }
            ?>
        </table>
    </div>
    <div class="box-footer">
        
    </div>
</div>
<?php
    if (isset($_GET['idbaranghapus'])) {
        $idbarang = $_GET['idbaranghapus'];
        $sql = "DELETE FROM barang WHERE idbarang='$idbarang'";
        if($koneksi->query($sql)){
            echo "<script>window.location.href = '".siteurl("index.php?modul=daftarbarang")."';</script>";
        } 
    }
?>