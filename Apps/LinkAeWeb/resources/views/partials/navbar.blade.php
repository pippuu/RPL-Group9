<nav class="navbar navbar-expand-sm navbar-dark fixed-bottom" style="background-color: #FF7A00">
    <!--tampilan navbar dalam bentuk baris-->
    <div class="row my-2 mx-auto">
        <!--class item pertama dengan style yang telah disesuaikan-->
        <div class="mx-4" style="height: 60px; width: 60px; background-color: #FF7A00; border-radius: 10px;">
            <!--menampilkan gambar navigasi kiri yaitu "Beranda" dengan gambar Group 1.png pada folder asset-->
            <a href="/beranda"><image src="{{asset('images/Group 1.png')}}" style="height: 50px"/></a> 
        </div>
        <!--class item kedua dengan style yang telah disesuaikan-->
        <div class="mx-4" style="height: 60px; width: 60px; background-color: #FF7A00; border-radius: 10px">
            <!--menampilkan gambar navigasi tengah yaitu "Riwayat" dengan gambar Group 2.png pada folder asset-->
            <a href="/riwayat"><image class="" src="{{asset('images/Group 2.png')}}" style="height: 50px"/></a>
        </div>
        <!--class item ketiga dengan style yang telah disesuaikan-->
        <div class="mx-4" style="height: 60px; width: 60px; background-color: #FF7A00; border-radius: 10px">
            <!--menampilkan gambar navigasi kanan yaitu "Akun" dengan gambar Group 3.png pada folder asset-->
            <a  href="/sketsa/ubahakun"><img src="{{asset('images/Group 3.png')}}" style="height: 50px"/></a>
        </div>
    </div>
</nav>