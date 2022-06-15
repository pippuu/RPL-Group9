<!DOCTYPE html>
<html lang="en">
<head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Beranda LinkAe</title>
        <link rel="stylesheet" type="text/css" href="property/beranda_style.css" />
        <script type="text/javascript" src="property/beranda_script.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body onload=display_ct();>
    <div class="mobile_layout">
        <div class="bg_container">
            <input type="text" class="form-control" id="search" placeholder="Cari">
            <div class="identity">
                <img src="images/Avatar.png">
                <label>Halo,<label>Nama User <!--Auth::user()->nama--></label></label>
            </div>
        </div>

        <div class="box_information">
                <label>Saldo LinkAe
                    <b>Rp <b id="label_Value">20.000 <!--Auth::user()->saldo--></b></b>
                </label><br>
                <a href="/sketsa/isi-saldo"><button id="A" type="button" class="btn btn-warning" style="color: white; background-color: #FF7A00;;">TopUp Saldo</button></a>
                <a href="/sketsa/transfer"><button id="B" type="button" class="btn btn-warning" style="color: white; background-color: #FF7A00;;">Transfer</button></a>
        </div>

        <div class="voucher_container">
            <b style="font-size: 20px;">Voucher</b><br>
            <label style="color:#FF7A00;">Klaim promo special untuk anda</label><br>
            <span>Hari ini, <span id='ct' ></span></span>
            <a href="/getpromo"><div class="voucher_background">
                <img src="images/Logo_Discount.png">
                <label>
                    Cek daftar promo kamu sekarang juga<br>
                    <i>Claim sebelum promo berakhir</i>
                </label>
            </div></a>
        </div>

        <div class="menu_container">
            <b style="font-size: 20px;">Pembayaran</b><br>
            <label style="color:#FF7A00;">Pilih jenis pembayaran yang anda lakukan</label>
            <a href="/sketsa/transaksi"><div class="menu_background">  
            <img src="images/KartuUangE.png">
                <label>Bayar apa saja disini
                    <ul>
                        <li>Transportasi</li>
                        <li>Situs Hiubran</li>
                        <li>Pajak</li>
                        <li>Kartu Uang Elektronik</li>
                        <li>Pulsa</li>
                    </ul>
                </label>
            </div></a>
        </div>
     
    <!--tampilan navbar-->
   @include('partials.navbar')
   </div> 
</body>
</html>