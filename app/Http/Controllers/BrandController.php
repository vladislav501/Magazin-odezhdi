<?php

namespace App\Http\Controllers;

use App\Models\Brand;

class BrandController extends Controller {

    public function index() {
        $brands = Brand::all();
        return view('brand.brands', compact('brands'));
    }

    public function create() {
        return view('brand.addBrand');
    }

    public function store() {
        $data = request()->validate([
            'name' => 'string',
            'productId' => 'string',
        ]);
        Brand::create($data);
        return redirect()->route('brands.index');
    }

    public function show(Brand $brand) {
        return view('brand.showBrand', compact('brand'));
    }

    public function edit(Brand $brand) {
        return view('brand.editBrand', compact('brand'));
    }

    public function update(Brand $brand) {
        $data = request()->validate([
            'name' => 'string',
            'productId' => 'string',
        ]);
        $brand->update($data);
        return redirect()->route('brand.show', $brand->id);
    }

    public function delete(Brand $brand) {
        $brand->delete();
        return redirect()->route('brands.index', $brand->id);
    }
}