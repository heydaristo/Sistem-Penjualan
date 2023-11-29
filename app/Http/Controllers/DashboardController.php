<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\supplier;
use App\Models\pelanggan;
use App\Models\user;

class DashboardController extends Controller
{
    public function index() {
        return view('dashboard.index');
    }

    public function product() {
        $products = product::with('supplier')->get();

        return view('dashboard.product', compact('products'));
    }

    public function penjualan() {
        return view('dashboard.penjualan');
    }
    public function pelanggan() {
        $pelanggans = pelanggan::with('user')->get();

        return view('dashboard.pelanggan', compact('pelanggans'));
    }
}
