<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Blog;
use Illuminate\Support\Facades\Redirect;
use File;
use RealRashid\SweetAlert\Facades\Alert;

class AdminController extends Controller
{
    public function adminperangkatdesa(){
        $data = DB::table('perangkatdesa')->get();
        return view('admin.perangkatdesa', ['data' => $data]);
    }

    public function adminperangkatdesatambah(){
        return view('admin.form_perangkatdesa');
    }

    public function adminperangkatdesaadd(Request $request){
        $request->validate([
            'nama'     => 'required',
            'jabatan'  => 'required',
            'file'    => 'required',
        ]);

        $file = $request->file('file');
        $nama_file = time()."_".$file->getClientOriginalName();
        $file->move('img/perangkatdesa', $nama_file);

        DB::table('perangkatdesa')->insert([
            'nama'      => $request->nama,
            'jabatan'   => $request->jabatan,
            'image'     => $nama_file,
        ]);
        return redirect(url('/admin/perangkatdesa'))->with('pesan', 'Data perangkat desa berhasil disimpan');
    }

    public function adminperangkatdesadelete(Request $request){
        $data = DB::table('perangkatdesa')->where('id', $request->id)->first();
        File::delete('img/perangkatdesa/'.$data->image);
        DB::table('perangkatdesa')->where('id',$request->id)->delete();
        return redirect(url('/admin/perangkatdesa'))->with('pesan', 'Data perangkat desa berhasil dihapus');
    }

    // ===============================================================
    // Wisata
    // ===============================================================
    public function adminwisata(){
        $data = DB::table('wisata')->get();
        return view('admin.wisata', ['data' => $data]);
    }

    public function adminwisatatambah(){
        return view('admin.form_wisata');
    }

    public function adminwisataadd(Request $request){
        $request->validate([
            'file'      => 'required',
            'judul'     => 'required',
            'deskripsi' => 'required',
            'map'       => 'required',
        ]);

        $file = $request->file('file');
        $nama_file = time()."_".$file->getClientOriginalName();
        $file->move('img/wisata', $nama_file);

        DB::table('wisata')->insert([
            'image'     => $nama_file,
            'judul'     => $request->judul,
            'deskripsi' => $request->deskripsi,
            'map'       => $request->map,
        ]);
        return redirect(url('/admin/wisata'))->with('pesan', 'Data wisata berhasil disimpan');
    }

    public function adminwisatadelete(Request $request){
        $data = DB::table('wisata')->where('id', $request->id)->first();
        File::delete('img/wisata/'.$data->image);
        DB::table('wisata')->where('id',$request->id)->delete();
        return redirect(url('/admin/wisata'))->with('pesan', 'Data wisata berhasil dihapus');
    }
}
