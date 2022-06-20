<?php

namespace App\Http\Controllers;

use App\Models\CustomerService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $customer_service = new CustomerService;

        $customer_service->id_cs = $request->id_cs;
        $customer_service->no_hp = $request->no_hp;
        $customer_service->status = $request->status;

        $customer_service->save();
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
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        // pembuatan variabel yang menampung tabel 'transaksis' dari database
        $customer_services = DB::table('customer_services')->get();

        // me-return data tersebut ke url tertentu dengan variablenya bernama 'transaksis'
        return view('sketsa-pusatbantuan')->with('customer_services', $customer_services);
    }

    public function show_admin()
    {
        // pembuatan variabel yang menampung tabel 'transaksis' dari database
        $css = DB::table('customer_services')->get();

        // me-return data tersebut ke url tertentu dengan variablenya bernama 'transaksis'
        return view('table-customerservice')->with('css', $css);
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
