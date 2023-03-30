@extends('layout')
@section('konten')

<div class="container mt-3" >
    <div class="row" style="margin;20px">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h2>Edit Keranjang</h2>

@if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

<form action="/kategoris/kategori/{{ $kategori->id }}" method="POST">
    @method('PUT')
  @csrf
  <div class="mb-3 mt-4">
    <label for="exampleInputEmail1" class="form-label">Nama</label>
    <input type="text" class="form-control " id="exampleInputEmail1" name="nama" value="{{ $kategori->nama }}">
  </div>

  <button type="submit" class="btn btn-primary">Edit Data</button>
</form>




@endsection
