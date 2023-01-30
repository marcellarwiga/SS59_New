@extends('layouts.master')
@section('judul', 'Data Obat')
@section('content-header')


<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Data Obat</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Blank Page</li>
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
        <a href="obat/form" class="btn btn-primary">Tambah Data</a>

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
        <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Kode</th>
      <th scope="col">Merk</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
    <tbody>
        @foreach ($obat as $item)
     <tr>
      <th scope="row">1</th>
      <td>{{$item->nama}}</td>
      <td>{{$item->jenis}}</td>
      <td>
        <a href="#" class="btn btn-primary">Edit</a>
        <a href="#" class="btn btn-danger">Hapus</a>
      </td>
    </tr>
        @endforeach
    
    <tbody>

  </section>
@endsection
