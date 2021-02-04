<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brand;

class BrandController extends Controller
{
    public function index() {
        $brands = Brand::all();
        return view('pages.brand-index', compact('brands'));
    }

    public function show($id) {
        return view('pages.brand-show', ['brand' => Brand::findOrFail($id)]);
    }
}
