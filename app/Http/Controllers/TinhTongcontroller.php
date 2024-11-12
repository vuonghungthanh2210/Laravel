<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TinhTongController extends Controller
{
    public function tinhTong(Request $request)
    {
        $a = $request->input('soA');
        $b = $request->input('soB');
        $tong = $a + $b;

        return redirect()->back()->with('tong', $tong);
    }
}
