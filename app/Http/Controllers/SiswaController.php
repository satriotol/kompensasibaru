<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\datamahasiswa;

use App\Exports\datamahasiswaExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

class SiswaController extends Controller
{
	public function index()
	{
		$datamahasiswa = datamahasiswa::all();
		return view('pages.siswa',['datamahasiswa'=>$datamahasiswa]);
	}

	public function export_excel()
	{
		return Excel::download(new datamahasiswaExport, 'datamahasiswa.xlsx');
	}
}