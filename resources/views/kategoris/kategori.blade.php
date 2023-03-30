@extends('layout')
@section('konten')


<div class="container mt-3" >
    <div class="row" style="margin;20px">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h2>Halaman Kategori</h2>
                </div>
                <div class="card-body">
                <a href="{{ url('/kategoris/add') }}">
                    <button type="button" class="btn btn-primary mt-3">Tambah Kategori Produk</button>
                </a>
                </div>
                @foreach ($kategori as $item)

                <div class="container">
                <div class="row">
                <div class="col-sm-3 mt-4">
                    <div class="card">
                    <div class="card-body">
                        <div class="card-title"><b>
                        {{ $item->nama }}
                        </b></div>
                        <br>
                        <br>
                                <a href="/kategoris/kategori/{{ $item->id}}/edit">
                                <button type="button" class="btn btn-warning">Edit</button>
                        </a>
                        <a href="/kategoris/kategori/{{ $item->id}}/delete">
                                <button type="button" class="btn btn-danger">Hapus</button>
                        </a>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
                @endforeach
                @endsection
