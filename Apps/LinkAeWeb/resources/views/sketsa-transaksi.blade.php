<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="property/inputpromo_style.css" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script type="text/javascript" src="property/inputpromo_script.js"></script>
        <title>Transaksi</title>
    </head>
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
                            <option>Transfer</option>
                            <option>Pulsa</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Nominal</label>
                        <input type="tel" onkeypress="return onlyNumberKey(event)" class="form-control" name="nominal">
                    </div>
                    <button type="submit" class="btn btn-success">Konfirmasi Pembayaran</button>
                    <button type="button" class="btn btn-danger">Batalkan Pembayaran</button>
                    <!-- <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#bayar">
                        Bayar
                    </button>
                    <div class="modal fade" id="bayar" tabindex="-1" aria-labelledby="bayarLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Pembayaran</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="d-flex">
                                        <div style="margin-right:10px">
                                            Anda yakin dengan pembayaran ini?
                                        </div>
                                    </div>
                                    <div class="modal-footer" style="margin-top: 5%">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                                        <button type="submit" class="btn btn-danger" value="Submit">Yes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </form>
            </div>
        <!-- Transaksi -->
    </body>
</html>