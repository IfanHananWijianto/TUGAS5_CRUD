@extends('layout')
@section('konten')

<div class="container mt-3" >
    <div class="row" style="margin;20px">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h2>Edit Kategori</h2>

                    <form action="{{ route('keranjang.update',$keranjang)}}" method="POST">
                        @method('PUT')
                        @csrf
                        <input type="hidden" name="id_produk" value="{{ $keranjang->id_produk }}">
                        <div class="mb-3 mt-4">
                        <label for="exampleInputEmail1" class="form-label">Nama</label>
                        <input type="text" class="form-control " id="exampleInputEmail1" name="nama_produk" value="{{ $keranjang->nama_produk }}" readonly>
                        </div>

                        <div class="mb-3 mt-4">
                            <label for="exampleInputEmail1" class="form-label">Harga</label>
                            <input type="number" class="form-control " id="exampleInputEmail1" name="harga" value="{{ $keranjang->harga }}" readonly>
                        </div>

                        <div class="mb-3 mt-4">
                            <label for="exampleInputEmail1" class="form-label">Jumlah</label>
                            <input type="number" class="form-control " id="exampleInputEmail1" name="jumlah" value="{{ $keranjang->jumlah }}">
                        </div>

                        <button type="submit" class="btn btn-primary">Tambah Jumlah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>



  @endsection
