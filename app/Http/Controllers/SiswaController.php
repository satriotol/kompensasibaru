<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\datamahasiswa;
use File;

use App\Exports\datamahasiswaExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

class SiswaController extends Controller
{
	public function index()
	{
		// $datamahasiswa = datamahasiswa::all();
        $datamahasiswa = datamahasiswa::orderBy('nama', 'asc')->where('kelas','=','IK2A')->get();
		return view('pages.siswa',['datamahasiswa'=>$datamahasiswa]);
	}

	public function export_excel()
	{
		return Excel::download(new datamahasiswaExport, 'datamahasiswa.xlsx');
	}
	public function indexik2b()
	{
		// $datamahasiswa = datamahasiswa::all();
        $datamahasiswa = datamahasiswa::orderBy('nama', 'asc')->where('kelas','=','IK2B')->get();
		return view('pages.siswaik2b',['datamahasiswa'=>$datamahasiswa]);
	}

	public function export_excelik2b()
	{
		return Excel::download(new datamahasiswaExport, 'datamahasiswa.xlsx');
	}
}