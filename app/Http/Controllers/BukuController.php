<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class BukuController extends Controller
{
    public function index()
    {
    	$buku = DB::table('buku')->get();

    	return view('index',['buku' => $buku]);
	}

	public function input()
	{
		return view('input');
	}

	public function data(Request $request)
	{
	DB::table('buku')->insert([
		'judul' => $request->judul,
		'penerbit' => $request->penerbit,
		'tahun_terbit' => $request->tahun_terbit,
		'pengarang' => $request->pengarang	
	]);
	
		return redirect('/buku');
	}	

	public function edit($id)
	{
	$buku = DB::table('buku')->where('id',$id)->get();

	return view('edit',['buku' => $buku]);
	}

	public function update(Request $request)
	{
	DB::table('buku')->where('id',$request->id)->update([
		'judul' => $request->judul,
		'penerbit' => $request->penerbit,
		'tahun_terbit' => $request->tahun_terbit,
		'pengarang' => $request->pengarang
	]);
	
	return redirect('/buku');
	}

	public function hapus($id)
	{
	DB::table('buku')->where('id',$id)->delete();
		
	return redirect('/buku');
	}

}

