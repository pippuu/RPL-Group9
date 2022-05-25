<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Input Promo LinkAe</title>
        <link rel="stylesheet" type="text/css" href="property/inputpromo_style.css" />
        <script type="text/javascript" src="property/inputpromo_script.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <h5 id="title">Form Promo</h5>
            <form action="/inputpromo/create" method="post">
                @csrf
                <div class="form-group">
                    <label for="Nama_Promo">Nama Promo</label>
                    <input type="text" class="form-control" name="namaPromo">
                </div>
                <div class="form-group">
                    <label for="Diskon">Diskon (%)</label>
                    <input type="tel" onkeypress="return onlyNumberKey(event)" class="form-control" name="discPromo">
                </div>
                <div class="form-group">
                    <label for="Expire_Date">Dapat digunakan sebelum: </label>
                    <input type="text" class="form-control" name="expireDate">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <!--
                <div>
                    <label>Nama Promo:</label><br>
                    <label>Diskon:</label><br>
                    <label>Expire Date:</label><br>
                </div>
                <div>
                    <input type="text" id="namaPromo"><br>
                    <input type="tel" id="discPromo" onkeypress="return onlyNumberKey(event)"><br>
                    <input type="text" id="expireDate"><br>
                </div>-->
            </form>
        </div> <!--container-->
    </body>
</html>