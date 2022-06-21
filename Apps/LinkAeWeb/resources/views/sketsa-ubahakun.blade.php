<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Informasi Profile User</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    </head>
    <style>
        .container{margin-top: 10%;}
    </style>
    <body>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Informasi Profil</div>
                        <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalubahprofile">Ubah Profile</button> -->
                            <div class="card-body">
                                <div class="row mb-4">
                                    <label>Username : {{$user->username}}</label><br>
                                    <label>Nama &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : {{$user->nama}} </label> <!--button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalGantiNama">Ganti Nama</button--> <br>
                                    <!-- <label>Password &nbsp;: {{$user->getAuthPassword()}}</label> button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalGantiPass">Ganti Password</button> -->
                                    <br><br>
                                    <button type="button" class="btn btn-warning center-block" data-bs-toggle="modal" data-bs-target="#modalGantiInfoAkun">Ubah Info Akun</button>                      
                                </div><br/><br/>
                                <div class="text-center">
                                    <a href="/logout"><button type="button" class="btn btn-danger">Logout</button></a>
                                </div>
                            </div>
                        </div>  
                    </div>
                </div>
            </div><br>
            <a style="margin-left:10px;" href="/sketsa/pusat-bantuan"><button type="button" class="btn btn-warning">Pusat Bantuan</button></a>
        </div>
        
        <div class="modal fade" id="modalGantiInfoAkun" tabindex="-1" aria-labelledby="modalGantiInfoAkun" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalGantiInfoAkun"><b>Ganti Informasi Akun</b></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="/sketsa/ubahakun/gantiinfoakun" method="post">
                            @csrf
                            <div class="row-mb-4 justify">
                                <label for="username" class="col-sm-4 col-form-label">Username</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="username" name="username">
                                </div>
                                <label for="nama" class="col-sm-4 col-form-label">Nama</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="nama" name="nama">
                                </div>
                                <label for="inputText" class="col-sm-4 col-form-label">Password</label>
                                <div class="col-sm-8">
                                    <input type="password" class="form-control" id="password" name="password">
                                </div>
                            </div>
                            <div class="modal-footer" style="margin-top: 5%">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Tutup</button>
                                <button type="submit" class="btn btn-success" value="Submit">Ubah</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
                                    
        <!--tampilan navbar-->
        @include('partials.navbar')
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    </body>
</html>