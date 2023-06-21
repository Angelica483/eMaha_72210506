@extends('layouts.main')
@section('title', 'eMaha - Form Edit Student')
@section('content')
    <div class="card mt-4">
        <div class="card-header"><strong><h3>Form Data Student</h3></strong></div>
        <div class="card-body">
            @php
                $minat = explode(',', $mhs->minat);
            @endphp
            <form action="/student/update/{{ $mhs->id }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group w-50">
                    <label><strong>NIM</strong></label>
                    <input type="number" name="nim" class="form-control" placeholder="Masukan NIM" value="{{ $mhs->nim }}">
                </div>

                <div class="form-group w-50">
                    <label><strong>Nama</strong></label>
                    <input type="text" name="nama" class="form-control" placeholder="Masukan Nama" value="{{ $mhs->nama }}">
                </div>
                <label><strong>Gender</strong></label>
                <div class="form-check">
                    <input type="radio" name="gender" class="form-check-input" value="Laki-laki" {{ $mhs->gender == 'Laki-laki' ? 'checked':''}}>
                    <label>Laki-laki</label>
                </div>

                <div class="form-check">
                    <input type="radio" name="gender" class="form-check-input" value="Perempuan" {{ $mhs->gender == 'Perempuan' ? 'checked':''}}>
                    <label>Perempuan</label>
                </div>
                
                <label><strong>Program Studi</strong></label>
                <div class="from-group">
                    <select name="prodi" class="form-control">]
                        <option value="0">---Pilih Program Studi---</option>
                        <option value="Sistem Informasi" {{ $mhs->prodi == 'Sistem Informasi' ? 'selected':''}}>Sistem Informasi</option>
                        <option value="Informatika" {{ $mhs->prodi == 'Informatika' ? 'selected':''}}>Informatika</option>
                        <option value="Ilmu Komputer" {{ $mhs->prodi == 'Ilmu Komputer' ? 'selected':''}}>Ilmu Komputer</option>
                        <option value="Sistem Komputer" {{ $mhs->prodi == 'Sistem Komputer' ? 'selected':''}}>Sistem Komputer</option>
                    </select>
                </div>

                <label><strong>Minat</strong></label>
                <div class="form-check">
                    <input type="checkbox" name="minat[]" class="form-check-input" value="AI" {{ in_array('AI', $minat) ? 'checked':'' }}>
                    <label>Artificial Intelegent</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" name="minat[]" class="form-check-input" value="WEB" {{ in_array('WEB', $minat) ? 'checked':'' }}>
                    <label>Web Engineer</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" name="minat[]" class="form-check-input" value="DBMS" {{ in_array('DBMS', $minat) ? 'checked':'' }}>
                    <label>Database Engineer</label>
                </div>

                <div class="form-group mt-4">
                    <button type="submit" role="button" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection