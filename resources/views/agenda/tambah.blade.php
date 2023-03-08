@extends('layout.app')

@section('content')
<div class="container p-5">
  <div class="card">
    <div class="card-body">

      <form method="POST" action="{{ url('agenda') }}" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label class="form-label">Nama Guru</label>
          <select class="form-select" name="guru_id" aria-label="Default select example">
            <option selected>Pilih Nama Guru</option>
            @foreach ($guru as $g)
              <option value="{{ $g->id }}">{{ $g->nama }}</option>
            @endforeach
          </select>
          
        </div>
        <div class="mb-3">
          <label class="form-label">Mata Pelajaran</label>
          <input type="text" name="matapelajaran" class="form-control">
          
        </div>
       
        <div class="mb-3">
          <label class="form-label">Absensi</label>
          <select class="form-select" name="absensi" aria-label="Default select example">
            <option selected>Pilih Absensi</option>
            <option value="Hadir">Hadir</option>
            <option value="Tidak Hadir">Tidak Hadir</option>
          </select>
          
        </div>
        <div class="mb-3">
          <label class="form-label">Dokumentasi</label>
          <input type="file" name="dokumentasi" class="form-control">
          
        </div>
        <div class="mb-3">
          <label class="form-label">Kelas</label>
          <select class="form-select" name="kelas_id" aria-label="Default select example">
            <option selected>Pilih Kelas</option>
            @foreach ($kelas as $k)
            <option value="{{ $k->id }}">{{ $k->kelas }}</option>
          @endforeach
          </select>
          
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>
@endsection
