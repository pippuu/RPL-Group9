<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
// use App\Http\Controllers\TransaksiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_one()
    {
        // // Test berhasil
        $request = new Request;
        $request->tipe = 'Transportasi';
        $request->nominal = 100000;

        $dataCountThen = DB::table('transaksis')->count();

        app('App\Http\Controllers\TransaksiController')->create($request);

        $dataCountNow = DB::table('transaksis')->count();

        $this->assertTrue($dataCountThen < $dataCountNow);
    
    }
    public function test_two()
    {
        // // Test gagal
        $request = new Request;
        $request->tipe = 'Transportasi';
        $request->nominal = 500000;

        $dataCountThen = DB::table('transaksis')->count();

        app('App\Http\Controllers\TransaksiController')->create($request);

        $dataCountNow = DB::table('transaksis')->count();

        $this->assertFalse($dataCountThen < $dataCountNow);
    }
}
