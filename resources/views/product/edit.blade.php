@extends('layout')
@section('konten')

<div class="container mt-3" >
    <div class="row" style="margin;20px">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h2>Edit Produk</h2>
@if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

<form action="/product/produk/{{ $produk->id }}" method="POST">
    @method('PUT')
    @csrf
  <div class="mb-3 mt-4">
    <label for="exampleInputEmail1" class="form-label">Nama</label>
    <input type="text" class="form-control " id="exampleInputEmail1" name="nama_produk" value="{{ $produk->nama }}">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Deskripsi</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="deskripsi" value="{{ $produk->deskripsi }}">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Harga</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="harga" value="{{ $produk->harga }}">
  </div>
  <select class="form-select " aria-label="Default select example"
            name="id_kategori">
            <option selected>Pilih Kategori Produk</option>
            @foreach ($kategori as $item)
                <option value="{{ $item->id }}" {{ $produk->id_kategori == $item->id ? 'selected' : '' }}>  {{ $item->nama }}</option>
            @endforeach
        </select>
            <div class="invalid-feedback">
                Pilih salah satu kategori
            </div>
        <button type="submit" class="btn btn-primary mt-3">Edit Data</button>

</form>




@endsection
