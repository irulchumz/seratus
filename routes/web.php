<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// THIS IS vvvv THE ROOT
Route::get('/', function () {
	return realpath(resource_path('views'));
    return view('welcome');
});
Route::get('asd', function () {
	
    return view('welcome');
});

Route::get('users',['uses' => 'UsersController@index']);
Route::get('users/create',['uses' => 'UsersController@create']);
Route::post('users',['uses' => 'UsersController@store']);

Route::get('brands',['uses' => 'BrandsController@index']);
Route::get('brands/create',['uses' => 'BrandsController@create']);
Route::get('brands/{brands}',['uses' => 'BrandsController@show']);
Route::post('brands',['uses' => 'BrandsController@store']);
Route::get('brands/{brands}/edit',['uses' => 'BrandsController@edit']);
Route::patch('brands/{brands}',['uses' => 'BrandsController@update']);
Route::delete('brands/{brands}',['uses' => 'BrandsController@destroy']);

Route::resource('ads', 'AdsController');
Route::resource('articles', 'ArticlesController');
Route::resource('categories', 'CategoriesController');
Route::resource('collections', 'CollectionsController');
Route::resource('favorites', 'FavoritesController');
Route::resource('magazines', 'MagazinesController');
Route::resource('products', 'ProductsController');
Route::resource('quotations', 'QuotationsController');
Route::resource('tags', 'TagsController');
Route::resource('showrooms', 'ShowroomsController');

Route::get('sampledata', function () {
	DB::table('brands')->insert([
		[
		'name'				=>	'sample',
		'address'			=>	'sample',
		'contact'			=>	'sample',
		'description'		=>	'sample',
		'created_at'		=>	'2016-03-10 19:10:15',
		'updated_at'		=>	'2016-03-10 19:10:15'
		],
		[
		'name'				=>	'sample',
		'address'			=>	'sample',
		'contact'			=>	'sample',
		'description'		=>	'sample',
		'created_at'		=>	'2016-03-10 19:10:15',
		'updated_at'		=>	'2016-03-10 19:10:15'
		]
		]);
	});

// THIS IS when I created the other page- 'users' --> ROUTE 
// --- BAD PRACTICE BECAUSE IT MEANS WE CREATED CONTENT UNDER ROUTE
/*
Route::get('users', function () {
	$users = [
	'0' => [
	'first_name' => 'Nur',
	'last_name' => 'Khairusy',
	'location' => 'Bandung',
	],
	'1' => [
	'first_name' => 'Nur',
	'last_name' => 'Khairunisa',
	'location' => 'Jakarta',
	]
	];
	return $users;
});
*/
Auth::routes();

Route::get('/home', 'HomeController@index');

//FRONTEND

Route::get('home', function () {
    return view('front.home');
});
Route::get('produk-karya', function () {
    return view('front.produk-karya');
});
Route::get('brand', function () {
    return view('front.brand');
});
Route::get('brand-detail', function () {
    return view('front.brand-detail');
});
Route::get('most-loved-product', function () {
    return view('front.most-loved-product');
});
Route::get('most-loved-brand', function () {
    return view('front.most-loved-brand');
});


Route::get('login', function () {
    return view('front.login');
});

Route::get('register', function () {
    return view('front.register');
});

Route::get('magazine', function () {
    return view('front.magazine');
});
Route::get('a-story', function () {
    return view('front.a-story');
});
Route::get('news', function () {
    return view('front.news');
});
Route::get('personality', function () {
    return view('front.personality');
});
Route::get('visual', function () {
    return view('front.visual');
});
Route::get('journal', function () {
    return view('front.journal');
});
Route::get('loved-product/empty', function () {
    return view('front.loved-product');
});
