<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Articles;

class ArticlesController extends Controller
{
    public function index(){
		$halaman = 'articles';
		$articles = Articles::paginate(10);

		$articles_list = Articles::all()->sortBy('name');
		$articles_count = $articles_list->count();
		return view('admin.articles.index', compact('halaman' ,'articles_list', 'articles_count', 'articles'));
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
				$upload_path = 'article_photo';
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
		$id_article = $id;
		$article_detail = Articles::findOrFail($id);
		return view('admin.articles.show', compact('halaman' ,'article_detail', 'id_article'));
	}

	public function edit($id){
		$halaman = 'articles';
		$id_article = $id;
		$article_detail = Articles::findOrFail($id);
		return view('admin.articles.edit', compact('halaman' ,'article_detail', 'id_article'));
	}

	public function update($id, Request $request){
		$halaman = 'articles';
		$id_article = $id;
		$article_detail = Articles::findOrFail($id);
		$input = $request->all();
		// $check = $request->foto;
		// if (isset($check)) {
		// 	$foto =$request->foto;
		// 	// $ext = $foto->getClientOriginalExtension();

		// 	// $ext = $foto->getClientOriginalExtension();
		// 	$check3 = $request->hasFile('foto');
		// 	// if ($request->file('foto')->isValid()) {
		// 		$photo_name = date('YmdHis')."png";
		// 		$upload_path = '../../brand_photo';
		// 		// $request->file('foto')->move($upload_path, $photo_name);
		// 		$input['foto']=$photo_name;
		// 		// $check2 = $input['foto'];
  //    			# code...
		// 	// };
  //    		# code...
		// };
        $article_detail->update($input);
		
		return redirect('articles');
	}

	public function destroy($id){
		$article_detail = Articles::findOrFail($id);
		$article_detail->delete();
		return redirect('articles');
	}
}
