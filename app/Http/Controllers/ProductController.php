<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Product;
use Illuminate\Support\Facades\Redirect;
use File;
use RealRashid\SweetAlert\Facades\Alert;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Product::all();
        return view('admin.product', ['data' => $datas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.form_product');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'foto' => 'required|mimes:jpg,png,jpeg|max:2048',
        ]);
        $foto = $request->file('foto');

        $nama_foto = time()."_".$foto->getClientOriginalName();

        $tujuan_upload = 'data_file';
        $foto->move($tujuan_upload,$nama_foto);

        Product::create([
            'nama_product' => $request->nama_product,
            'harga' => $request->harga,
            'deskripsi' => $request->deskripsi,
            'foto' => $nama_foto

        ]);
        Alert::success('Berhasil Insert', 'Data Berhasil dimasukkan');
        return Redirect('/A_product')->with('success', 'Task Created Successfully!');
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
        $product = Product::findOrFail($id);
        return view('admin.form_product_edit', ['product' => $product]);
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
        $request->validate([
            'foto' => 'required|mimes:jpg,png,jpeg|max:2048',
        ]);
        $foto = $request->file('foto');

        $nama_foto = time()."_".$foto->getClientOriginalName();

        $tujuan_upload = 'data_file';
        $foto->move($tujuan_upload,$nama_foto);

        $product = Product::find($id);
        $product->update(['nama_product' => $request->nama_product,
                        'harga' => $request->harga,
                        'deskripsi' => $request->deskripsi,
                        'foto' => $nama_foto,
                    ]);
        Alert::success('Berhasil Update', 'Data Berhasil di update');
        return Redirect('/A_product')->with('success', 'Task Created Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Responsea
     */
    public function destroy($id)
    {
        $info = Product::find($id);
        File::delete('data_file/'.$info->foto);
        $info->delete();
        return Redirect('/A_product')->with('msg','Data Berhasil di hapus');
    }
}
