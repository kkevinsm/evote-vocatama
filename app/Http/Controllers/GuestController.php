<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Formatur;
use App\Models\Pilihan;
use App\Models\Pemilih;
use App\Models\User;

class GuestController extends Controller
{

    public function index()
    {
        $datas = Formatur::all();
        return view('guest.index', compact([
            'datas'
        ]));
    }

    public function ipm(Request $request)
    {
        foreach ($request->category as $value){
            Pilihan::create([
                'dari' => Auth::user()->id,
                'untuk' => $value,
            ]);
        }        

        return redirect()->route('guest.hw')->with('status', 'Terimakasih telah memilih!');
    }

    public function hw(Request $request)
    {
        foreach ($request->category as $value){
            Pilihan::create([
                'dari' => Auth::user()->id,
                'untuk' => $value,
            ]);
        }

        return redirect()->route('guest.ts')->with('status', 'Terimakasih telah memilih!');
    }

    public function ts(Request $request)
    {
        foreach ($request->category as $value){
            Pilihan::create([
                'dari' => Auth::user()->id,
                'untuk' => $value,
            ]);
        }

        User::where('id', Auth::user()->id)->update([
            'status' => 0,
        ]);
        

        return redirect()->route('terimakasih')->with('status', 'Terimakasih telah memilih!');
    }

    public function terimakasih()
    {
        return view('guest.terimakasih');
    }
}

