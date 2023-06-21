@extends('layouts.main')
@section('title', 'eMaha - Form Student')
@section('content')
    <div class="card mt-4">
        <div class="card-header"><strong><h3>Form Data Student</h3></strong></div>
        <div class="card-body">
            <form action="/student/save" method="POST">
                @csrf
                <div class="form-group w-50">
                    <label><strong>NIM</strong></label>
                    <input type="number" name="nim" class="form-control" placeholder="Masukan NIM">
                </div>

                <div class="form-group w-50">
                    <label><strong>Nama</strong></label>
                    <input type="text" name="nama" class="form-control" placeholder="Masukan Nama">
                </div>
                <label><strong>Gender</strong></label>
                <div class="form-check">
                    <input type="radio" name="gender" class="form-check-input" value="Laki-laki">
                    <label>Laki-laki</label>
                </div>

                <div class="form-check">
                    <input type="radio" name="gender" class="form-check-input" value="Perempuan">
                    <label>Perempuan</label>
                </div>
                
                <label><strong>Program Studi</strong></label>
                <div class="from-group">
                    <select name="prodi" class="form-control">]
                        <option value="0">---Pilih Program Studi---</option>
                        <option value="Sistem Informasi">Sistem Informasi</option>
                        <option value="Informatika">Informatika</option>
                        <option value="Ilmu Komputer">Ilmu Komputer</option>
                        <option value="Sistem Komputer">Sistem Komputer</option>
                    </select>
                </div>

                <label><strong>Minat</strong></label>
                <div class="form-check">
                    <input type="checkbox" name="minat[]" class="form-check-input" value="AI">
                    <label>Artificial Intelegent</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" name="minat[]" class="form-check-input" value="WEB">
                    <label>Web Engineer</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" name="minat[]" class="form-check-input" value="DBMS">
                    <label>Database Engineer</label>
                </div>

                <div class="form-group mt-4">
                    <button type="submit" role="button" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection