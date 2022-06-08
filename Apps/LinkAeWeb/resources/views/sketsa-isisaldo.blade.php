<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <title>Pengisian Saldo</title>
    </head>
    <body>
        <!-- Isi Saldo -->
        <div class="container">
            <h5 id="title">Isi Saldo</h5>
            <form action="/sketsa/isi-saldo/konfirmasi" method="post">
                @csrf
                <div class="form-group">
                    <label>Nominal Isi Saldo</label>
                    <input type="number" onkeypress="return onlyNumberKey(event)" class="form-control" name="value">
                </div>
                <button type="submit" class="btn btn-warning">Konfirmasi Isi Saldo</button>
            </form>
        </div>
        <!-- Isi Saldo -->
        <!--tampilan navbar-->
        @include('partials.navbar')
    </body>
</html>