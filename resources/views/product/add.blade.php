@extends('layout')
@section('konten')

<h3>Tambah Produk </h3>

@if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

<form action="{{ url('/product/produk')}}" method="POST">
  @csrf
  <div class="mb-3 mt-4">
    <label for="exampleInputEmail1" class="form-label">Nama</label>
    <input type="text" class="form-control " id="exampleInputEmail1" name="nama_produk" placeholder="nama produk">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Deskripsi</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="deskripsi" placeholder="deskripsi produk">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Harga</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="harga" placeholder="harga">
  </div>
  <select class="form-select " aria-label="Default select example"
            name="id_kategori">
            <option selected>Pilih Kategori Produk</option>
            @foreach ($kategori as $item)
                <option value="{{ $item->id }}"> {{ $item->nama }}</option>
            @endforeach
        </select>
            <div class="invalid-feedback">
                Pilih salah satu kategori
            </div>
        <button type="submit" class="btn btn-primary mt-3">Tambah</button>

</form>




@endsection
