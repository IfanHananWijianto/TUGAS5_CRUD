@extends('layout')
@section('konten')


<div class="container mt-3" >
    <div class="row" style="margin;20px">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h2>Halaman Keranjang</h2>
                </div>
                <div class="card-body">

            <a href="{{ url('/product/produk') }}">
                <button type="button" class="btn btn-primary mt-3">Tambah Belanja </button>
            </a>
            </div>
            <div class="container mt-4">
                <div class="row">
                    <table class="table table-hover">
                        <thead>
                            <tr align="center" >
                                <th>No</th>
                                <th>Nama Produk</th>
                                <th>Harga</th>
                                <th>Jumlah</th>
                                <th>Total Harga</th>
                                <th>Aksi</th>
                            </tr>

                        </thead>
                        <tbody>
                            @php
                                $i = 1;
                            @endphp
                            @foreach ($keranjang as $item)
                            <tr align="center">
                                <td>{{ $i++ }}</td>
                                <td>{{ $item->nama_produk }}</td>

                                <td>{{ $item->harga }}</td>
                                <td>{{ $item->jumlah }}</td>
                                <td>{{ $item->total_harga }}</td>
                                <td>
                                    <a href="{{ route('keranjang.edit',$item->id) }}" class="btn btn-warning" >Edit</a>
                                    <a href="/product/produk/{{ $item->id}}/delete" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
                <table>
                    <tr>
                        <td><label for="">Jumlah Item</label></td>
                        <td>:</td>
                        <td>{{ $jml_item }}</td>
                    </tr>
                    <tr>
                        <td><label for="">Jumlah Pembayaran</label></td>
                        <td>:</td>
                        <td>{{  $tot_pembayaran }}</td>
                    </tr>
                </table>
            </div>


            @endsection
