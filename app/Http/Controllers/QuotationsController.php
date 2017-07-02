<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Quotations;


class QuotationsController extends Controller
{
     public function index(){
		$halaman = 'quotations';
		$quotations_list = Quotations::all()->sortBy('name');
		$quotations_count = $quotations_list->count();
		return view('admin.quotations.index', compact('halaman' ,'quotations_list', 'quotations_count'));
	}
	public function create(){
		return view('admin.quotations.create');
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
		Quotations::create($input);
		return redirect('quotations');
	}

	public function show($id){
		$halaman = 'quotations';
		$id_brand = $id;
		$brand_detail = Quotations::findOrFail($id);
		return view('admin.quotations.show', compact('halaman' ,'brand_detail', 'id_brand'));
	}

	public function edit($id){
		$halaman = 'quotations';
		$id_brand = $id;
		$brand_detail = Quotations::findOrFail($id);
		return view('admin.quotations.edit', compact('halaman' ,'brand_detail', 'id_brand'));
	}

	public function update($id, Request $request){
		$halaman = 'quotations';
		$id_brand = $id;
		$brand_detail = Quotations::findOrFail($id);

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
		return redirect('quotations');
	}

	public function destroy($id){
		$brand_detail = Quotations::findOrFail($id);
		$brand_detail->delete();
		return redirect('quotations');
	}
}
