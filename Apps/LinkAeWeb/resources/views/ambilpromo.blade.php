<!DOCTYPE html> <!--Tag untuk memberitahu browser bahwa script yang dijalankan berbasis html waulaupun didalam file .php -->
<html lang="en"> <!--Tag html-->
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>List Promo</title>
        <!--Akses file .css-->
        <link rel="stylesheet" type="text/css" href="property/riwayat_style.css" />
        <!--Akses library properti bootstrap menggunakan API-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
    <!--Mother tag class container untuk membatasi child tag</> yang ada didalamnya-->
    <div class="container-content">
        <!--Title-->
        <h5 id="title">List Promo</h5>
        <!--Membuat tag table-->
        <table class="table table-hover table-bordered" style="text-align: center">
            <thead>
            <!--Membuat tag baris untuk kolom dengan beberapa nama kolom-->
            <tr>
                <th scope="col" class="col col-lg-0">id_promo</th>
                <th scope="col" class="col col-lg-0">Nama Promo</th>
                <th scope="col" class="col col-lg-0">Diskon Promo</th>
                <th scope="col" class="col col-lg-0">Expire Date</th>
                <th scope="col" class="col col-lg-0">Claim</th>
            </tr>
            </thead>
            
            <tbody>
                <!--Melooping nilai dalam database promo untuk di store-->
                @foreach($promos as $promo)
                <!--Membuat tag baris untuk membuat Blade Laravel untuk store nilai pada setiap kolom-->
                <tr>
                    <td>{{$promo->id_promo}}</td> <!--Blade untuk store Id Promo-->
                    <td>{{$promo->namaPromo}}</td> <!--Blade untuk store Nama Promo-->
                    <td>{{$promo->discPromo}}<label>%</label></td> <!--Blade untuk store diskon Promo-->
                    <td>{{$promo->expireDate}}</td> <!--Blade untuk store tanggal kadaluarsa Promo-->
                    <td>
                        <!--Membuat tag form untuk request ke routing getpromo/claim dengan method "POST"-->
                        <!--request ke routing dengan menyesuaikan id yang sedang aktif-->
                        <form action="/getpromo/claim/{{$promo->id_promo}}" method="post">
                            @csrf <!--Fungsi yang disediakan laravel untuk pengamanan
                                  dari Cross-site request forgery-->
                            <button type="submit" class="btn btn-primary">Claim</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    </body>
</html>