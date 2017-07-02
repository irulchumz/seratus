<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Favorites;


class FavoritesController extends Controller
{
     public function index(){
		$halaman = 'favorites';
		$favorites_list = Favorites::all()->sortBy('name');
		$favorites_count = $favorites_list->count();
		return view('admin.favorites.index', compact('halaman' ,'favorites_list', 'favorites_count'));
	}
	public function create(){
		return view('admin.favorites.create');
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
		Favorites::create($input);
		return redirect('favorites');
	}

	public function show($id){
		$halaman = 'favorites';
		$id_brand = $id;
		$brand_detail = Favorites::findOrFail($id);
		return view('admin.favorites.show', compact('halaman' ,'brand_detail', 'id_brand'));
	}

	public function edit($id){
		$halaman = 'favorites';
		$id_brand = $id;
		$brand_detail = Favorites::findOrFail($id);
		return view('admin.favorites.edit', compact('halaman' ,'brand_detail', 'id_brand'));
	}

	public function update($id, Request $request){
		$halaman = 'favorites';
		$id_brand = $id;
		$brand_detail = Favorites::findOrFail($id);

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
		return redirect('favorites');
	}

	public function destroy($id){
		$brand_detail = Favorites::findOrFail($id);
		$brand_detail->delete();
		return redirect('favorites');
	}
}
