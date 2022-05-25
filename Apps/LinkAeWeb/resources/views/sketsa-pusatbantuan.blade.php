<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h5 id="title">Pusat Bantuan</h5>=
        <table class="table table-hover table-bordered" style="text-align: center">
            <thead>
            <tr>
                <!--menampilkan kolom dari tabel riwayat pembayaran-->
                <th scope="col" class="col col-lg-0">id_user</th> <!--kolom id_user-->
                <th scope="col" class="col col-lg-0">Tipe Pembayaran</th> <!--kolom tipe pembayaran yang dipilih-->
                <th scope="col" class="col col-lg-0">Tanggal Pembayaran</th> <!--kolom tanggal pembayaran-->
                <th scope="col" class="col col-lg-0">Nominal</th> <!--kolom nominal yang dibayarkan-->
            </tr>
            </thead>
            <tbody>
                @foreach($transaksis as $transaksi)
                <tr>
                    <!--membaca data transaksi dari data transaksis di database-->
                    <td scope="row mb-9">{{$transaksi->id_user}}</td> <!--data pada kolom id_user-->
                    <td>{{$transaksi->tipe}}</td> <!--data pada kolom tipe-->
                    <td>{{$transaksi->waktu}}</td> <!--data pada kolom waktu-->
                    <td><label>Rp.</label>{{$transaksi->nominal}}</td> <!--data pada kolom nominal-->
                </tr>
                @endforeach
            </tbody>
        </table>
    </body>
</html>