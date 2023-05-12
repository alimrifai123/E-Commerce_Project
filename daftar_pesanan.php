<?php
require_once 'ecommerce.php';
require_once 'header_admin.php';
require_once 'sidebar_admin.php';
?>
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-2"></div>
        <div class="col-9">
          <!-- Default box -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Data Pesanan</h3>

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
            <div class="container">
          <div class="row justify-content-between gy-4 mt-4">
            <table class="table table-striped">
              <tbody>
              <tr>
                  <th scope="row">No</th>
                  <td>1</td>
                </tr>
                <tr>
                  <th scope="row">Nama</th>
                  <td>Alim Rifai</td>
                </tr>
                <tr>
                  <th scope="row">Tanggal</th>
                  <td>2023-04-08</td>
                </tr>
                <tr>
                  <th scope="row">Alamat</th>
                  <td>Jakarta</td>
                </tr>
                <tr>
                  <th scope="row">NO HP</th>
                  <td>0896 5028 0865</td>
                </tr>
                <tr>
                  <th scope="row">Email</th>
                  <td>alimrifai12@gmail.com</td>
                </tr>
                <tr>
                  <th scope="row">Produk</th>
                  <td>1</td>
                </tr>
                <tr>
                  <th scope="row">Jumlah</th>
                  <td>3</td>
                </tr>
                <tr>
                  <th scope="row">Deskripsi</th>
                  <td>Pesanan Iphone 11</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
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