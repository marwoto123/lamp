<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
   public function index()
   {
      $pegawai = Pegawai::all();
      return view('pegawai.index', compact(['pegawai']));
   }


   public function create()
   {
      return view('pegawai.create');
   }


   public function store(Request $request)
   {
      // return view('pegawai_store');
      // dd($request->all());
   }
}
