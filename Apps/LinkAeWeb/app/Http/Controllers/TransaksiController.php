<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


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
        // cek apakah saldo cukup
        $currentSaldo = DB::table('users')->where('id', Auth::user()->id)->get()[0]->saldo;
        // dd($currentSaldo);
        if ($currentSaldo >= $request->nominal) {
            // dd('Pembayaran berhasil.');
            // pembuatan 'Transaksi' baru yang isinya berdasarkan parameter request
            $transaksi = new Transaksi;
            $transaksi->id_user = Auth::user()->id;
            $transaksi->tipe = $request->tipe;
            $transaksi->waktu = '2022/6/3';
            $transaksi->nominal = $request->nominal;
            if ($request->tipe == 'Transfer') {
                $transaksi->keterangan = 'Transfer ke bank ' . $request->banktujuan . ' ke nomor ' . $request->norekening;
            } else {
                $transaksi->keterangan = $request->keterangan;
            }

            // penyimpanan data tersebut ke database
            $transaksi->save();

            // mengurangi saldo user
            $userTarget = DB::table('users')->where('id', Auth::user()->id);
            $userTarget->update(['saldo' => $userTarget->get()[0]->saldo - $request->nominal]);
            
             return redirect()->back()->with('success', "Transaksi Berhasil");
        } else {
             return redirect()->back()->with('message', "Saldo tidak mencukupi, transaksi anda tidak dilanjutkan");  
        }

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
     * fungsi mengembalikan tabel transaksi untuk keperluan viewing
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        // pembuatan variabel yang menampung tabel 'transaksis' dari database
        $transaksis = DB::table('transaksis')->where('id_user', Auth::user()->id)->get();

        // me-return data tersebut ke url tertentu dengan variablenya bernama 'transaksis'
        return view('riwayatpembayaran')->with('transaksis', $transaksis);
    }

    public function show_admin()
    {
        // pembuatan variabel yang menampung tabel 'transaksis' dari database
        $transaksis = DB::table('transaksis')->get();

        // me-return data tersebut ke url tertentu dengan variablenya bernama 'transaksis'
        return view('table-transaksi')->with('transaksis', $transaksis);
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
