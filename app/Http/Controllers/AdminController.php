<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use App\Models\Product;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function stock() {
        $data = Product::with('category')->with('brand')->get();
        return view('admin.stock',['products'=>$data]);

    }

    public function test() {
    return view('admin.test');

    }

}


