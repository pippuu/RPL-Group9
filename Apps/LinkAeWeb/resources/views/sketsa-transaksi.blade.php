<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="property/inputpromo_style.css" />
        <script type="text/javascript" src="property/inputpromo_script.js"></script>
        <title>Transaksi</title>
    </head>
    <body>
        <!-- Transaksi -->
        <div class="container">
                <h5 id="title">Transaksi</h5>
                <form action="/createuseraccount/create" method="post">
                    @csrf
                    <div class="form-group">
                        <label>Tipe Transaksi</label>
                        <select class="form-control" name="tipe">
                            <option>Transportasi</option>
                            <option>Situs Hiburan</option>
                            <option>Pajak</option>
                            <option>Kartu Uang Elektronik</option>
                            <option>Transfer</option>
                            <option>Pulsa</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Nominal</label>
                        <input type="tel" onkeypress="return onlyNumberKey(event)" class="form-control" name="nominal">
                    </div>
                    <button type="submit" class="btn btn-warning">Konfirmasi Pembayaran</button>
                </form>
            </div>
        <!-- Transaksi -->
    </body>
</html>