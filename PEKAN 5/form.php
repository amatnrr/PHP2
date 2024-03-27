<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kartu Member</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

</head>

<body>
    <h2 style="text-align: center;">Kartu Member</h2>
    <form action="proses1.php" method="POST">
    <hr>

    <div class="row mx-5">
        <div class="col-12 col-md-8">
            <form action="proses1.php" method="post">
                <div class="form-group row">
                    <label for="customer" class="col-4 col-form-label">Nama Pelanggan</label>
                    <div class="col-8">
                        <input id="nama" name="nama" type="text" required="required" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-4">Pilih Produk</label>
                    <div class="col-8">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="TV" required="required">
                            <label for="produk_0" class="custom-control-label">TV</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="Kulkas" required="required">
                            <label for="produk_1" class="custom-control-label">Kulkas</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="Mesin Suci" required="required">
                            <label for="produk_2" class="custom-control-label">Mesin Suci</label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="jumlah" class="col-4 col-form-label">Jumlah</label>
                    <div class="col-8">
                        <input id="jumlah" name="jumlah" type="number" class="form-control" required="required">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="offset-4 col-8">
                        <button name="submit" type="submit" class="btn btn-success">Kirim</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-12 col-md-4">
        <table cellpadding="15" border="1px" class="table">
                    <tbody>
                    <tr class="table-a">
                        <td colspan="2" align="center"> Daftar Harga</td>
                    </tr>
                    <tr>
                        <td>TV</td>
                        <td>Rp. 4.200.000</td>
                    </tr>
                    <tr>
                        <td>Kulkas</td>
                        <td>Rp. 3.100.000</td>
                    </tr>
                    <tr>
                        <td>Mesin Cuci</td>
                        <td>Rp. 3.800.000</td>
                    </tr>
                    <tr class="table-a">
                        <td colspan="2" align="center">Harga Dapat Berubah di Setiap Saat</td>
                    </tr>
                    </tbody>

            </table>
        </div>
    </div>
</body>

</html>