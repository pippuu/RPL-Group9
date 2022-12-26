<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <script src="https://cdn.tailwindcss.com"></script>

        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <title>Pengisian Saldo</title>
    </head>
    <body>
        <!-- Isi Saldo -->
        <div class="container" style="margin-top:10%;">
                <label>Saldo LinkAe :
                    <b>Rp <b id="label_Value">{{$user->saldo}} <!--Auth::user()->saldo--></b></b>
                </label><br><br>
            <h5 id="title">Isi Saldo</h5>
            <form action="/sketsa/isi-saldo/konfirmasi" method="post" >
                @csrf
                <div class="form-group">
                    <label>Nominal Isi Saldo</label>
                    <input type="number" class="form-control" name="value" placeholder="Rp" id="inputSaldo" required>
                </div><br>
                <button type="submit" class="btn btn-warning" id="submitSaldo" >Konfirmasi Isi Saldo</button>
            </form>
        </div>
        @if (session('success'))
            <script>
                Swal.fire({
                title: '{{ session('success') }}',
                text: 'Saldo saat in bertambah Rp.{{$user->saldo}}',
                icon: 'success',
                confirmButtonText: 'Oke',
                confirmButtonColor: '#FF7A00'
            })
            </script>  
        @endif
        @if (session('error'))
            <script>
                Swal.fire({
                title: '{{ session('error') }}',
                text: 'Gagal Topup Saldo, pastikan anda isi nominal dengan benar',
                icon: 'error',
                confirmButtonText: 'Oke',
                confirmButtonColor: '#FF7A00'
            })
            </script> 
        @endif
        <!-- Isi Saldo -->
        <!--tampilan navbar-->
        @include('partials.navbar')
    </body>
</html>
