<?php

$paraproduct = array (
    array("Produk 1", "NoteBook",25000 ,'buku.jpg'),
    array("Produk 1", "Kalkulator",20000 ,'kalkulator.jpg'),
    array("Produk 1", "Kotak Pencil",18000 ,'kotakpencil.jpg'),
    array("Produk 1", "Penggaris",7000 ,'penggaris.jpg'),
    array("Produk 1", "Rautan",2000 ,'Rautan.jpg'),
);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <nav>
        <ul>
           <li><a href="landing.php" style="text-decoration: none; color: black;">Home</a></li>
           <li><a href="transaksi.php" style="text-decoration: none; color: black;">Transaksi</a></li>
           <li><a href="login.php" style="text-decoration: none; color: black;">Logout</a></li>
        </ul>
    </nav><br>
    <nav>
        <ul>
            <center>
            <img src="img/banner.jpg">
        </ul>
    </nav><br>
    <h2>Daftar Produk School Mart</h2>
    <body>
    <div class="tutup">
        <?php foreach ($paraproduct as $produks=> $produk) { ?>
            <div class="tutup-box">
                <div class="box">
                    <img src="img/<?php echo $produk['3'] ?>" alt="">
                    <div class="text-1"><?php echo $produk['0'] ?></div>
                    <div class="text-2"><?php echo $produk['1'] ?></div>
                    <div class="text-2"><?php echo $produk['2'] ?></div>
                </div>
                <form action="transaksi.php" method="POST">
                    <input type="hidden" name="produk1" id="produk" value="<?php echo $produk[0] ?>">
                    <input type="hidden" name="produk2" id="produk" value="<?php echo $produk[1] ?>">
                    <input type="hidden" name="produk3" id="produk" value="<?php echo $produk[2] ?>">
                    <button class=" btn btn-primary mt-2">
                        Pilih Produk
                    </button>
                </form>
            </div>
        <?php } ?>
    </div>
    <footer>  
          <a class="">@copyright lianasalsabila</a>
    </fotter>
</body>
</html>