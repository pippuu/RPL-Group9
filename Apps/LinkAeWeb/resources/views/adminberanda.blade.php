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
            <h1 class="h3 mb-0 text-gray-800">Database</h1>
        </div>
        <a class="nav-link" href={{ url('/admin/usertable') }}>
            <span>User Table</span>
        </a>
        <a class="nav-link" href={{ url('/admin/cstable') }}>
            <span>Customer Service Table</span>
        </a>
        <a class="nav-link" href={{ url('/admin/promotable') }}>
            <span>Promo Table</span>
        </a>
        <a class="nav-link" href={{ url('/admin/transaksitable') }}>
            <span>Transaksi Table</span>
        </a>
        <a class="nav-link" href={{ url('/inputpromo') }}>
            <span>Input Promo</span>
        </a>
    </body>
</html>