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
        <h5 id="title">Riwayat</h5>
        <table class="table table-hover table-bordered" style="text-align: center">
            <thead>
            <tr>
                <th scope="col" class="col col-lg-0">id_user</th>
                <th scope="col" class="col col-lg-0">Tipe Pembayaran</th>
                <th scope="col" class="col col-lg-0">Tanggal Pembayaran</th>
                <th scope="col" class="col col-lg-0">Nominal</th>
            </tr>
            </thead>
            <tbody>
                @foreach($transaksis as $transaksi)
                <tr>
                    <td scope="row mb-9">{{$transaksi->id_user}}</td>
                    <td>{{$transaksi->tipe}}</td>
                    <td>{{$transaksi->waktu}}</td>
                    <td><label>Rp.</label>{{$transaksi->nominal}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <nav class="navbar navbar-expand-sm navbar-dark fixed-bottom" style="background-color: #FFD580">
            <div class="container">
                <div class="row my-2 mx-auto">
                    <div class="mx-4" style="height: 60px; width: 60px; background-color: orange; border-radius: 10px;">
                        <a><image src="{{asset('images/Group 1.png')}}" style="height: 30px" /></a>
                    </div>
                    <div class="mx-4" style="height: 60px; width: 60px; background-color: orange; border-radius: 10px">
                        <image class="" src="{{asset('images/Group 2.png')}}" style="height: 30px" />
                    </div>
                    <div class="mx-4" style="height: 60px; width: 60px; background-color: orange; border-radius: 10px">
                        <img src="images/Group 3.png" style="height: 30px" />
                    </div>
                </div>
            </div>
        </nav>
    </div>
    </body>
</html>