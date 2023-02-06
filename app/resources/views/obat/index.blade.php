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
      <th scope="col">Nama</th>
      <th scope="col">Jenis</th>
      <th scope="col">Merk</th>
      <th scope="col">Harga</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($obat as $item)
 <tr>
  <th scope="row">{{$nomor++}}</th>
  <td>{{$item->nama}}</td>
  <td>{{$item->jenis}}</td>
  <td>{{$item->merks->merk}}</td>
  <td>{{$item->harga}}</td>
  <td>
    <a href="/merk/edit/{{$item->id}}" class="btn btn-primary">Edit</a>
    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-default{{$item->id}}">
      Hapus
    </button>

    <div class="modal fade" id="modal-default{{$item->id}}">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Warning</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p>Apakah anda yakin ingin menghapus data {{$item->merk}} ?&hellip;</p>
          </div>
          <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
            <form action="/merk/{{$item->id}}" method="POST">
              @method('DELETE')
              @csrf
            <button type="submit" class="btn btn-primary">Ya</button>
          </form>
          </div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
  </td>
</tr>
    @endforeach

  </section>
@endsection
