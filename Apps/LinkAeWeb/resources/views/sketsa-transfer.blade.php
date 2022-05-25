<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="property/inputpromo_style.css" />
        <script type="text/javascript" src="property/inputpromo_script.js"></script>
        <title>Transfer</title>
    </head>
    <body>
        <!-- Transfer Bank -->
        <div class="container">
            <h5 id="title">Transfer Bank</h5>
            <form action="/createuseraccount/create" method="post">
                @csrf
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
                </div>
                <div class="form-group">
                    <label>No. Rekening</label>
                    <input type="number" onkeypress="return onlyNumberKey(event)" class="form-control" name="norekening">
                </div>
                <div class="form-group">
                    <label>Nominal</label>
                    <input type="number" onkeypress="return onlyNumberKey(event)" class="form-control" name="nominal">
                </div>
                <button type="submit" class="btn btn-warning">Konfirmasi Pembayaran</button>
            </form>
        </div>
        <!-- Transfer Bank -->
    </body>
</html>