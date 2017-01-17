<?php
use App\Blog; 

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
  
Route::get('/halo', function()
{
	return "Halo, bro";
});

Route::get('/halo-juga', 'SiteController@haloJuga');

Route::get('/bayar/{nama}/{jumlah}/{harga}/{diskon}', function($nama,$jumlah,$harga,$diskon)
{
	return "Item ".$nama." dengan total ".$harga*$jumlah." dan diskon ".$jumlah*$harga*$diskon/100;
});

Route::post('/phalo_juga', function()
{
	$y=1;
	for($x=1;$x<=5;$x++)
	{
		$nama[$x][$y]=$_POST['nama'][$x][$y];
		$harga[$x][$y]=$_POST['harga'][$x][$y];
		$jumlah[$x][$y]=$_POST['jumlah'][$x][$y];
		$diskon[$x][$y]=$_POST['diskon'][$x][$y];
		$y++;
	}
	$y=1;
	for($x=1;$x<=5;$x++)
	{
		echo "Item bernama ".$nama[$x][$y]." memiliki total ".$harga[$x][$y]*$jumlah[$x][$y].", lalu diskon ".$jumlah[$x][$y]*$harga[$x][$y]*$diskon[$x][$y]/100;
		echo "%<br>";
		$y++;
	}
});

Route::get('/task2', 'SiteController@task2');

Route::post('/ptask2', 'SiteController@ptask2');

Route::get('/tambah', function()
{
    $blog = new Blog;  
    $blog->nama = "Judul Pertama";
    $blog->jumlah = "Deskripsi nya disini, contoh menambah data pada route.";
    $blog->save();    
});

Route::get('/update', function()
{
    $blog = Blog::find(1);  
    $blog->nama = "Judul Diedit";
    $blog->jumlah = "Deskripsi juga sudah di Edit";
    $blog->save();
});