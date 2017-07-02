<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tags;

class TagsController extends Controller
{
    public function index(){
		$halaman = 'tags';
		$tags_list = Tags::all()->sortBy('name');
		$tags_count = $tags_list->count();
		return view('admin.tags.index', compact('halaman' ,'tags_list', 'tags_count'));
	}
	public function create(){
		return view('admin.tags.create');
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
		Tags::create($input);
		return redirect('tags');
	}

	public function show($id){
		$halaman = 'tags';
		$id_brand = $id;
		$brand_detail = Tags::findOrFail($id);
		return view('admin.tags.show', compact('halaman' ,'brand_detail', 'id_brand'));
	}

	public function edit($id){
		$halaman = 'tags';
		$id_brand = $id;
		$brand_detail = Tags::findOrFail($id);
		return view('admin.tags.edit', compact('halaman' ,'brand_detail', 'id_brand'));
	}

	public function update($id, Request $request){
		$halaman = 'tags';
		$id_brand = $id;
		$brand_detail = Tags::findOrFail($id);

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
		return redirect('tags');
	}

	public function destroy($id){
		$brand_detail = Tags::findOrFail($id);
		$brand_detail->delete();
		return redirect('tags');
	}
}
