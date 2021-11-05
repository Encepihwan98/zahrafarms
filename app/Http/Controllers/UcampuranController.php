<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Blog;
use Illuminate\Support\Facades\Redirect;

class UcampuranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function perangkat_desa()
    {
        $data = DB::table('perangkatdesa')->get();
        return view('users.perangkat_desa', ['data' => $data]);
    }
    public function galery()
    {
        return view('users.galery');
    }

    public function wisata()
    {
        $data = DB::table('wisata')->get();
        return view('users.wisata', ['data' => $data]);
    }

    public function contact()
    {
        return view('users.contact');
    }

    public function blog()
    {
        $blogs = Blog::all();
        /* dump($blogs); */
        return view('users.blog', ['blog' => $blogs]);
    }

    public function agenda()
    {
        $datas = DB::table('agendas')->get();
        return view('users.agenda',['data' => $datas]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function readmore($id)
    {
        $blogs = Blog::find($id);
        /* dump($blogs); */
        return view('users.blog_detail', ['blog' => $blogs]);
    }

     public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
