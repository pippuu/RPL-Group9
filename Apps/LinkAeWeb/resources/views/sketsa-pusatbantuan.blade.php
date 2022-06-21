<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <title>Document</title>
    </head>
    <style>
        .text-center{
            margin: 20px 0px 20px 0px ;
            font-weight: bold;
            color: #FF7A00;
        }
    </style>
    <body>
        <div class="text-center">
            <h5 id="title">Pusat Bantuan</h5>
        </div>
        <table class="table table-hover table-bordered" style="text-align: center">
            <thead>
            <tr>
                <!--menampilkan kolom dari tabel riwayat pembayaran-->
                <th scope="col" class="col col-lg-0">Nomor HP</th> <!--kolom nomor hp cs-->
                <th scope="col" class="col col-lg-0">Status</th> <!--kolom status-->
            </tr>
            </thead>
            <tbody>
                @foreach($customer_services as $customer_service)
                    @if ($customer_service->status == 1) 
                        <tr>
                             <!--membaca data transaksi dari data transaksis di database-->
                            <td>{{$customer_service->no_hp}}</td> <!--data pada kolom tipe-->
                            <td>Available</td> <!--data pada kolom waktu-->
                        </tr>
                    @endif
                @endforeach
            </tbody>
        </table>
        <!--tampilan navbar-->
        @include('partials.navbar')
    </body>
</html>