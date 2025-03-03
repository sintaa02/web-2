<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Belanja</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<div class="container">
    <div class="row">
        <!-- formulir -->
        <div class="col-md-8">
            <h3 style="text-align: left;">Belanja Online</h3><hr/>
            <form method="POST" action="proses_belanja.php">
                <!-- Customer -->
                <div class="form-group row">
                    <label for="customer" class="col-3 col-form-label text-end"><strong>Customer</strong></label>
                    <div class="col-6">
                        <input id="customer" name="customer" placeholder="Nama Customer" type="text" required="required" class="form-control">
                    </div>
                </div>
                <!-- Pilih Produk -->
                <div class="form-group row">
                    <label class="col-3"><strong>Pilih Produk</strong></label>
                    <div class="col-9">
                        <label class="custom-control custom-radio custom-control-inline">
                            <input name="produk" type="radio" required="required" class="custom-control-input" value="tv">
                            <span class="custom-control-indicator"></span>
                            <span class="custom-control-description">TV</span>
                        </label>
                        <label class="custom-control custom-radio">
                            <input name="produk" type="radio" required="required" class="custom-control-input" value="kulkas">
                            <span class="custom-control-indicator"></span>
                            <span class="custom-control-description">KULKAS</span>
                        </label>
                        <label class="custom-control custom-radio">
                            <input name="produk" type="radio" required="required" class="custom-control-input" value="mesin_cuci">
                            <span class="custom-control-indicator"></span>
                            <span class="custom-control-description">MESIN CUCI</span>
                        </label>
                    </div>
                </div>
                <!-- Jumlah Beli -->
                <div class="form-group row">
                    <label for="jumlah" class="col-3 col-form-label"><strong>Jumlah Beli</strong></label>
                    <div class="col-3">
                        <input id="jumlah" name="jumlah" placeholder="Jumlah" type="number" class="form-control">
                    </div>
                </div>
                <!-- Sumbit -->
                <div class="form-group row">
                    <div class="offset-3 col-9">
                        <button name="submit" type="submit" value="proses" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
        
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <div class="card-header bg-primary text-white">Daftar Harga</div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">TV : Rp 4.200.000</li>
                    <li class="list-group-item">KULKAS : Rp.3.100.000</li>
                    <li class="list-group-item">MESIN CUCI : Rp 3.800.000</li>
                </ul>
                <div class="card-header bg-primary text-white">Harga Dapat Berubah Setiap Saat</div>
            </div>
        </div>
    </div>
</div>
</body>
</html>