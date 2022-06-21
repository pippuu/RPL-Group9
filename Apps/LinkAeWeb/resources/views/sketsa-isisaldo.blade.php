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
        <!-- Isi Saldo -->
        <!--tampilan navbar-->
        @include('partials.navbar')
    </body>
    <script>
        /*
        document.querySelector(".btn").addEventListener('click', function(){
            Swal.fire({
                title: 'TopUp Saldo Berhasil',
                text: '',
                icon: 'success',
                confirmButtonText: 'Oke'
            })
        });*/

        
        /*
        onclick="showSwal('success-message')"
        (function($) {
            showSwal = function(type) {
                'use strict';
                if (type === 'success-message') {
                swal.fire({
                    title: 'Congratulations!',
                    text: 'Saldo telah berhasil terisi',
                    type: 'success',
                    button: {
                    text: "Continue",
                    value: true,
                    visible: true,
                    className: "btn btn-primary"
                    }
                })

                }else{
                    swal("Error occured !");
                } 
            }

            })(jQuery);*/
    </script>
</html>