@extends('layout')
@section('konten')

<h3>Tambah Menu Makanan</h3>

@if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

<form action="{{ url('/kategoris/kategori')}}" method="POST">
  @csrf
  <div class="mb-3 mt-4">
    <label for="exampleInputEmail1" class="form-label">Nama</label>
    <input type="text" class="form-control " id="exampleInputEmail1" name="nama" placeholder="ex makanan">
  </div>
  <button type="submit" class="btn btn-primary">Tambah</button>
</form>




@endsection
