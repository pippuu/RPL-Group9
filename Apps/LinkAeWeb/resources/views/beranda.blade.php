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
    @include('partials.navbar') <!--Navbar-->
    <div class="bg_container">
        <div class="Identity">
            <img src="images/Avatar.png">
            <label id="nama">Nama User</label>
        </div>
        <input type="text" class="form-control" id="search" placeholder="Cari">
        <!--<img src="images/Logo.png" id="logo">-->
    </div>
    <div class="box_information">
            <label id="icon_Rp">Saldo LinkAe Rp.</label>
            <b id="label_Value">20.000</b>
            <button type="button" class="btn btn-warning" style="color: white; background-color: #FF7A00;;">Transfer</button>
    </div>
    <div class="voucher_container">
        <b style="font-size: 20px;">Voucher</b><br>
        <label style="color:#FF7A00;">Klaim promo special untuk anda</label>
        <div class="voucher_background">--------bentar
        </div>
    </div>
    <div class="menu_container">
        <b style="font-size: 20px;">Pembayaran</b><br>
        <label style="color:#FF7A00;">Pilih jenis pembayaran yang anda lakukan</label>
    </div>
</body>
</html>