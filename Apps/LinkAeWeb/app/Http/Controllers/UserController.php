<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $user = new User;
        $user->nama = $request->nama;
        $user->username = $request->username;
        $user->password = Hash::make($request->password);
        $user->saldo = 0;

        // penyimpanan data tersebut ke database
        $user->save();
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
        $users = DB::table('users')->get();

        return view('table-user')->with('users', $users);
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
        $request->user()->update(
            $request->all()
        );
    
        return redirect()->route('profile.edit');
    }

    public function isiSaldo(Request $request)
    {
        $userTarget = DB::table('users')->where('id', Auth::user()->id);


        $userTarget->update(['saldo' => $userTarget->get()[0]->saldo + $request->value]);
        // dd($userTarget->get()[0]->saldo);
        // User::where('id_user', '1')->update(['saldo' => $request->value + select('saldo')]);

        return redirect()->back()->with('success', "TopUp Saldo Berhasil");
    }

    public function gantiNama(Request $request) {
        //$userTarget = DB::table('users')->where('id_user', '1');

        //$userTarget->update(['nama' => $request->nama]);
        
        //return redirect()->back();

        return view('profile.edit', [
            'user' => $request->user()
        ]);
        
    }

    public function gantiPassword(Request $request) {
        $userTarget = DB::table('users')->where('id_user', Auth::user()->id);

        $userTarget->update(['password' => Hash::make($request->password)]);

        return redirect()->back();
    }

    public function gantiInfoAkun(Request $request) {
        $userTarget = DB::table('users')->where('id', Auth::user()->id);

        $userTarget->update(['username' => $request->username]);
        $userTarget->update(['nama' => $request->nama]);
        $userTarget->update(['password' => Hash::make($request->password)]);

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
