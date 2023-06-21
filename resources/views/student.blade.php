@extends('layouts.main')
@section('title', 'eMaha- Student')
@section('content')
<div class="card mt-4">
    <div class="card-header">
        <a href="/student/formadd" class="btn btn-primary" role="button"><i class="bi bi-plus-square-fill"></i> Mahasiswa </a>
    <form action="/student/search" method="GET" class="form-inline my-2 my-lg-0 float-right">
      <input name="q" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
    </form>
    </div>
    <div class="card-body">
      @if (session('create'))
          <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>{{ session('create') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          @elseif (session('update'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session('update') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          @elseif (session('delete'))
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>{{ session('delete') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
      @endif
    <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">No.</th>
      <th scope="col">NIM</th>
      <th scope="col">Nama</th>
      <th scope="col">Gender</th>
      <th scope="col">Prodi</th>
      <th scope="col">Minat</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($mhs as $idx => $n)
        <tr>
        <th scope="row">{{ $mhs->firstItem() + $idx }}</th>
        <td>{{ $n->nim }}</td>
        <td>{{ $n->nama }}</td>
        <td>{{ $n->gender }}</td>
        <td>{{ $n->prodi }}</td>
        <td>{{ $n->minat }}</td>
        <td>
          <a href="/student/edit/{{ $n->id }}" class="btn btn-outline-primary"><i class="bi bi-pencil-square"></i></a>
          <a href="/student/delete/{{ $n->id }}" class="btn btn-outline-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data?')"><i class="bi bi-trash"></i></a>


        </td>
        </tr>
    @endforeach
  </tbody>
</table>


<span class="float-right">{{ $mhs->links() }}</span>
    </div>
</div>
@endsection