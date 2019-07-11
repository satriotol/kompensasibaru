<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\datamahasiswa;
use File;

use App\Imports\datamahasiswaImport;
use App\Exports\datamahasiswaExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

class SiswaController extends Controller
{
	public function cetak()
	{
		return Excel::download(new datamahasiswaExport, 'datamahasiswa.xlsx');
	}
	public function import_excel(Request $request) 
	{
		$this->validate($request, [
			'file' => 'required|mimes:csv,xls,xlsx'
		]);
		$file = $request->file('file');
		$nama_file = rand().$file->getClientOriginalName();
		$file->move('data_file',$nama_file);
		Excel::import(new datamahasiswaImport, public_path('/data_file/'.$nama_file));
		return redirect('/ik')->with('status', 'Data Berhasil Ditambahkan!');
	}
}