<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use Illuminate\Support\Facades\Validator;
use App\Mail\OrderMail;

class OrderController extends Controller
{
    /***
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.order');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $validator = Validator::make($request->all(), [
            'nama' => 'required',
            'alamat' => 'required',
            'email' => 'required|email:rfc,dns',
            'phone' => 'required',
            'qty' => 'required',
            'product' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect('Order')
                        ->withErrors($validator)
                        ->withInput();
        }
        $insert = new Order();
        $insert->nama = $request->nama;
        $insert->alamat = $request->alamat;
        $insert->email = $request->email;
        $insert->telp = $request->phone;
        $insert->product = join(',', $request->product);
        $insert->jumlah = join(',', $request->qty);
        $insert->save();
        
        $total = 0;
        $date = $this->tgl_indo(date(explode(' ', $insert->created_at)[0]));
        $i = 0;
        foreach ($request->price as $value) {
            $total += $value * $request->qty[$i];
            $i++;
        }


        $order_detail = [
            'id' => $insert->id,
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'email' => $request->email,
            'phone' => $request->phone,
            'products' => $request->product,
            'price' => $request->price,
            'qty' => $request->qty,
            'total' => $total,
            'order_date' => $date,
        ];

        \Mail::to('ihwanencep@gmail.com')->send(new OrderMail($order_detail));
        // dd($insert);

        return redirect('Order');
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

    function tgl_indo($tanggal){
        $bulan = array (
            1 =>   'Januari',
            'Februari',
            'Maret',
            'April',
            'Mei',
            'Juni',
            'Juli',
            'Agustus',
            'September',
            'Oktober',
            'November',
            'Desember'
        );
        $pecahkan = explode('-', $tanggal);
        
        // variabel pecahkan 0 = tanggal
        // variabel pecahkan 1 = bulan
        // variabel pecahkan 2 = tahun
    
        return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
    }
    
}
