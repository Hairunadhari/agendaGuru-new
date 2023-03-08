@extends('layout.app')

@section('content')
<div class="container p-5">
  <div class="card">
    <div class="card-body">

      <form method="POST" action="{{ url('agenda/'.$data->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        
        <div class="mb-3">
          <label class="form-label">Nama Guru</label>
          <select class="form-select" name="guru_id" aria-label="Default select example">
            <option value="{{ $data->guru_id }}">{{ $data->guru->nama }}</option>
            @foreach ($guru as $g)
              <option value="{{ $g->id }}">{{ $g->nama }}</option>
            @endforeach
          </select>
          
        </div>
        <div class="mb-3">
          <label class="form-label">Mata Pelajaran</label>
          <input type="text" name="matapelajaran" value="{{ $data->matapelajaran }}" class="form-control">
          
        </div>
        <div class="mb-3">
          <label class="form-label">Absensi</label>
          <input type="text" name="absensi" value="{{ $data->absensi }}" class="form-control">
          
        </div>
        <div class="mb-3">
          <label class="form-label">Dokumentasi</label>
          <input type="file" name="dokumentasi" value="{{ $data->dokumentasi }}" class="form-control">
          
        </div>
        <div class="mb-3">
          <label class="form-label">Kelas</label>
          <select class="form-select" name="kelas_id" aria-label="Default select example">
            <option value="{{ $data->kelas_id }}">{{ $data->kelas->kelas }}</option>
            @foreach ($kelas as $g)
              <option value="{{ $g->id }}">{{ $g->kelas }}</option>
            @endforeach
          </select>
          
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>
@endsection
