<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi;
use Illuminate\Support\Facades\DB;

class TransaksiController extends Controller
{
    private static $instance;

    public static function getInstance() {
        if (!self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    /**
     * fungsi default awal, di sini dibuat untuk view 'riwayatpembayaran.blade.php'
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('riwayatpembayaran');
    }

    /**
     * fungsi untuk menambahkan data baru ke tabel transaksi pada database, berdasarkan data yg ada pada request
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        // pembuatan 'Transaksi' baru yang isinya berdasarkan parameter request
        $transaksi = new Transaksi;
        $transaksi->id_user = '1';
        $transaksi->tipe = $request->tipe;
        $transaksi->waktu = '2/6/22';
        $transaksi->nominal = $request->nominal;

        // penyimpanan data tersebut ke database
        $transaksi->save();
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
     * fungsi mengembalikan tabel transaksi untuk keperluan viewing
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        // pembuatan variabel yang menampung tabel 'transaksis' dari database
        $transaksis = DB::table('transaksis')->get();

        // me-return data tersebut ke url tertentu dengan variablenya bernama 'transaksis'
        return view('riwayatpembayaran')->with('transaksis', $transaksis);
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
