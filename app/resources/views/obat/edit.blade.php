@extends('layouts.master')
@section('judul', 'Edit Data Obat')
@section('content-header')


<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Edit Data Obat</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Data Obat</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
@endsection


@section('content')
<section class="content">

    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        {{-- <h3 class="card-title">Title</h3> --}}

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
            <i class="fas fa-minus"></i>
          </button>
          <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
            <i class="fas fa-times"></i>
          </button>
        </div>
      </div>
      <div class="card-body">
        <form method="POST" action="/obat/{{$obat->id}}">
            @method('PUT')
            @csrf
            {{-- <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Kode</label>
              <input type="text" name="kode" readonly value="{{$merk->kode}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
             </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Merk</label>
              <input type="merk" name="merk" value="{{$merk->merk}}" class="form-control" id="exampleInputPassword1">
            </div> --}}
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama</label>
                <input type="text" name="nama" value="{{$obat->nama}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
               </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Jenis</label>
                <input type="text" name="jenis" value="{{$obat->jenis}}" class="form-control" id="exampleInputEmail1">
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Merk</label>
                <select name="merk" class="form-control" id="">
                  <option value="">Pilih Merk</option>
                   @foreach ($merk as $item)
                  <option value="{{$item->id}}" {{$obat->merks_id == $item->id ? "selected" : ""}}>{{$item->kode}} - {{$item->merk}}</option>
                  @endforeach
               </select>
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Harga</label>
                <input type="merk" name="harga" value="{{$obat->harga}}" class="form-control" id="exampleInputEmail1">
              </div>
            <button type="submit" class="btn btn-primary">Edit Data</button>
          </form>

  </section>
@endsection
