<?php

use App\Http\Controllers\DosenController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\Jurusan;
use App\Models\User;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('index',['title'=> 'Home',
   'active' => 'home']);
});
 Route::get('/about', function(){
    return view('about',['title' => 'About Me','name' => 'Miftahurrahmi',
     'no_tlp' => '082285833629',
'alamat' =>'padang',
'image' => 'Scan_PasfotoMiftahurrahmi.jpg',
'jekel' => 2,
'active' => 'about'
]);
 });

 Route::get('/posts', [PostController::class,'index']);

 Route::get('/posts/single-post/{post:slug}',[PostController::class,'single']);
 
 Route::get('/posts/categories', function() {
   return view('posts.categories', [
      'title' => 'Category',
      'active' => 'category',
      'categories' => Category::all()
   ]);
 });

 Route::get('/posts/category/{category:slug}',function(Category $category){
   return view('posts.category',[
      'title' => 'Category',
      'active' => 'posts',
      'posts' => $category->posts
   ]);
 });

 Route::get('/mahasiswa', [MahasiswaController::class, 'index']);

 Route::get('/mahasiswa/single-data/{no_bp}',[MahasiswaController::class,'single']);
 Route::get('/nilai', [NilaiController::class, 'index']);
 Route::get('/nilai/detail/{nobp}',[NilaiController::class,'rata_mhs']);

 Route::get('/dosen', [DosenController::class,'index']);

 Route::get('/dosen/single-data/{dosen:nip}',[DosenController::class,'single']);

 Route::get('/dosen/jurusans', function() {
   return view('dosen.jurusans', [
      'title' => 'Jurusan',
      'active' => 'jurusan',
      'jurusans' =>Jurusan::all()
   ]);
 });

 Route::get('/dosen/jurusan/{jurusan:slug}',function(Jurusan $jurusan){
   return view('dosen.jurusan',[
      'title' => 'Jurusan',
      'active' => 'dosen',
      'dosen' => $jurusan->dosens
   ]);
 });

 Route::get('/posts/author/{user:username}',function(User $user){
   return view('posts.category', [
      'title' => 'Category Author',
      'active' => 'posts',
      'posts' => $user->posts
   ]);
 });



