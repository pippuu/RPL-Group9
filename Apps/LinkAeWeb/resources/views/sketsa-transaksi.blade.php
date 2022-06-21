<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
            
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <title>Transaksi</title>
    </head>
    <style>
        .container{margin-top: 10%;}
        button{margin-top: 5px;}
        .form-group select{width: 250px;}
    </style>
    <script>
        function reBeranda() {
            location.replace("/beranda")
        }
    </script>
    <body>
        <!-- Transaksi -->
        <div class="container">
                <label>Saldo LinkAe :
                    <b>Rp <b id="label_Value">{{$user->saldo}} <!--Auth::user()->saldo--></b></b>
                </label><br><br>
                <h5 id="title">Transaksi</h5>
                <form action="/sketsa/transaksi/konfirmasi" method="post">
                    @csrf
                    <div class="form-group">
                        <label>Tipe Transaksi</label>
                        <select class="form-control" name="tipe">
                            <option>Transportasi</option>
                            <option>Situs Hiburan</option>
                            <option>Pajak</option>
                            <option>Kartu Uang Elektronik</option>
                            <option>Pulsa</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Nominal</label>
                        <input type="number" class="form-control" name="nominal" placeholder="Rp" required>
                    </div>
                    <div class="form-group">
                        <label>Keterangan tambahan</label>
                        <input type="text" class="form-control" name="keterangan" required>
                    </div><br>
                    <button type="submit" class="btn btn-success">Konfirmasi Pembayaran</button>
                    <button onclick="reBeranda()" type="button" class="btn btn-danger">Batalkan Pembayaran</button>
                </form>
            </div>
            @if (session('success'))
                <script>
                    Swal.fire({
                    title: '{{ session('success') }}',
                    text: 'Sisa saldo Rp.{{$user->saldo}}',
                    icon: 'success',
                    confirmButtonText: 'Oke',
                    confirmButtonColor: '#FF7A00'
                })
                </script>  
            @endif
            @if (session('message'))
                <script>
                    Swal.fire({
                    title: '{{ session('message') }}',
                    text: 'Sisa saldo Rp.{{$user->saldo}}',
                    icon: 'error',
                    confirmButtonText: 'Oke',
                    confirmButtonColor: '#FF7A00'
                })
                </script> 
            @endif
        <!-- Transaksi -->
        <!--tampilan navbar-->
        @include('partials.navbar')
    </body>
</html>
