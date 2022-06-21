<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Riwayat Pembayaran</title>
        <link rel="shortcut icon" href="{{asset('images/Group 1.png')}}"/>
        <link rel="shortcut icon" href="{{asset('images/Group 2.png')}}"/>
        <link rel="shortcut icon" href="{{asset('images/Group 3.png')}}"/>
        <link rel="stylesheet" type="text/css" href="property/riwayat_style.css" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
    <div class="container-content">
        <h5 id="title">Riwayat Pembayaran</h5>
        <!--menampilkan tabel dari riwayat pembayaran-->
        <table class="table table-hover table-bordered" style="text-align: center">
            <thead>
            <tr>
                <!--menampilkan kolom dari tabel riwayat pembayaran-->
                <th scope="col" class="col col-lg-0">Tipe Pembayaran</th> <!--kolom tipe pembayaran yang dipilih-->
                <th scope="col" class="col col-lg-0">Tanggal Pembayaran</th> <!--kolom tanggal pembayaran-->
                <th scope="col" class="col col-lg-0">Nominal</th> <!--kolom nominal yang dibayarkan-->
            </tr>
            </thead>
            <tbody>
                @foreach($transaksis as $transaksi)
                <tr>
                    <!--membaca data transaksi dari data transaksis di database-->
                    <td>{{$transaksi->tipe}}</td> <!--data pada kolom tipe-->
                    <td>{{$transaksi->waktu}}</td> <!--data pada kolom waktu-->
                    <td><label>Rp.</label>{{$transaksi->nominal}}</td> <!--data pada kolom nominal-->
                </tr>
                @endforeach
            </tbody>
        </table>

        <!--tampilan navbar-->
        @include('partials.navbar')
    </div>
    </body>
</html>