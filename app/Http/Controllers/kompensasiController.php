<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

use App\datamahasiswa;
use File;


class kompensasiController extends Controller
{
    public function home(){
        return view('pages.home');
    }
    public function header(){
        return view('includes.header');
    }
    public function ik(){
        // $datamahasiswa = datamahasiswa::all()->sortBy('nama');
        // $datamahasiswa = datamahasiswa::all()->sortByDesc('nama');     
        // $datamahasiswa = datamahasiswa::all()->where('kelas','=','IK2A');
        // $datamahasiswa = datamahasiswa::orderBy('nama', 'asc')->where('kelas','=','IK2A')->get();
        		// validasi
        $datamahasiswa = datamahasiswa::orderBy('kelas', 'ASC')->orderBy('nama', 'ASC')->paginate(5);
        return view('pages.ik', ['datamahasiswa' => $datamahasiswa]);
    }
    public function ik2a(){
        // $datamahasiswa = datamahasiswa::all()->sortBy('nama');
        // $datamahasiswa = datamahasiswa::all()->sortByDesc('nama');     
        // $datamahasiswa = datamahasiswa::all()->where('kelas','=','IK2A');
        // $datamahasiswa = datamahasiswa::orderBy('nama', 'asc')->where('kelas','=','IK2A')->get();
        $datamahasiswa = datamahasiswa::orderBy('nama', 'asc')->where('kelas','=','IK2A')->Paginate(5);
        
        return view('pages.ik2a', ['datamahasiswa' => $datamahasiswa]);
    }
    public function ik2b(){
        // $datamahasiswa = datamahasiswa::all()->sortBy('nama');
        // $datamahasiswa = datamahasiswa::all()->sortByDesc('nama');     
        // $datamahasiswa = datamahasiswa::all()->where('kelas','=','IK2A');
        // $datamahasiswa = datamahasiswa::orderBy('nama', 'asc')->where('kelas','=','IK2A')->get();
        $datamahasiswa = datamahasiswa::orderBy('nama', 'asc')->where('kelas','=','IK2B')->Paginate(5);
        return view('pages.ik2b', ['datamahasiswa' => $datamahasiswa]);
    }
    public function tambah(){
        return view('pages.ik2a_tambah');
    }
    public function store(Request $request){
        $this->validate($request,[
            'nama' => 'required',
            'kelas' => 'required',
            'sakit' => 'required',
            'ijin' => 'required',
            'alpha' => 'required',
            'alamat' => 'required',
            'foto' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
        ]);
        $file = $request->file('foto');
        $nama_file = time()."_".$file->getClientOriginalName();
        $tujuan_upload = 'data_file';
        $file->move($tujuan_upload,$nama_file);

        datamahasiswa::create([
            'nama' => $request->nama,
            'kelas' => $request->kelas,
            'sakit' => $request->sakit,
            'ijin' => $request->ijin,
            'alpha' => $request->alpha,
            'alamat' => $request->alamat,
            'foto' => $nama_file,
        ]);
        return redirect('/ik2a')->with('status', 'Data Berhasil Ditambahkan!');

    }
    public function edit($id)
    {
        $datamahasiswa = datamahasiswa::find($id);
        return view('pages.ik2a_edit', ['datamahasiswa' => $datamahasiswa]);
    }
    public function editfoto($id)
    {
        $datamahasiswa = datamahasiswa::find($id);
        return view('pages.ik2a_editfoto', ['datamahasiswa' => $datamahasiswa]);
    }
    public function update($id, Request $request)
    {
        $this->validate($request,[
            'nama' => 'required',
            'kelas' => 'required',
            'sakit' => 'required',
            'ijin' => 'required',
            'alpha' => 'required',
            'alamat' => 'required',
        ]);
        $datamahasiswa = datamahasiswa::find($id);
        $datamahasiswa->nama = $request->nama;
        $datamahasiswa->kelas = $request->kelas;
        $datamahasiswa->sakit = $request->sakit;
        $datamahasiswa->ijin = $request->ijin;
        $datamahasiswa->alpha = $request->alpha;
        $datamahasiswa->alamat = $request->alamat;
        $datamahasiswa->save();
        return redirect('/ik2a')->with('status', 'Data Berhasil Diupdate!');
    }
    public function updatefoto($id, Request $request)
    {
        $this->validate($request,[
            'foto' => 'required|file|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $file = $request->file('foto');
        $nama_file = time()."_".$file->getClientOriginalName();
        $tujuan_upload = 'data_file';
        $file->move($tujuan_upload,$nama_file);

        $datamahasiswa = datamahasiswa::find($id);
        $datamahasiswa->foto = $nama_file;
        $datamahasiswa->save();
        return redirect('/ik2a')->with('status', 'Data Berhasil Diupdate!');
    }
    public function hapus($id){
        $datamahasiswa = datamahasiswa::where('id',$id)->first();
        File::delete('data_file/'.$datamahasiswa->foto);
        datamahasiswa::where('id',$id)->delete();
        return redirect('/ik2a');
    }
    public function about(){
        return view('pages.about');
    }
    public function projects(){
        return view('pages.projects');
    }
    public function contact(){
        return view('pages.contact');
    }
}