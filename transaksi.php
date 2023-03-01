<?php
  @$produk = $_POST['produk1'];
  @$detail = $_POST['produk2'];
  @$harga = $_POST['produk3'];
  @$hasil =$_POST['totalharga']*$_POST['tambah'];
  @ $kembalian = $_POST['pembayaran'] - $_POST['result'];
  ?>

  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaksi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style1.css">
  </head>

  <body>
    <nav>
      <ul>
        <li><a href="landing.php" style="text-decoration: none; color: black;">Home</a></li>
        <li><a href="transaksi.php" style="text-decoration: none; color: black;">Transaksi</a></li>
        <li><a href="login.php" style="text-decoration: none; color: black;">Logout</a></li>
      </ul>
    </nav><br>
    <form action="" method="post">
      <div class="content">
        <div class="container">
          <h1 class="font-weight-bold text-center text-white"></h1><br><br>
          <form action="" method="">
            <div class="row">
              <div class="col-6">
                <div class="form-group mb-3 md-4 mx-4 d-flex row">
                  <label for="merk" class="px-4">No Transaksi</label>
                  <input type="text" class="form-control mx-4">
                </div>
                <div class="form-group mb-3 md-4 mx-4 d-flex row">
                  <label for="harga" class="px-4">Tanggal Transaksi</label>
                  <input type="date" name="tanggal" class="form-control mx-4">
                </div>
                <div class="form-group mb-3 md-4 mx-4 d-flex row">
                  <label for="stok" class="px-4">Nama Costumer</label>
                  <input type="text" class="form-control mx-4">
                </div>
                <div class="form-group mb-3 md-4 mx-4 d-flex row">
                  <label for="stok" class="px-4">Pilihan Produk</label>
                  <input type="text" class="form-control mx-4" value="<?php echo $produk?>">
                </div>
                <div class="form-group mb-3 md-4 mx-4 d-flex row">
                  <label for="stok" class="px-4">Harga Produk</label>
                  <input type="text" class="form-control mx-4" name="totalharga" value="<?php echo $harga?>">
                </div>
                <div class="form-group mb-3 md-4 mx-4 d-flex row">
                  <label for="stok" class="px-4">Jumlah Produk</label>
                  <input type="text" class="form-control mx-4" name="tambah">
                </div>
                <div class="mb-3 tombol">
                  <button type="submit" class="btn btn-primary">Hitung Total Harga</button>
                </div>
          </form>
        </div>
      </div>
      <div class="result mb-3">
        <div class="row">
          <form action="" method="POST">
            <div class="col-6">
              <div class="form-group mb-4 mx-4 d-flex flex-row">
                <label class="form-label px-4" style="margin-top: 30px;" for="result">Total Harga&nbsp;</label>
                <input type="text" style="width: 200px; margin-bottom: 20px; margin-top: 30px;" name="result"
                  id="result" class="form-control mx-4" value="<?php echo $hasil ?>">
              </div>
              <div class="form-group mb-4 mx-4 d-flex flex-row">
                <label class="form-label px-4" for="pembayaran">Pembayaran</label>
                <input type="text" name="pembayaran" style="width: 200px" id="pembayaran" class="form-control mx-4"
                  placeholder="Input Jumlah Uang">
              </div>
            </div>
            <br>
            <button type="submit" style="margin-left: 230px;" class="btn btn-primary">
              Hitung Kembalian
            </button>
            <br><br>
          </form>
          <div class="col">
            <form action="landing.php" method="post">
              <div class="form-group mb-4 mx-4 d-flex flex-row">
                <label class="form-label px-4" style="position: relative; left: 500px; bottom: 225px;"
                  for="kembalian">Kembalian</label>
                <input type="text" name="kembalian"
                  style="width: 200px; position: relative; left: 500px; bottom: 230px;" id="kembalian"
                  class="form-control mx-4" placeholder="Hasil Kembalian" value="<?php echo $kembalian ?>">
              </div>
            </form>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" style="position: relative; left: 701px; bottom: 200px;"
              onclick="alert()">
              Simpan Transaksi
            </button>
          </div>

          <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
          <script>
            function alert() {
              Swal.fire({
                icon: 'success',
                title: 'Berhasil',
                text: 'Transaksi Berhasil!',
              })
            }
          </script>
        </div>
      </div>

      <footer>
        <a class="">@copyright lianasalsabila</a>
      </fotter>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
      </script>

</body>

  </html>