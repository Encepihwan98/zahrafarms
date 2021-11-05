<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Blog;
use Illuminate\Support\Facades\Redirect;
use File;
use RealRashid\SweetAlert\Facades\Alert;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::all();
        /* dump($blogs); */

        return view('admin.blog', ['blog' => $blogs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.form_blog');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /* dump($request); */

        // $this-> validate($request, [
        //         'judul' => 'judul',
        //         'isi' => 'isi',
        //         'kategori' => 'kategori',
        //     ]);

        $foto = $request->file('foto');

        $nama_foto = time()."_".$foto->getClientOriginalName();

        $tujuan_upload = 'data_file';
        $foto->move($tujuan_upload,$nama_foto);

        Blog::create([
            'judul' => $request->judul,
            'isi' => $request->isi,
            'foto' => $nama_foto,
		    'kategori' => $request->kategori,
        ]);
        Alert::success('Berhasil', 'Data Berhasil Di tambahakan');

        return Redirect('/Blog')->with('success', 'Task Created Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blogs = Blog::find($id);
        /* dump($blogs); */
        return view('admin.form_blog_edit', ['blog' => $blogs]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
     /*    $this-> validate($request, [
            'judul' => 'judul',
            'isi' => 'isi',
            'kategori' => 'kategori',
        ]); */

        $blogs = Blog::find($id);
        $blogs->update(['judul' => $request->judul,
                        'isi' => $request->isi,
                        'kategori' => $request->kategori,]);
        Alert::success('Berhasil Update', 'Data Berhasil di update');
        return Redirect('/Blog')->with('success', 'Task Created Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blogs = Blog::find($id);
        File::delete('data_file/'.$blogs->foto);
        Blog::find($id)->delete();
        return Redirect('/Blog')->with('msg','Data Berhasil di hapus'); //
    }
}
