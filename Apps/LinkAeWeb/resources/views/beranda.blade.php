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
    @include('partials.navbar')
    <div class="layout_mobile">
    <div class="bg_container">
        <div class="Identity">
            <img src="images/Avatar.jpg">
            <label id="nama">Nama User</label>
        </div>
        <input type="text" class="form-control" id="search" placeholder="Cari">
        <img src="images/Logo.png" id="logo">
    </div>
    <div class="box_information">
        <label id="Label_Rp">Rp+</label>
    </div>
</body>
</html>