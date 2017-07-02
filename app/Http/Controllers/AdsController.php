<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ads;

class AdsController extends Controller
{
    //
	public function index(){
		$halaman = 'ads';
		$ads_list = Ads::all()->sortBy('name');
		$ads_count = $ads_list->count();
		return view('admin.ads.index', compact('halaman' ,'ads_list', 'ads_count'));
	}
	public function create(){
		return view('admin.ads.create');
	}

	public function store(Request $request){
		$input = $request->all();
		if ($request->hasFile('foto')) {
			$foto =$request->file('foto');
			$ext = $foto->getClientOriginalExtension();

			if ($request->file('foto')->isValid()) {
				$photo_name = date('YmdHis').".$ext";
				$upload_path = 'product_photo';
				$request->file('foto')->move($upload_path, $photo_name);
				$input['foto']=$photo_name;
			};
		};
		Ads::create($input);
		return redirect('ads');
	}

	public function show($id){
		$halaman = 'ads';
		$id_product = $id;
		$product_detail = Ads::findOrFail($id);
		return view('admin.ads.show', compact('halaman' ,'product_detail', 'id_product'));
	}

	public function edit($id){
		$halaman = 'ads';
		$id_product = $id;
		$product_detail = Ads::findOrFail($id);
		return view('admin.ads.edit', compact('halaman' ,'product_detail', 'id_product'));
	}

	public function update($id, Request $request){
		$halaman = 'ads';
		$id_product = $id;
		$product_detail = Ads::findOrFail($id);

		$input = $request->all();

        // Cek apakah ada foto baru di form?
        if ($request->hasFile('foto')) {
            // Hapus foto lama
            $this->hapusFoto($product_detail);

            // Upload foto baru
           $input['foto'] = $this->uploadFoto($request);
        }

        // Update siswa di tabel siswa
        $product_detail->update($input);

		$check = $request->foto;
		if (isset($check)) {
			$foto =$request->foto;
			// $ext = $foto->getClientOriginalExtension();

			// $ext = $foto->getClientOriginalExtension();
			$check3 = $request->hasFile('foto');
			// if ($request->file('foto')->isValid()) {
				$photo_name = date('YmdHis')."png";
				$upload_path = '../../product_photo';
				// $request->file('foto')->move($upload_path, $photo_name);
				$input['foto']=$photo_name;
				// $check2 = $input['foto'];
     			# code...
			// };
     		# code...
		};
		
		$product_detail->update($request->all());
		return redirect('ads');
	}

	public function destroy($id){
		$product_detail = Ads::findOrFail($id);
		$product_detail->delete();
		return redirect('ads');
	}


	// ===============================================================
}
