<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TamGiaccontroller extends Controller
{
    public function index()
    {
        return view('tam-giac');
    }

    public function tinhDienTich(Request $request)
    {
        $day = $request->input('tam_giac_day');
        $chieu_cao = $request->input('tam_giac_chieu_cao');
        $dienTich = 0.5 * $day * $chieu_cao;

        return redirect()->back()->with('dien_tich', $dienTich);
    }
}
