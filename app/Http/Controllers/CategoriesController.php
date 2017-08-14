<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categories;

class CategoriesController extends Controller
{
     public function index(){
		$halaman = 'categories';
		$categories = Categories::paginate(10);
		
		$categories_count = $categories->count();
		return view('admin.categories.index', compact('halaman' ,'categories', 'categories_count'));
	}
	public function create(){
		return view('admin.categories.create');
	}

	public function store(Request $request){
		$input = $request->all();
		Categories::create($input);
		return redirect('categories');
	}

	public function show($id){
		$halaman = 'categories';
		$id_category = $id;
		$category_detail = Categories::findOrFail($id);
		return view('admin.categories.show', compact('halaman' ,'category_detail', 'id_category'));
	}

	public function edit($id){
		$halaman = 'categories';
		$id_category = $id;
		$categories = Categories::findOrFail($id);
		return view('admin.categories.edit', compact('halaman' ,'categories', 'id_category'));
	}

	public function update($id, Request $request){
		$halaman = 'categories';
		$id_category = $id;
		$categories = Categories::findOrFail($id);
		$input = $request->all();
		$categories->update($input);
		return redirect('categories');
	}

	public function destroy($id){
		$category_detail = Categories::findOrFail($id);
		$category_detail->delete();
		return redirect('categories');
	}
}
