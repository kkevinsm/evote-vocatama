<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\Pilihan;
use App\Models\Formatur;
use App\Models\User;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\UsersImport;
use App\Imports\PemilihsImport;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $pemilihs = User::where('role_id', 2)->get();
        $formaturs = Formatur::all();
        $sudahs = count(User::where('role_id', 2)->where('status', 0)->get());
        $belums = count(User::where('role_id', 2)->where('status', 1)->get());
        $pilihans = Pilihan::all();

        $ipm_1 = Formatur::where('id', '1')->first()->nama;
        $ipm_2 = Formatur::where('id', '2')->first()->nama;


        $suara_ipm_1 = count(Pilihan::where('untuk', '1')->get());
        $suara_ipm_2 = count(Pilihan::where('untuk', '2')->get());

        $suara_hw_1 = count(Pilihan::where('untuk', '3')->get());
        $suara_hw_2 = count(Pilihan::where('untuk', '4')->get());

        $suara_ts_1 = count(Pilihan::where('untuk', '5')->get());
        $suara_ts_2 = count(Pilihan::where('untuk', '6')->get());

        return view('admin.index', compact([
            'pemilihs',
            'formaturs',
            'belums',
            'sudahs',
            'pilihans',
            'ipm_1',
            'ipm_2',
            'suara_ipm_1',
            'suara_ipm_2',
            'suara_hw_1',
            'suara_hw_2',
            'suara_ts_1',
            'suara_ts_2',
        ]));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    public function show($id)
    {
        //
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

    public function pemilih()
    {
        return view('admin.pemilih');
    }

    public function import()
    {
        Excel::import(new PemilihsImport,request()->file('file'));

        return redirect()->back();
    }
}
