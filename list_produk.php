<?php
require_once 'ecommerce.php';
require_once 'header_admin.php';
require_once 'sidebar_admin.php';
?>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
                <!-- Default box -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Data Produk</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <?php
                        $sql = "SELECT * FROM produk";
                        $rs = $dbh->query($sql);
                        ?>
                        <a class="btn btn-success" href="form_produk.php" role="button">Create Pesanan</a>
                        <table class="table" width="100%" border="1" cellspacing="2" cellpadding="2">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kode</th>
                                    <th>Nama</th>
                                    <th>Harga Jual</th>
                                    <th>Harga Beli</th>
                                    <th>Stok</th>
                                    <th>Minimal Stok</th>
                                    <th>Deskripsi</th>
                                    <th>Kategori Produk</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $nomor  = 1;
                                foreach ($rs as $row) {
                                ?>
                                    <tr>
                                        <td><?= $nomor ?></td>
                                        <td><?= $row['kode'] ?></td>
                                        <td><?= $row['nama'] ?></td>
                                        <td><?= $row['harga_jual'] ?></td>
                                        <td><?= $row['harga_beli'] ?></td>
                                        <td><?= $row['stok'] ?></td>
                                        <td><?= $row['min_stok'] ?></td>
                                        <td><?= $row['deskripsi'] ?></td>
                                        <td><?= $row['kategori_produk'] ?></td>
                                        <td>
                                            <a class="btn btn-primary" href="ditail_produk.php?id=<?= $row['id'] ?>">Detail</a>
                                            <a class="btn btn-primary" href="form_produk.php?idedit=<?= $row['id'] ?>">Edit</a>
                                            <a class="btn btn-primary" href="delete_produk.php?iddel=<?= $row['id'] ?>" onclick="if(!confirm('Anda Yakin Hapus Data Produk <?= $row['nama'] ?>?')) {return false}">Delete</a>
                                        </td>
                                    </tr>
                                <?php
                                    $nomor++;
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        Footer
                    </div>
                    <!-- /.card-footer-->
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
</section>
<?php
require_once 'footer_admin.php';
?>