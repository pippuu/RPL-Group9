<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="property/transfer_style.css"/>
        <script type="text/javascript" src="property/universal_script.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <title>Transfer</title>
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
        <!-- Transfer Bank -->
        <div class="container">
            <h2 id="title">Transfer Bank</h2>
            <form action="/sketsa/transaksi/konfirmasi" method="post">
                @csrf
                <div class="form-group">
                    <label>Tipe</label>
                    <select class="form-control" name="tipe">
                        <option>Transfer</option>
                    </select>
                </div><br>
                <div class="form-group">
                    <label>Bank Tujuan</label>
                    <select class="form-control" name="banktujuan">
                        <option>Mandiri</option>
                        <option>BNI</option>
                        <option>BRI</option>
                        <option>BTN</option>
                        <option>CIMB</option>
                        <option>OCBC</option>
                    </select>
                </div><br>
                <div class="form-group">
                    <label>No. Rekening</label>
                    <input type="number" onkeypress="return onlyNumberKey(event)" class="form-control" name="norekening">
                </div><br>
                <div class="form-group">
                    <label>Nominal</label>
                    <input type="number" onkeypress="return onlyNumberKey(event)" class="form-control" name="nominal" placeholder="Rp.">
                </div><br>
                <button type="submit" class="btn btn-warning">Konfirmasi Pembayaran</button>
                <button onclick="reBeranda()" type="button" class="btn btn-danger">Batalkan Pembayaran</button>
            </form>
        </div>
        <!-- Transfer Bank -->

        <!--tampilan navbar-->
        @include('partials.navbar')
    </body>
</html>