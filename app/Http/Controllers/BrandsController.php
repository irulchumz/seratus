<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brands;



class BrandsController extends Controller
{
   //
	public function index(){
		$halaman = 'brands';
		$brands = Brands::paginate(10);
		// $brands_list = Brands::all()->sortBy('name');
		$brands_list = Brands::paginate(10)->sortBy('name');
		$brands_count = $brands_list->count();
		return view('admin.brands.index', compact('halaman' ,'brands_list', 'brands_count', 'brands'));
	}
	public function create(){
		return view('admin.brands.create');
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
		Brands::create($input);
		// dd($input);
		return redirect('brands');
	}

	public function show($id){
		$halaman = 'brands';
		$id_brand = $id;
		$brand_detail = Brands::findOrFail($id);
		return view('admin.brands.show', compact('halaman' ,'brand_detail', 'id_brand'));
	}

	public function edit($id){
		$halaman = 'brands';
		$id_brand = $id;
		$brand_detail = Brands::findOrFail($id);
		return view('admin.brands.edit', compact('halaman' ,'brand_detail', 'id_brand'));
	}

	public function update($id, Request $request){
		$halaman = 'brands';
		$id_brand = $id;
		$brand_detail = Brands::findOrFail($id);

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

        // Cek apakah ada foto baru di form?
   //      if ($request->hasFile('foto')) {
   //          // Hapus foto lama
   //          // $this->hapusFoto($brand_detail);

   //          // Upload foto baru
   //         // $input['foto'] = $this->uploadFoto($request);

			// $foto =$request->file('foto');
			// $ext = $foto->getClientOriginalExtension();

			// if ($request->file('foto')->isValid()) {
			// 	$photo_name = date('YmdHis').".$ext";
			// 	$upload_path = 'brand_photo';
			// 	$request->file('foto')->move($upload_path, $photo_name);
			// 	$input['foto']=$photo_name;
   //   			# code...
			// };
   //   		# code...
		
   //      }

        $brand_detail->update($input);

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
		// var_dump($check3);
		// if ($request->hasFile('foto')) {

		// 	//Hapus foto lama jika ada
		// 	$exist = Storage::disk('foto')->exist($brand_detail->foto);
		// 	var_dump($exist);
		// 	if (isset($brand_detail->foto) && $exist) {
		// 		$delete = Storage::disk('foto')->delete($brand_detail->foto);
		// 	}

		// 	$foto =$request->file('foto');
		// 	$ext = $foto->getClientOriginalExtension();

		// 	if ($request->file('foto')->isValid()) {
		// 		$photo_name = date('YmdHis').".$ext";
		// 		$upload_path = 'brand_photo';
		// 		$request->file('foto')->move($upload_path, $photo_name);
		// 		$input['foto']=$photo_name;
  //    			# code...
		// 	};
  //    		# code...
		// };
		dd($input);
		$brand_detail->update($request->all());
		// return $request->all();
		// return redirect('brands');
	}

	public function destroy($id){
		$brand_detail = Brands::findOrFail($id);
		$brand_detail->delete();
		return redirect('brands');
	}


	// ===============================================================
    // private function uploadFoto(BrandsRequest $request)
    // {
    //     $foto = $request->file('foto');
    //     $ext  = $foto->getClientOriginalExtension();

    //     if ($request->file('foto')->isValid()) {
    //         $foto_name   = date('YmdHis'). ".$ext";
    //         $upload_path = 'brand_photo';
    //         $request->file('foto')->move($upload_path, $foto_name);

    //         // Filename untuk database --> 20160220214738.jpg
    //         return $foto_name;
    //     }
    //     return false;
    // }

    // private function hapusFoto(Brands $brand_detail)
    // {
    //     $exist = Storage::disk('foto')->exists($brand_detail->foto);

    //     if (isset($brand_detail->foto) && $exist) {
    //         $delete = Storage::disk('foto')->delete($brand_detail->foto);
    //         if ($delete) {
    //             return true;
    //         }
    //         return false;
    //     }
    // }

	
}
