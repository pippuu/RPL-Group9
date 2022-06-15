<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Promo;
use Illuminate\Support\Facades\DB;

class PromoController extends Controller
{

    private static $instance;

    public static function getInstance() {
        if (!self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }
    
    /**  
     * Method untuk menampilkan halaman untuk input promo ketika route /inputpromo dipanggil
     * Halaman input promo merujuk pada file bernama inputpromo.blade.php pada folder views
     * @param : -
     * @return : tampilan dari kodingan inputpromo.blade.php
    */
    public function index()
    {
        //buat cek semestara
        return view('inputpromo');
    }

    /**
     * Method untuk membuat promo baru yang dilakukan oleh admin berdasarkan input yang dimasukkan admin
     * Input disini yaitu informasi berupa nama promo, diskon promo, dan tanggal kadaluarsa promo
     * Hasil dari promo baru yang dibuat kemudian akan dimasukkan ke dalam database promo
     * @param : $request -> data dari form inputpromo.blade.php
     * @return : mengembalikan route kembali ke route sebelumnya dengan kondisi promo baru sudah ditambah ke dalam database
    */
    public function create(Request $request)
    {
        $promo = new Promo;

        $promo->id_admin = 1;
        $promo->namaPromo = $request->namaPromo;
        $promo->discPromo = $request->discPromo;
        $promo->expireDate = $request->expireDate;

        $promo->save();
        return redirect()->back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Method untuk mengambil data promo dari database kemudian ditampilkan pada halaman ambil promo 
     * Nantinya akan digunakan user untuk mengklaim promo
     * Data promo ini merupakan data-data promo yang masih belum diklaim oleh siapapun
     * Halaman ambil promo merujuk pada file ambilpromo.blade.php pada folder views
     * @param : -
     * @return : tampilan ambilpromo.blade.php dengan data yang diteruskan ke tampilan tersebut
     */
    public function show()
    {
        //
        $promos = DB::table('promos')->where('id_user', null)->get();

        return view('ambilpromo')->with('promos', $promos);
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Method untuk mengupdate informasi promo bahwa promo yang ditunjuk sudah diklaim oleh seorang user
     * @param : $idPromo -> merupakan id untuk mencocokkan promo yang ditunjuk oleh user
     * @return : mengembalikan ke route sebelumnya dengan kondisi data promo yang ditunjuk sudah dirubah
     */
    public function update($idPromo)
    {
        Promo::where('id_promo', $idPromo)->update(['id_user' => '1']);

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
