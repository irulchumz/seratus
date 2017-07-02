<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Magazines;


class MagazinesController extends Controller
{
     public function index(){
		$halaman = 'magazines';
		$magazines_list = Magazines::all()->sortBy('name');
		$magazines_count = $magazines_list->count();
		return view('admin.magazines.index', compact('halaman' ,'magazines_list', 'magazines_count'));
	}
	public function create(){
		return view('admin.magazines.create');
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
		Magazines::create($input);
		return redirect('magazines');
	}

	public function show($id){
		$halaman = 'magazines';
		$id_brand = $id;
		$brand_detail = Magazines::findOrFail($id);
		return view('admin.magazines.show', compact('halaman' ,'brand_detail', 'id_brand'));
	}

	public function edit($id){
		$halaman = 'magazines';
		$id_brand = $id;
		$brand_detail = Magazines::findOrFail($id);
		return view('admin.magazines.edit', compact('halaman' ,'brand_detail', 'id_brand'));
	}

	public function update($id, Request $request){
		$halaman = 'magazines';
		$id_brand = $id;
		$brand_detail = Magazines::findOrFail($id);

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
		return redirect('magazines');
	}

	public function destroy($id){
		$brand_detail = Magazines::findOrFail($id);
		$brand_detail->delete();
		return redirect('magazines');
	}
}
