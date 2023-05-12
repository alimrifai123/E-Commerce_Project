<?php
require_once 'header.php';
?>

<body>
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <div class="section-header">
                <h2> From Pesanan Produk</h2>
              </div>
              <form>
                <div class="form-group row">
                  <label for="almt" class="col-4 col-form-label">Alamat</label>
                  <div class="col-8">
                    <input id="almt" name="almt" type="text" class="form-control">
                  </div>
                </div>
                <br>
                <div class="form-group row">
                  <label for="tgl_pmblian" class="col-4 col-form-label">Tanggal Pembelian</label>
                  <div class="col-8">
                    <input id="tgl_pmblian" name="tgl_pmblian" type="date" class="form-control">
                  </div>
                </div>
                <br>
                <div class="form-group row">
                  <label for="prdk" class="col-4 col-form-label">Produk</label>
                  <div class="col-8">
                    <select id="prdk" name="prdk" class="custom-select">
                      <option value="hp1">Samsung Galaxy A04e</option>
                      <option value="elektronik1">XONIX Jam Tangan Elektronik</option>
                      <option value="cosmetic1">SK II PITERA ESSENCE</option>
                      <option value="buku1">Sistem Pendidikan Finlandia</option>
                      <option value="hp2">iPhone 11</option>
                      <option value="elektronik2">SONY FX30</option>
                      <option value="cosmetic2">SK II SKINPOWER AIRY MILKY</option>
                      <option value="buku2">The Little Black Book of Style</option>
                      <option value="hp3">Infinix Zero 5G</option>
                      <option value="elektronik3">Lampu Meja</option>
                      <option value="cosmetic3">SK II FTE</option>
                      <option value="buku3">Lagom Hc</option>
                    </select>
                  </div>
                </div>
                <br>
                <div class="form-group row">
                  <label for="nmr_hp" class="col-4 col-form-label">Nomer Hp</label>
                  <div class="col-8">
                    <input id="nmr_hp" name="nmr_hp" type="text" class="form-control">
                  </div>
                </div>
                <br>
                <div class="form-group row">
                  <label for="eml" class="col-4 col-form-label">Email</label>
                  <div class="col-8">
                    <input id="eml" name="eml" type="text" class="form-control">
                  </div>
                </div>
                <br>
                <div class="form-group row">
                  <label for="jmlh" class="col-4 col-form-label">Jumlah</label>
                  <div class="col-8">
                    <input id="jmlh" name="jmlh" type="text" class="form-control">
                  </div>
                </div>
                <br>
                <div class="form-group row">
                  <label for="dskrpsi" class="col-4 col-form-label">Deskripsi</label>
                  <div class="col-8">
                    <textarea id="dskrpsi" name="dskrpsi" cols="40" rows="5" class="form-control"></textarea>
                  </div>
                </div>
                <br>
                <div class="form-group row">
                  <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </div>
                <br>
              </form>
            </div>
          </div>
        </div>
        <!-- /.col-md-6 -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  </div>
</body>
<?php
require_once 'footer.php';
?>