<?php
    // memanggil eksternal 
    include 'data_produk.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listing Produk</title>

    <!-- eksternal css -->
    <link rel="stylesheet" href="assets/css/listing-product.css">
</head>
<body>
    <div class="container">
        <div class="konten">
            <h1> Data Produk </h1>

            <div class="btn">
                <button onclick="show_tabel()"> Tabel - Produk </button>
                <button onclick="show_card()"> Card - Produk </button>
            </div>

            <div id="produk-tabel">
                <table>
                    <thead>
                        <tr>
                            <td> Produk </td>
                            <td> Jumlah </td>
                            <td> Harga </td>
                            <td> Deskripsi </td>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach($produk as $item) { ?>
                        <tr>
                            <td> <?php echo $item["nama_produk"]; ?> </td>
                            <td> <?php echo $item["jumlah"]; ?> </td>
                            <td> Rp <?php echo $item["harga"]; ?> </td>
                            <td> <?php echo $item["deskripsi"]; ?> </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>

            <div id="produk-card">
                <div class="row">

                    <?php foreach($produk as $item) { ?>
                        <div class="card">
                            <h3> <?php echo $item["nama_produk"]; ?> </h3>
                            <p> Rp. <?php echo $item["harga"]; ?> | Stok :  <?php echo $item["jumlah"]; ?></p>
                            <h5> <?php echo $item["deskripsi"]; ?> </h5>
                        </div>
                    <?php } ?>
                </div>
            </div>
            </div>
        </div>
    </div>

    <!-- eksternal js -->
    <script src="assets/js/script.js"></script>
</body>
</html>