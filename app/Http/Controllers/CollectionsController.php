<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Collections;


class CollectionsController extends Controller
{
     public function index(){
		$halaman = 'collections';
		$collections_list = Collections::all()->sortBy('name');
		$collections_count = $collections_list->count();
		return view('admin.collections.index', compact('halaman' ,'collections_list', 'collections_count'));
	}
	public function create(){
		return view('admin.collections.create');
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
		Collections::create($input);
		return redirect('collections');
	}

	public function show($id){
		$halaman = 'collections';
		$id_brand = $id;
		$brand_detail = Collections::findOrFail($id);
		return view('admin.collections.show', compact('halaman' ,'brand_detail', 'id_brand'));
	}

	public function edit($id){
		$halaman = 'collections';
		$id_brand = $id;
		$brand_detail = Collections::findOrFail($id);
		return view('admin.collections.edit', compact('halaman' ,'brand_detail', 'id_brand'));
	}

	public function update($id, Request $request){
		$halaman = 'collections';
		$id_brand = $id;
		$brand_detail = Collections::findOrFail($id);

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
		return redirect('collections');
	}

	public function destroy($id){
		$brand_detail = Collections::findOrFail($id);
		$brand_detail->delete();
		return redirect('collections');
	}
}
