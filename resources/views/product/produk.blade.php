@extends('layout')
@section('konten')



<div class="container mt-3" >
    <div class="row" style="margin;20px">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h2>Halaman product</h2>
                </div>
                <div class="card-body">
                    <a href="{{ url('/product/add') }}">
                        <button type="button" class="btn btn-primary mt-3">Tambah Produk</button>
                    </a>
                <div class="grid-container">

                @foreach ($produk as $item)
                <div>
            <form action="{{route('keranjang.store')}}" class="form" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="card-group mt-3">
                <div class="row">
                    <div class="col-sm-20">
                        <div class="card">
                            <div class="grid-container">
                                <div class="card-body">
                                    <div class="card-title">
                                        <b>
                                            {{ $item->nama }}
                                        </b>
                                    </div>
                                    <p class="card-text">{{ $item->deskripsi }}</p>
                                    <h5>{{ $item->harga }}</h5>

                                            <input type="hidden" name="id_produk" id="" value="{{ $item->id }}">
                                            <input type="hidden" name="nama_produk" id="" value="{{ $item->nama }}">
                                            <input type="hidden" name="harga" id="" value="{{ $item->harga }}">
                                            <input type="hidden" name="jumlah" id="" value="1">


                                        <button type="submit" class="btn btn-primary"><i class="fa-solid fa-cart-plus"></i></button>

                                            <a href="/product/produk/{{ $item->id}}/edit">
                                                <button type="button" class="btn btn-warning "><i class="fa-solid fa-pen-to-square"></i></button>
                                            </a>
                                            <a href="/product/produk/{{ $item->id}}/delete">
                                                <button type="button" class="btn btn-danger"><i class="fa-solid fa-regular fa-trash"></i></button>
                                            </a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
        </div>
            @endforeach
        </div>
            @endsection

