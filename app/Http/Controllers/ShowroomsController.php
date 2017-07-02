<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Showrooms;

class ShowroomsController extends Controller
{
   public function index(){
		$halaman = 'showrooms';
		$showrooms_list = Showrooms::all()->sortBy('name');
		$showrooms_count = $showrooms_list->count();
		return view('admin.showrooms.index', compact('halaman' ,'showrooms_list', 'showrooms_count'));
	}
	public function create(){
		return view('admin.showrooms.create');
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
		Showrooms::create($input);
		return redirect('showrooms');
	}

	public function show($id){
		$halaman = 'showrooms';
		$id_brand = $id;
		$brand_detail = Showrooms::findOrFail($id);
		return view('admin.showrooms.show', compact('halaman' ,'brand_detail', 'id_brand'));
	}

	public function edit($id){
		$halaman = 'showrooms';
		$id_brand = $id;
		$brand_detail = Showrooms::findOrFail($id);
		return view('admin.showrooms.edit', compact('halaman' ,'brand_detail', 'id_brand'));
	}

	public function update($id, Request $request){
		$halaman = 'showrooms';
		$id_brand = $id;
		$brand_detail = Showrooms::findOrFail($id);

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
		return redirect('showrooms');
	}

	public function destroy($id){
		$brand_detail = Showrooms::findOrFail($id);
		$brand_detail->delete();
		return redirect('showrooms');
	}
}
