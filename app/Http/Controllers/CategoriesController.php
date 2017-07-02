<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categories;

class CategoriesController extends Controller
{
     public function index(){
		$halaman = 'brands';
		$brands_list = Categories::all()->sortBy('name');
		$brands_count = $brands_list->count();
		return view('admin.brands.index', compact('halaman' ,'brands_list', 'brands_count'));
	}
	public function create(){
		return view('admin.brands.create');
	}

	public function store(Request $request){
		$input = $request->all();
		if ($request->hasFile('foto')) {
			$foto =$request->file('foto');
			$ext = $foto->getClientOriginalExtension();

			if ($request->file('foto')->isValid()) {
				$photo_name = date('YmdHis').".$ext";
				$upload_path = 'brand_photo';
				$request->file('foto')->move($upload_path, $photo_name);
				$input['foto']=$photo_name;
     			# code...
			};
     		# code...
		};
		Categories::create($input);
		return redirect('brands');
	}

	public function show($id){
		$halaman = 'brands';
		$id_brand = $id;
		$brand_detail = Categories::findOrFail($id);
		return view('admin.brands.show', compact('halaman' ,'brand_detail', 'id_brand'));
	}

	public function edit($id){
		$halaman = 'brands';
		$id_brand = $id;
		$brand_detail = Categories::findOrFail($id);
		return view('admin.brands.edit', compact('halaman' ,'brand_detail', 'id_brand'));
	}

	public function update($id, Request $request){
		$halaman = 'brands';
		$id_brand = $id;
		$brand_detail = Categories::findOrFail($id);

		$check = $request->foto;
		if (isset($check)) {
			$foto =$request->foto;
			// $ext = $foto->getClientOriginalExtension();

			// $ext = $foto->getClientOriginalExtension();
			$check3 = $request->hasFile('foto');
			// if ($request->file('foto')->isValid()) {
				$photo_name = date('YmdHis')."png";
				$upload_path = '../../brand_photo';
				// $request->file('foto')->move($upload_path, $photo_name);
				$input['foto']=$photo_name;
				// $check2 = $input['foto'];
     			# code...
			// };
     		# code...
		};
		return redirect('brands');
	}

	public function destroy($id){
		$brand_detail = Categories::findOrFail($id);
		$brand_detail->delete();
		return redirect('brands');
	}
}
