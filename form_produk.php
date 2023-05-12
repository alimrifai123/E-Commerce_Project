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
                        <h3 class="card-title">Judul</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="proses_produk.php">
                            <div class="form-group row">
                                <label for="kode" class="col-4 col-form-label">Kode</label>
                                <div class="col-8">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                
                                            </div>
                                        </div>
                                        <input id="kode" name="kode" type="text" class="form-control" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="nama" class="col-4 col-form-label">Nama</label>
                                <div class="col-8">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                
                                            </div>
                                        </div>
                                        <input id="nama" name="nama" type="text" class="form-control" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="harga_jual" class="col-4 col-form-label">Harga Jual</label>
                                <div class="col-8">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                
                                            </div>
                                        </div>
                                        <input id="harga_jual" name="harga_jual" type="text" class="form-control" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="harga_beli" class="col-4 col-form-label">Harga Beli</label>
                                <div class="col-8">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                
                                            </div>
                                        </div>
                                        <input id="harga_beli" name="harga_beli" type="text" class="form-control" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="stok" class="col-4 col-form-label">Stok</label>
                                <div class="col-8">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                
                                            </div>
                                        </div>
                                        <input id="stok" name="stok" type="text" class="form-control" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="min_stok" class="col-4 col-form-label">Minimal Stok</label>
                                <div class="col-8">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                
                                            </div>
                                        </div>
                                        <input id="min_stok" name="min_stok" type="text" class="form-control" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="textarea" class="col-4 col-form-label">Deskripsi</label>
                                <div class="col-8">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                
                                            </div>
                                        </div>
                                        <textarea id="deskripsi" name="deskripsi" cols="40" rows="5" class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="kartu_id" class="col-4 col-form-label">kategori_produk</label>
                                <div class="col-8">
                                    <?php
                                    $sqlkategori_produk = "SELECT * FROM kategori_produk";
                                    $rskategori_produk = $dbh->query($sqlkategori_produk);
                                    ?>
                                    <select id="kategori_produk" name="kategori_produk" class="custom-select">
                                        <?php
                                        foreach ($rskategori_produk as $rowkategori_produk) {
                                        ?>
                                            <option value="<?= $rowkategori_produk['id'] ?>"><?= $rowkategori_produk['nama'] ?></option>
                                        <?php
                                        }
                                        ?>

                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="offset-4 col-8">
                                    <input type="submit" name="proses" type="submit" class="btn btn-primary" value="Simpan" />
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
</section>
<?php

?>
<?php

require_once 'footer_admin.php';

?>