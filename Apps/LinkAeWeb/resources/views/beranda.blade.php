<!DOCTYPE html>
<html lang="en">
<head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Beranda LinkAe</title>
        <link rel="stylesheet" type="text/css" href="property/beranda_style.css" />
        <script type="text/javascript" src="property/inputpromo_script.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    
    <div class="bg_container">
    </div>
    <div class="form-group">
        <input type="text" class="form-control" id="search" placeholder="Cari">
    </div>
    <nav class="navbar navbar-expand-sm navbar-dark fixed-bottom" style="background-color:#FF7A00">
                <!--tampilan navbar dalam bentuk baris-->
                <div class="row my-2 mx-auto">
                    <!--class item pertama dengan style yang telah disesuaikan-->
                    <div class="mx-4" style="height: 60px; width: 60px; background-color: orange; border-radius: 10px;">
                        <!--menampilkan gambar navigasi kiri yaitu "Beranda" dengan gambar Group 1.png pada folder asset-->
                        <a><image src="{{asset('images/Group 1.png')}}" style="height: 30px" /></a> 
                    </div>
                    <!--class item kedua dengan style yang telah disesuaikan-->
                    <div class="mx-4" style="height: 60px; width: 60px; background-color: orange; border-radius: 10px">
                        <!--menampilkan gambar navigasi tengah yaitu "Riwayat" dengan gambar Group 2.png pada folder asset-->
                        <image class="" src="{{asset('images/Group 2.png')}}" style="height: 30px" /> 
                    </div>
                    <!--class item ketiga dengan style yang telah disesuaikan-->
                    <div class="mx-4" style="height: 60px; width: 60px; background-color: orange; border-radius: 10px">
                        <!--menampilkan gambar navigasi kanan yaitu "Akun" dengan gambar Group 3.png pada folder asset-->
                        <img src="images/Group 3.png" style="height: 30px" /> 
                    </div>
                </div>
            </div>
        </nav>

</body>
</html>