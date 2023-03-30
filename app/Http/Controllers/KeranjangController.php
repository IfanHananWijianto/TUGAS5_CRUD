<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Keranjang;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class KeranjangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {

        $data['keranjang'] = Keranjang::all();
        $data['jml_item'] = Keranjang::all()->count();
        $data['tot_pembayaran']=Keranjang::all()->sum('total_harga');

        return view('keranjang.index', $data);
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

        $validated = $request->validate([
            'id_produk'=>'required',
            'nama_produk' => 'required',
            'harga' => 'required',
            'jumlah'=> 'required',


        ]);
        $id_produk= $validated['id_produk'];
        $cek = Keranjang:: where('id_produk',$id_produk)->first();
        //=======================

        if(isset($cek)){
            Keranjang::where('id_produk', $id_produk)->update([
                'harga' => $validated['harga'],
                'jumlah' => $validated['jumlah']+1,
                'total_harga'=> (int)$validated['harga'] *(int)$validated['jumlah']
            ]);
            return redirect(route('keranjang.index'));
        }else
        {
            Keranjang::create([

                'id_produk' => $validated['id_produk'],
                'nama_produk' => $validated['nama_produk'],
                'harga' => $validated['harga'],
                'jumlah' => $validated['jumlah'],
                'total_harga'=> (int)$validated['harga'] *(int)$validated['jumlah']
            ]);
        }

        return redirect(route('keranjang.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Keranjang  $keranjang
     * @return \Illuminate\Http\Response
     */
    public function show(Keranjang $keranjang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Keranjang  $keranjang
     * @return \Illuminate\Http\Response
     */
    public function edit(Keranjang $keranjang)
    {
        $data = [
            'keranjang' => $keranjang,
        ];

        return view('keranjang.edit', $data);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Keranjang  $keranjang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $validated = $request->validate([
            'nama_produk' => 'required',
            'harga'=>'required',
            'jumlah'=> 'required'

        ]);

        Keranjang::where('id', $id)->update([
            'harga' => $validated['harga'],
            'jumlah' => $validated['jumlah'],
            'total_harga'=> (int)$validated['harga'] *(int)$validated['jumlah']
        ]);
        return redirect(route('keranjang.index'));
        //return redirect('/product/produk');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Keranjang  $keranjang
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Keranjang::destroy($id);
        return redirect(route('keranjang.index'));
    }
}
