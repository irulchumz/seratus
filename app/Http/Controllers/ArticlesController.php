<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Articles;

class ArticlesController extends Controller
{
    public function index(){
		$halaman = 'articles';
		$articles_list = Articles::all()->sortBy('name');
		$articles_count = $articles_list->count();
		return view('admin.articles.index', compact('halaman' ,'articles_list', 'articles_count'));
	}
	public function create(){
		return view('admin.articles.create');
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
		Articles::create($input);
		return redirect('articles');
	}

	public function show($id){
		$halaman = 'articles';
		$id_brand = $id;
		$brand_detail = Articles::findOrFail($id);
		return view('admin.articles.show', compact('halaman' ,'brand_detail', 'id_brand'));
	}

	public function edit($id){
		$halaman = 'articles';
		$id_brand = $id;
		$brand_detail = Articles::findOrFail($id);
		return view('admin.articles.edit', compact('halaman' ,'brand_detail', 'id_brand'));
	}

	public function update($id, Request $request){
		$halaman = 'articles';
		$id_brand = $id;
		$brand_detail = Articles::findOrFail($id);

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
		return redirect('articles');
	}

	public function destroy($id){
		$brand_detail = Articles::findOrFail($id);
		$brand_detail->delete();
		return redirect('articles');
	}
}
