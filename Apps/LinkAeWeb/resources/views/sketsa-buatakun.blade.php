<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Register</title>
    </head>
    <body>
        <!-- Form Buat Akun Baru -->
        <div class="container">
            <h5 id="title">Buat Akun</h5>
            <form action="/sketsa/buat-akun/create" method="post">
                @csrf
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" class="form-control" name="nama">
                </div>
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" class="form-control" name="username">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" name="password">
                </div>
                <button type="submit" class="btn btn-warning">Submit</button>
            </form>
        </div>
        <!-- Form Buat Akun Baru -->
        <!--tampilan navbar-->
        @include('partials.navbar')
    </body>
</html>