<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <title>Document</title>
    </head>
    <body>
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Promos</h1>
        </div>
        <a class="nav-link" href={{ url('/admin') }}>
            <span>Back</span>
        </a>
        <div>
            <table class="table table-bordered" style="margin-top: 20px">
                <thead>
                    <tr>
                        <th class="col-sm-1">ID Promo</th>
                        <th class="col-sm-1">ID Admin</th>
                        <th class="col-sm-1">Nama Promo</th>
                        <th class="col-sm-1">Diskon Promo</th>
                        <th class="col-sm-1">Masa Berlaku</th>
                        <th class="col-sm-1">ID User Pemilik</th>
                    </tr>
                    @foreach ($promos as $promo)
                    <tr>
                        <td>{{ $promo->id_promo }}</td>
                        <td>{{ $promo->id_admin }}</td>
                        <td>{{ $promo->namaPromo }}</td>
                        <td>{{ $promo->discPromo }}</td>
                        <td>{{ $promo->expireDate }}</td>
                        <td>{{ $promo->id_user }}</td>
                    </tr>
                    @endforeach
                </thead>
            </table>
        </div>
    </body>
</html>