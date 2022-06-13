<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="property/transaksi_style.css" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script type="text/javascript" src="property/universal_script.js"></script>
        <title>Transaksi</title>
    </head>
    <style>
        .container{margin-top: 10%;}
        button{margin-top: 5px;}
        .form-group select{width: 250px;}
    </style>
    <script>
        function reBeranda() {
            location.replace("/beranda")
        }
    </script>
    <body>
        <!-- Transaksi -->
        <div class="container">
                <h5 id="title">Transaksi</h5>
                <form action="/sketsa/transaksi/konfirmasi" method="post">
                    @csrf
                    <div class="form-group">
                        <label>Tipe Transaksi</label>
                        <select class="form-control" name="tipe">
                            <option>Transportasi</option>
                            <option>Situs Hiburan</option>
                            <option>Pajak</option>
                            <option>Kartu Uang Elektronik</option>
                            <option>Pulsa</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Nominal</label>
                        <input type="number" onkeypress="return onlyNumberKey(event)" class="form-control" name="nominal" placeholder="Rp">
                    </div>
                    <div class="form-group">
                        <label>Keterangan tambahan</label>
                        <input type="text" class="form-control" name="keterangan">
                    </div><br>
                    <button type="submit" class="btn btn-success">Konfirmasi Pembayaran</button>
                    <button onclick="reBeranda()" type="button" class="btn btn-danger">Batalkan Pembayaran</button>
                </form>
            </div>
        <!-- Transaksi -->
        <!--tampilan navbar-->
        @include('partials.navbar')
    </body>
</html>