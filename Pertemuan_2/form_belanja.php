<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Belanja </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        @media (max-width: 767px) {
            #container {
                display: flex;
                flex-direction: column;
            }
        }
    </style>
</head>
<body>
    <div class="container mt-5" id="container">

        <div class="col-8">
            <h3>Belanja Online by sysadit</h3>
            <hr />
        </div>

        <div class="col-12 col-md-8 align-middle">
            <form method="POST" action="">
                <div class="form-group row text-end mt-3">
                    <label for="nama" class="col-4 col-form-label font-weight-bold text-right">Customer</label>
                    <div class="col-6">
                        <input id="nama" name="customer" type="text" class="form-control" autocomplete="off" required placeholder="Masukin nama lu...">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="produk" class="col-4 text-end font-weight-bold text-right">Pilih Produk</label>
                    <div class="col-8">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="produk" id="produk1" type="radio" class="custom-control-input" value="Smart LED" required>
                            <label for="produk1" class="custom-control-label">Smart LED</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="produk" id="produk2" type="radio" class="custom-control-input" value="Freezer Box" required>
                            <label for="produk2" class="custom-control-label">Freezer Box</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="produk" id="produk3" type="radio" class="custom-control-input" value="Dry Cleaner" required>
                            <label for="produk3" class="custom-control-label">Dry Cleaner</label>
                        </div>
                    </div>
                </div>

                <div class="form-group row text-end mt-3">
                    <label for="jumlah" class="col-4 col-form-label font-weight-bold text-right">Jumlah</label>
                    <div class="col-4">
                        <input id="jumlah" name="jumlah" type="number" class="form-control" required min="1">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="offset-4 col-8">
                        <button name="proses" type="submit" class="btn btn-success">Submit</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-12 col-md-4" style="float: right;" id="card-container">
            <div class="card">
                <div class="card-header bg-primary text-white">Daftar Harga</div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item bg-light">Smart LED : Rp. 5.000.000</li>
                    <li class="list-group-item bg-light">Freezer Box : Rp. 3.500.000</li>
                    <li class="list-group-item bg-light">Dry Cleaner : Rp. 4.300.000</li>
                </ul>
                <div class="card-footer bg-primary text-white">Harga bisa berubah yaa, tergantung mood toko</div>
            </div>
        </div>
        <hr />
        <?php
        $proses = isset($_POST['proses']) ? $_POST['proses'] : '';
        $customer = isset($_POST['customer']) ? $_POST['customer'] : '';
        $produk = isset($_POST['produk']) ? $_POST['produk'] : '';
        $jumlah = isset($_POST['jumlah']) ? $_POST['jumlah'] : '';
        $smart_led = 5000000;
        $freezer_box = 3500000;
        $dry_cleaner = 4300000;
        if ($produk == "Smart LED") {
            $harga_satuan = $smart_led;
        } elseif ($produk == "Freezer Box") {
            $harga_satuan = $freezer_box;
        } elseif ($produk == "Dry Cleaner") {
            $harga_satuan = $dry_cleaner;
        } else {
            $harga_satuan = 0;
        }
        $total_harga = (int)$jumlah * (int)$harga_satuan;
        if ($proses) {
            echo "<br><strong>Nama:</strong> " . htmlspecialchars($customer);
            echo "<br><strong>Nama Produk:</strong> " . $produk;
            echo "<br><strong>Jumlah Produk:</strong> " . $jumlah;
            echo "<br><strong>Total Harga:</strong> Rp " . number_format($total_harga, 0, ',', '.');
        }
        ?>
    </div>
</body>
</html>
