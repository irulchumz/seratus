<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brands;

class BrandsController extends Controller
{

    public function index()
    {
        $brands = Brands::all();

        return view('brands.index', compact('brands'));
    }

  
    public function create()
    {
        return view('brands.create');
        //
    }

   
    public function store(Request $request)
    {
        Brands::create($request->all());
    }

   
    public function show($id)
    {
        //
    }

  
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

   
    public function destroy($id)
    {
        //
    }
}
